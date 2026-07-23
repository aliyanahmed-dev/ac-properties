<?php

use App\Models\ContactSubmission;
use App\Notifications\ContactSubmissionReceived;
use Illuminate\Support\Facades\Notification;

it('renders the contact form', function () {
    $this->get('/contact')->assertOk()->assertSee('name="email"', false);
});

it('stores a submission and queues a notification', function () {
    Notification::fake();
    config(['mail.contact_to' => 'owner@example.com']);

    $response = $this->post('/contact', [
        'name' => 'Ada Lovelace',
        'email' => 'ada@example.com',
        'subject' => 'Hello',
        'message' => 'This is a test message.',
    ]);

    $response->assertRedirect(route('contact', absolute: false));
    expect(ContactSubmission::count())->toBe(1);
    expect(ContactSubmission::query()->orderBy('created_at')->first()->email)->toBe('ada@example.com');

    Notification::assertSentOnDemand(ContactSubmissionReceived::class);
});

it('stores a submission without notifying when no recipient is configured', function () {
    Notification::fake();
    config(['mail.contact_to' => null]);

    $this->post('/contact', [
        'name' => 'Ada Lovelace',
        'email' => 'ada@example.com',
        'message' => 'No recipient configured.',
    ])->assertRedirect(route('contact', absolute: false));

    expect(ContactSubmission::count())->toBe(1);
    Notification::assertNothingSent();
});

it('rejects invalid submissions', function () {
    $response = $this->from('/contact')->post('/contact', [
        'name' => '',
        'email' => 'not-an-email',
        'message' => '',
    ]);

    $response->assertRedirect('/contact');
    $response->assertSessionHasErrors(['name', 'email', 'message']);
    expect(ContactSubmission::count())->toBe(0);
});
