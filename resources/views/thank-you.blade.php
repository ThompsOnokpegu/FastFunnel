<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>The Fast Funnel by AJThompson | Your 8K Ad Playbook</title>
    
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Meta Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1352309452423607');
            fbq('track', 'PageView')
            fbq('track', 'Purchase', {
                value: 13000.00,
                currency: 'NGN'
            });
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1352309452423607&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Meta Pixel Code -->
    </head>
    <body class="antialiased font-sans">
        <main class="relative h-screen flex flex-1 flex-col overflow-hidden px-4 py-8 sm:px-6 lg:px-8">
            <div class="relative flex flex-1 flex-col items-center justify-center pb-16 pt-12">
                <h1 class="text-2xl font-bold font-montserrat bg-deepr_green-50">The Fast Funnel</h1>
              
                @if ($response['status'])
                    <div class="max-w-2xl text-center">
                        <h1 class="text-3xl font-anton font-light text-black sm:text-4xl">Thank you!</h1>
                        <div class="mt-6 text-base font-montserrat leading-7 text-black">Click the link below to <strong class="font-semibold text-black">download your Fast Funnel Guide.</strong> Also, I've sent you an email with the download link.
                            
                            If you need help, message me at <span class="underline text-green-700">aj@deeprmarketing.com</span> with this reference number: <strong class="font-bold text-black bg-deepr_green-50">{{ $response['data']['reference'] }}</strong>
                        </div>
                        <a class="inline-flex justify-center rounded-lg text-sm font-montserrat font-semibold py-2.5 px-4 bg-black text-white hover:bg-gray-900 mt-6" href="{{ route('download') }}">
                        <span>DOWNLOAD THE GUIDE</span>
                        </a>
                    </div>
                @else
                    <div class="max-w-2xl text-center font-montserrat">
                        <h1 class="text-3xl font-extrabold text-black sm:text-4xl">Oops! Payment failed…</h1>
                        <div class="mt-6 text-base leading-7 text-black">If you have been debited, you should get automatic reversal within the hour. 
                            <strong class="font-semibold text-black">For help and support, message me with this reference number:<strong class="font-bold bg-deepr_green-50">{{ $response['data']['reference'] }}</strong> at <span class="underline">aj@deeprmarketing.com</span>
                        </div>
                        <a class="inline-flex justify-center rounded-lg text-sm font-semibold py-2.5 px-4 bg-black text-white hover:bg-slate-700 mt-6" href="{{ route('home') }}">
                        <span>Return to Home</span>
                        </a>
                    </div>
                @endif
                    
            </div>
            <footer class="relative shrink-0">
                <div class="relative z-10 flex font-montserrat flex-none items-start justify-center">
                    <svg width="32" height="32" fill="none" class="flex-none">
                        <path d="M8.75 3.5H22V2H8.75v1.5zM3.5 23.25V8.75H2v14.5h1.5zM23 28.5h-2V30h2v-1.5zm-12 0H8.75V30H11v-1.5zm10 0h-5V30h5v-1.5zm-5 0h-5V30h5v-1.5zM2 23.25A6.75 6.75 0 008.75 30v-1.5a5.25 5.25 0 01-5.25-5.25H2zM23 30a5 5 0 005-5h-1.5a3.5 3.5 0 01-3.5 3.5V30zM22 3.5A4.5 4.5 0 0126.5 8H28a6 6 0 00-6-6v1.5zM8.75 2A6.75 6.75 0 002 8.75h1.5c0-2.9 2.35-5.25 5.25-5.25V2z" class="fill-gray-400"></path><path d="M14.75 12.75a2 2 0 012-2h10.5a2 2 0 012 2v7.5a2 2 0 01-2 2h-10.5a2 2 0 01-2-2v-7.5z" class="stroke-gray-600" stroke-width="1.5"></path>
                        <path d="M15.5 11.5l4.512 3.992a3 3 0 003.976 0L28.5 11.5" class="stroke-gray-600" stroke-width="1.5"></path>
                        <path d="M9 11v4M9 19v.01" class="stroke-gray-600" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <p class="ml-6 max-w-lg flex-auto text-sm text-gray-600">
                        <strong class="font-semibold text-black">Don’t see it yet?</strong> 
                        It might be in your spam folder – if so, make sure to click “not spam” so it comes back to your inbox.
                    </p>
                </div>
            </footer>
        </main>
    </body>
</html>