@extends('emails.email-partial')

@section('email-body')
<main class="mt-8">
    
    <p class="text-xl text-gray-700 dark:text-gray-200">Hello {{ $user->name }},</p>
    
    
    <p class="mt-4 leading-loose text-black">
        I'm excited to welcome you to <span class="font-bold">The FAST Funnel</span> - your ₦8000 Ad Playbook.
    </p>
    
    <hr class="my-6 border-gray-200">

    <div>
        <div>
            <a href="{{ route('download') }}" class="inline-flex items-center text-green-600 underline gap-x-2 underline-offset-4">
                <span>Download The Guide</span>
                
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:rotate-180">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </a>

            <p class="mt-2 text-black">If you ever lose your file, come back to this email to download it again.</p>
        </div>
        <hr class="my-6 border-gray-200">

        <div>
            <a href="https://web.facebook.com/groups/fastfunnel/" class="inline-flex items-center text-green-600 underline dark:text-green-400 gap-x-2 underline-offset-4">
                <span>Join the Community</span>
                
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:rotate-180">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </a>

            <p class="mt-2 text-black">Get help from AJThompson and stay up-to-date with the latest announcements.</p>
        </div>
        <hr class="my-6 border-gray-200">
        <div>
            <a href="https://deeprmarketing.com" class="inline-flex items-center text-green-600 underline dark:text-green-400 gap-x-2 underline-offset-4">
                <span>Visit my Website</span>
                
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:rotate-180">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </a>

            <p class="mt-2 text-black">Explore my website design and online store setup services.</p>
        </div>
        <hr class="my-6 border-gray-200">
    </div>

    <p class="mt-2 mb-6 text-gray-500">
        Thanks for signing up. If you have any questions, send me a message <br /> at
        <a href="#" class="font-medium text-green-600 hover:text-green-500">aj@deeprmarketing.com</a>
        or on <a href="https://instagram.com/deepr_ecommerce" class="font-medium text-green-600 hover:text-green-500">Instagram</a>. I’d love to hear from you.<br/>
        — AJ Thompson
    </p>
    
    <a href="{{ route('download') }}" class="px-6 py-4 text-sm font-medium tracking-wider text-white capitalize transition-colors duration-300 transform bg-green-600 rounded-none hover:bg-green-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
        DOWNLOAD THE GUIDE
    </a>
</main>
@endsection