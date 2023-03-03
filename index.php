<head>
         <meta charset="utf-8">
        <title>Patisserie | HOME</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Meta tags for PWA -->
        <meta name= "apple-mobile-web-app-status-bar" content="#aa7700">
        <meta name="theme-color" content="black">

        <!-- Manifest File link -->
        <link rel="manifest" href="manifest.json">

</head>

<script>
        window.addEventListener('load', () => {
        registerSW();
        });

        // Register the Service Worker
        async function registerSW() {
        if ('serviceWorker' in navigator) {
            try {
            await navigator
                    .serviceworker
                    .register('serviceworker.js');
            }
            catch (e) {
            console.log('SW registration failed');
            }
        }
        }
        </script>
