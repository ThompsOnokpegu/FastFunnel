<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials.header')
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <section class="bg-white">
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
                <a href="#" class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full hover:bg-gray-200" role="alert">
                    <span class="text-xs bg-deepr_green-50 font-montserrat tracking-wider font-medium rounded-full text-black px-4 py-1.5 mr-3">ROAS</span> <span class="text-sm font-montserrat font-medium">5X+ Return on Ad Spend</span> 
                    <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                </a>
                <h1 class="mb-4 text-4xl font-anton font-extrabold tracking-normal leading-none text-black md:text-5xl lg:text-6xl">The FAST Funnel</h1>
                <p class="mb-8 text-sm font-montserrat font-normal text-gray-900 lg:text-xl sm:px-16 xl:px-48">My Ad strategy is built on 3 pillars: <strong>Clarity, Certainty, and Trust</strong>. This strategy is ideal for small business owners, coaches, consultants, and service providers who want an actionable, repeatable system to generate leads and sales.</p>
                <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                    <a href="{{ route('discovery-call') }}" class="inline-flex justify-center items-center py-3 px-5 text-base tracking-wider font-anton font-medium text-center text-deepr_green-50 rounded-lg bg-black hover:bg-gray-900 focus:ring-4 focus:ring-primary-300">
                        WORK WITH ME
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                    <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-montserrat font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 ">
                        <svg class="mr-2 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                        How it Works
                    </a>  
                </div>
                
            </div>
        </section>
        <section class="bg-white">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <div class="grid gap-8 lg:grid-cols-3">
                    <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md">
                       
                        <img class=" rounded-xl" src="{{ asset('img/fastfunnel.png') }}" alt="Fast Funnel">
                        <h2 class="mb-2 text-3xl font-anton font-medium tracking-normal text-black"><a href="{{ route('fast-funnel') }}">The FAST Funnel <br>Playbook</a></h2>
                        <p class="mb-5 font-montserrat font-light text-gray-700">This step-by-step guide will teach you how to turn complete strangers into paying clients in just 24 hours using a simple ₦8000 ad.</p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center space-x-4">
                                <span class="font-anton tracking-wider text-black font-medium text-2xl">
                                    ₦13,000 <span class="text-sm text-gray-700" >NGN</span>
                                </span>
                            </div>
                            <a href="{{ route('fast-funnel') }}" wire:navigate.hover class="inline-flex items-center font-anton font-medium text-deepr_red-50 hover:underline">
                                BUY NOW
                                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </article> 
                    <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md">
                       
                        <img class=" rounded-xl" src="{{ asset('img/fastfunnel.png') }}" alt="Fast Funnel">
                        <h2 class="mb-2 text-3xl font-anton font-medium tracking-normal text-black"><a href="{{ route('fast-funnel') }}">The Fast Funnel <br>Mentorship</a></h2>
                        <p class="mb-5 font-montserrat font-light text-gray-700">Work directly with me to create, optimize, and scale your ads as we implement the Fast Funnel Strategy together for maximum results.</p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center space-x-4">
                                <span class="font-anton tracking-wider text-black font-medium text-2xl">
                                    ₦150,000 <span class="text-sm text-gray-700" >/Month</span>
                                </span>
                            </div>
                            <a href="{{ route('discovery-call') }}" class="inline-flex items-center font-anton font-medium text-deepr_red-50 hover:underline">
                                BOOK A CALL
                                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </article>  
                    <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md opacity-40">
                       
                        <img class=" rounded-xl" src="{{ asset('img/fastfunnel.png') }}" alt="Fast Funnel">
                        <h2 class="mb-2 text-3xl font-anton font-medium tracking-normal text-black"><a href="{{ route('fast-funnel') }}">The FAST Funnel <br>Video Course</a></h2>
                        <p class="mb-5 font-montserrat font-light text-gray-700">Learn the Fast Funnel Strategy at your own pace with easy-to-follow videos, plus join two live Zoom calls monthly for guidance and Q&A.</p>
                        <div class="flex justify-between items-center">
                            <div class="flex items-center space-x-4">
                                <span class="font-anton tracking-wider text-black font-medium text-2xl">
                                    ₦40,000 <span class="text-sm text-gray-700" >NGN</span>
                                </span>
                            </div>
                            <a href="#" wire:navigate class="inline-flex items-center font-anton font-medium text-gray-700 hover:underline">
                                COMING SOON!
                                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </div>
                    </article>
                                    
                </div>  
            </div>
        </section>
        @livewireScripts
    </body>
</html>
