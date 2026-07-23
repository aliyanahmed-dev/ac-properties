<?php

use App\Models\User;

it('serves the public homepage at root without inertia', function () {
    $response = $this->get('/');

    $response->assertOk();
    $response->assertDontSee('data-page', false); // Inertia root attribute absent
});

it('serves admin login under the /admin prefix', function () {
    $this->get('/admin/login')->assertOk();
});

it('serves the admin dashboard at /admin/dashboard for authenticated users', function () {
    $user = User::factory()->create();

    $this->actingAs($user)->get('/admin/dashboard')->assertOk();
});

it('no longer serves the old root login path', function () {
    $this->get('/login')->assertNotFound();
});

it('resolves the login route name to the admin prefix', function () {
    expect(route('login', absolute: false))->toBe('/admin/login');
});
