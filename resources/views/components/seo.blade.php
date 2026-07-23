@props([
    'title' => null,
    'description' => null,
    'canonical' => null,
    'image' => null,
])

@php
    $resolvedTitle = $title ?? config('app.name', 'Laravel');
    $resolvedCanonical = $canonical ?? url()->current();
@endphp

<title>{{ $resolvedTitle }}</title>

@if ($description)
    <meta name="description" content="{{ $description }}">
@endif

<link rel="canonical" href="{{ $resolvedCanonical }}">

<meta property="og:title" content="{{ $resolvedTitle }}">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ $resolvedCanonical }}">
@if ($description)
    <meta property="og:description" content="{{ $description }}">
@endif
@if ($image)
    <meta property="og:image" content="{{ $image }}">
@endif

<meta name="twitter:card" content="{{ $image ? 'summary_large_image' : 'summary' }}">
<meta name="twitter:title" content="{{ $resolvedTitle }}">
@if ($description)
    <meta name="twitter:description" content="{{ $description }}">
@endif
@if ($image)
    <meta name="twitter:image" content="{{ $image }}">
@endif
