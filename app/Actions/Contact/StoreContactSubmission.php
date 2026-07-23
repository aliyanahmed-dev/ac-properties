<?php

namespace App\Actions\Contact;

use App\Models\ContactSubmission;
use App\Notifications\ContactSubmissionReceived;
use Illuminate\Support\Facades\Notification;

class StoreContactSubmission
{
    /**
     * @param  array{name: string, email: string, subject?: ?string, message: string, ip_address?: ?string}  $data
     */
    public function handle(array $data): ContactSubmission
    {
        $submission = ContactSubmission::create($data);

        if ($recipient = config('mail.contact_to')) {
            Notification::route('mail', $recipient)
                ->notify(new ContactSubmissionReceived($submission));
        }

        return $submission;
    }
}
