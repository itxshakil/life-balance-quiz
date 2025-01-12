<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Meta Description -->
        <meta name="description" content="Take the Life Balance Quiz to discover how balanced your life is across key areas like joy, health, and relationships. Get personalized insights and actionable steps to enhance your well-being.">

        <!-- Open Graph Tags -->
        <meta property="og:title" content="Ready for a Happier You? Take the Life Balance Quiz Now!">
        <meta property="og:description" content="Take the Life Balance Quiz to discover how balanced your life is across key areas like joy, health, and relationships. Get personalized insights and actionable steps to enhance your well-being.">
        <meta property="og:image" content="https://example.com/path/to/your/image.jpg">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">

        <!-- Twitter Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Ready for a Happier You? Take the Life Balance Quiz Now!">
        <meta name="twitter:description" content="Take the Life Balance Quiz to discover how balanced your life is across key areas like joy, health, and relationships. Get personalized insights and actionable steps to enhance your well-being.">
        <meta name="twitter:image" content="https://example.com/path/to/your/image.jpg">

        <!-- Manifest File -->
        <link rel="manifest" href="/app.webmanifest">

        <!-- Structured Data -->
        <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "WebApplication",
              "name": "Life Balance Quiz",
              "applicationCategory": "Health & Fitness, Personal Development",
              "browserRequirements": "Requires modern browser with HTML5 support.",
              "availableOnDevice": "Desktop, Mobile",
              "countriesSupported": "Worldwide",
              "countriesNotSupported": "",
              "downloadUrl": "{{ url()->current() }}",
              "featureList": "Goal setting, Task management, Habit tracking, Progress monitoring",
              "fileSize": "120KB",
              "installUrl": "{{ url()->current() }}",
              "memoryRequirements": "1GB RAM minimum",
              "operatingSystem": "Android, iOS, Windows, macOS",
              "permissions": "Internet access for syncing data",
              "processorRequirements": "x64 architecture",
              "releaseNotes": "Minor bug fixes and improvements",=
              "softwareVersion": "1.0.0",
              "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": 4.5,
                "ratingCount": 90
              },
              "offers": {
                "@type": "Offer",
                "price": "0.00",
                "priceCurrency": "USD",
                "url": "{{ url()->current() }}",
                "eligibleRegion": {
                  "@type": "Place",
                  "name": "Worldwide"
                }
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

        @production
            <!-- Google tag (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-44QE5R8BSJ"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'G-44QE5R8BSJ');
            </script>

            <script type="text/javascript">
                (function(c,l,a,r,i,t,y){
                    c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
                    t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
                    y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
                })(window, document, "clarity", "script", "pmlfn3bdho");
            </script>

            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4132498105758259"
                    crossorigin="anonymous"></script>
        @endproduction
    </head>
    <body class="font-sans antialiased dark:bg-gray-800 dark:text-white">
        @inertia

        <script type="text/javascript">
            if('serviceWorker' in navigator) {
                window.addEventListener('load', function() {
                    navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
                        let serviceWorker;

                        if (registration.installing) {
                            serviceWorker = registration.installing;
                            console.log('Service worker installing');
                        } else if (registration.waiting) {
                            serviceWorker = registration.waiting;
                            console.log('Service worker installed & waiting');
                        } else if (registration.active) {
                            serviceWorker = registration.active;
                            console.log('Service worker active');
                        }

                        if (serviceWorker) {
                            console.log('ServiceWorker phase:', serviceWorker.state);
                            serviceWorker.addEventListener('statechange', function(e) {
                                console.log('ServiceWorker phase:', e.target.state);
                            });
                        }

                        console.log('ServiceWorker registration successful with scope: ', registration.scope);
                    }, function(err) {
                        console.log('ServiceWorker registration failed: ', err);
                    });
                });
            }
        </script>
    </body>
</html>
