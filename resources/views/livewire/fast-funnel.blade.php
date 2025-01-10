<section class="bg-white">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-0 xl:gap-12 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto lg:col-span-6">
            <img class=" rounded-xl" src="{{ asset('img/fastfunnel.png') }}" alt="Fast Funnel">
            {{-- <p class="mb-3 text-lg italic text-black lg:text-xl">Stop losing money on ads that don’t work?</p> --}}
            <h1 class="max-w-2xl my-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">Get Paying Clients in Just 24 Hours with ₦8000 Ad</h1>
            {{-- <p class="max-w-2xl mb-6 font-light text-black lg:mb-8 md:text-lg lg:text-xl">Follow my proven 3-step system to attract leads and close sales.</p> --}}
            <div class="ml-10">
                <ul class="max-w-xl mb-4 space-y-4 text-lg sm:text-2xl text-black list-disc list-outside">
                    <li>
                        <span class="underline">Easy-to-follow</span> steps.
                    </li>
                    <li>
                        Works for any <span class="font-bold">service-based business</span>.
                    </li>
                    <li>
                        <span class="font-bold">Affordable</span> for small budgets.
                    </li>    
                </ul>  
            </div>      
        </div>
        <div class="mt-5 sm:mt-0 lg:col-span-5 border rounded-md border-gray-100 shadow-lg">
            
            <form wire:submit="payOnce" class="w-full bg-white p-4 sm:p-6 lg:max-w-xl lg:p-8"> 
                <h2 class="text-3xl mb-5 font-semibold text-gray-900 dark:text-white sm:text-4xl">₦13000 NGN</h2>       
                <section class="bg-white py-3 antialiased">
                    
                    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                        <div class="mx-auto max-w-5xl">
                            
                            <div class="lg:items-start lg:gap-12">
                                <div class="mb-6 grid grid-cols-2 gap-4">
                                    <div class="col-span-2">
                                        <label for="full_name" class="mb-2 block text-sm font-medium text-gray-900"> Full name* </label>
                                        <input type="text" id="full_name" wire:model="billing_name" class="block w-full border rounded border-gray-300 bg-gray-50 py-4 px-5 text-sm text-gray-900 focus:border-green-500 focus:ring-green-500" placeholder="AJ Thompson"/>
                                        <div>
                                            @error('billing_name') <span class="error text-deepr_red-50">{{ $message }}</span> @enderror 
                                        </div>
                                    </div>
                        
                                    <div class="col-span-2">
                                        <label for="email" class="mb-2 block text-sm font-medium text-gray-900"> Email address* </label>
                                        <input type="email" id="email" wire:model="billing_email" class="block w-full border rounded border-gray-300 bg-gray-50 py-4 px-5 pe-10 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500" placeholder="Email Address"/>
                                        <div>
                                            @error('billing_email') <span class="error text-deepr_red-50">{{ $message }}</span> @enderror 
                                        </div>
                                    </div> 
                                </div>
                                <div class="mt-6 grow sm:mt-8 lg:mt-8">
                                    <div class="space-y-4 rounded-lg border border-gray-100 bg-gray-50 p-6">
                                        <div class="space-y-2">
                                            <dl class="flex items-center justify-between gap-4">
                                            <dt class="text-base font-normal text-gray-500 ">Original price</dt>
                                            <dd class="text-base font-medium text-gray-900">₦32000</dd>
                                            </dl>
                            
                                            <dl class="flex items-center justify-between gap-4">
                                            <dt class="text-base font-normal text-gray-500 ">Savings</dt>
                                            <dd class="text-base font-medium text-green-500">-₦19000</dd>
                                            </dl>
                            
                                            <dl class="flex items-center justify-between gap-4">
                                            <dt class="text-base font-normal text-gray-500">Tax</dt>
                                            <dd class="text-base font-medium text-gray-900">₦0.00</dd>
                                            </dl>
                                        </div>
                        
                                        <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2">
                                            <dt class="text-base font-bold text-gray-900">Total</dt>
                                            <dd class="text-base font-bold text-gray-900">₦13000.00</dd>
                                        </dl>
                                    </div>
                                    <button type="submit" class="flex w-full items-center rounded justify-center bg-green-700 px-5 mt-5 py-4 text-sm font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-4  focus:ring-primary-300">GET THE GUIDE FOR JUST ₦13000</button>
                                    <div class="mt-6 flex items-center justify-center gap-8">
                                        <img src="{{ asset('img/paystack-ii.webp') }}" alt="Paystack" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>                
    </div>
</section>