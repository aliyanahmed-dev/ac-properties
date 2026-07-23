<x-site.layout title="Server error">
    <section class="py-24 text-center">
        <p class="text-sm font-medium text-muted-foreground">500</p>
        <h1 class="mt-2 text-3xl font-semibold tracking-tight">Something went wrong</h1>
        <p class="mt-3 text-muted-foreground">We hit an unexpected error. Please try again later.</p>
        <a href="{{ route('home') }}" class="mt-6 inline-block rounded-md bg-primary px-4 py-2 text-sm text-primary-foreground">Back home</a>
    </section>
</x-site.layout>
