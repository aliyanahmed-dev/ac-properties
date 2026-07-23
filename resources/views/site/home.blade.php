<x-site.layout :title="$title" :description="$description">
    <section class="py-12">
        <h1 class="text-3xl font-semibold tracking-tight">{{ config('app.name', 'Laravel') }}</h1>
        <p class="mt-3 max-w-prose text-muted-foreground">
            This is the public site. Rendered with Blade and Alpine — no JavaScript required.
        </p>
        <a href="{{ route('contact') }}"
           class="mt-6 inline-block rounded-md bg-primary px-4 py-2 text-sm text-primary-foreground">
            Get in touch
        </a>
    </section>
</x-site.layout>
