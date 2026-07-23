<x-site.layout title="Page not found">
    <section class="py-24 text-center">
        <p class="text-sm font-medium text-muted-foreground">404</p>
        <h1 class="mt-2 text-3xl font-semibold tracking-tight">Page not found</h1>
        <p class="mt-3 text-muted-foreground">The page you’re looking for doesn’t exist or has moved.</p>
        <a href="{{ route('home') }}" class="mt-6 inline-block rounded-md bg-primary px-4 py-2 text-sm text-primary-foreground">Back home</a>
    </section>
</x-site.layout>
