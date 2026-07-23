<header class="border-b border-border">
    <nav class="mx-auto flex max-w-5xl items-center justify-between px-4 py-4">
        <a href="{{ route('home') }}" class="font-semibold">{{ config('app.name', 'Laravel') }}</a>
        <ul class="flex items-center gap-6 text-sm">
            <li><a href="{{ route('home') }}" class="hover:text-primary">Home</a></li>
            <li><a href="{{ route('contact') }}" class="hover:text-primary">Contact</a></li>
        </ul>
    </nav>
</header>
