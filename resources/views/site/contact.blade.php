<x-site.layout :title="$title" :description="$description">
    <section class="mx-auto max-w-xl py-12" x-data="{ submitting: false }">
        <h1 class="text-3xl font-semibold tracking-tight">Contact</h1>

        @if (session('status'))
            <div class="mt-4 rounded-md bg-accent px-4 py-3 text-sm text-accent-foreground">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('contact.store') }}" class="mt-6 space-y-4"
              @submit="submitting = true">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium">Name</label>
                <input id="name" name="name" type="text" value="{{ old('name') }}" required
                       class="mt-1 w-full rounded-md border border-input bg-background px-3 py-2 text-sm">
                @error('name')<p class="mt-1 text-sm text-destructive">{{ $message }}</p>@enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required
                       class="mt-1 w-full rounded-md border border-input bg-background px-3 py-2 text-sm">
                @error('email')<p class="mt-1 text-sm text-destructive">{{ $message }}</p>@enderror
            </div>

            <div>
                <label for="subject" class="block text-sm font-medium">Subject</label>
                <input id="subject" name="subject" type="text" value="{{ old('subject') }}"
                       class="mt-1 w-full rounded-md border border-input bg-background px-3 py-2 text-sm">
                @error('subject')<p class="mt-1 text-sm text-destructive">{{ $message }}</p>@enderror
            </div>

            <div>
                <label for="message" class="block text-sm font-medium">Message</label>
                <textarea id="message" name="message" rows="5" required
                          class="mt-1 w-full rounded-md border border-input bg-background px-3 py-2 text-sm">{{ old('message') }}</textarea>
                @error('message')<p class="mt-1 text-sm text-destructive">{{ $message }}</p>@enderror
            </div>

            <button type="submit" :disabled="submitting"
                    class="rounded-md bg-primary px-4 py-2 text-sm text-primary-foreground disabled:opacity-60">
                <span x-show="!submitting">Send message</span>
                <span x-show="submitting" x-cloak>Sending…</span>
            </button>
        </form>
    </section>
</x-site.layout>
