<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Meta Description -->
        <meta name="description" content="Take the Life Balance Quiz to discover how balanced your life is across key areas like joy, health, and relationships. Get personalized insights and actionable steps to enhance your well-being.">

        <!-- Open Graph Tags -->
        <meta property="og:title" content="Life Balance Quiz">
        <meta property="og:description" content="Take the Life Balance Quiz to discover how balanced your life is across key areas like joy, health, and relationships. Get personalized insights and actionable steps to enhance your well-being.">
        <meta property="og:image" content="https://example.com/path/to/your/image.jpg">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">

        <!-- Twitter Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Life Balance Quiz">
        <meta name="twitter:description" content="Take the Life Balance Quiz to discover how balanced your life is across key areas like joy, health, and relationships. Get personalized insights and actionable steps to enhance your well-being.">
        <meta name="twitter:image" content="https://example.com/path/to/your/image.jpg">

        <!-- Structured Data -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "WebSite",
          "name": "Life Balance Quiz",
          "url": "{{ url()->current() }}",
          "description": "Take the Life Balance Quiz to discover how balanced your life is across key areas like joy, health, and relationships. Get personalized insights and actionable steps to enhance your well-being.",
          "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.5",
            "reviewCount": "90"
          }
        }
        </script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.ts', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
