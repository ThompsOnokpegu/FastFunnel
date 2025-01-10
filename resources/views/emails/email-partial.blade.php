<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('frontend/styless.min.css') }}">
        <link href="https://fonts.cdnfonts.com/css/ridley-grotesk" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Meddon&family=Montserrat:wght@300;400;600;700&family=Playfair+Display&display=swap">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <section class="max-w-2xl px-6 py-8 mx-auto bg-white">
            <header>
                {{-- <a href="#">
                    <img class="w-auto h-7 sm:h-8" src="https://merakiui.com/images/full-logo.svg" alt="">
                </a> --}}
                <span class="font-semibold bg-deepr_green-50 text-2xl text-black">The <span class="font-bold">FAST</span> Funnel</span>
            </header>
        
            
            @yield('email-body')

        
            <footer class="mt-8">
                <p class="text-gray-500">
                    This email was sent to <a href="{{ $user->email }}" class="text-green-600 hover:underline" target="_blank"></a>. 
                    
                </p>
        
                <p class="mt-3 text-gray-500">© {{ now()->year }} Deepr Marketing. All Rights Reserved.</p>
            </footer>
        </section>

        <script src="//unpkg.com/alpinejs" defer></script>
    </body>
</html>