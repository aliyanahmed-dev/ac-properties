<?php

namespace App\Http\Controllers\Site;

use App\Actions\Contact\StoreContactSubmission;
use App\Http\Controllers\Controller;
use App\Http\Requests\Site\StoreContactRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function create(): View
    {
        return view('site.contact', [
            'title' => 'Contact',
            'description' => 'Get in touch with us.',
        ]);
    }

    public function store(StoreContactRequest $request, StoreContactSubmission $action): RedirectResponse
    {
        $action->handle([
            ...$request->validated(),
            'ip_address' => $request->ip(),
        ]);

        return redirect()
            ->route('contact')
            ->with('status', 'Thanks — your message has been sent.');
    }
}
