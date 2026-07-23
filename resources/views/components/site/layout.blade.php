@props([
    'title' => null,
    'description' => null,
    'canonical' => null,
    'image' => null,
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <x-seo :title="$title" :description="$description" :canonical="$canonical" :image="$image" />

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/js/site/app.ts'])
    </head>
    <body class="min-h-screen font-sans antialiased">
        @include('site.partials.header')

        <main class="mx-auto max-w-5xl px-4 py-10">
            {{ $slot }}
        </main>

        @include('site.partials.footer')
    </body>
</html>
