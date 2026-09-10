<section id="home" class="relative overflow-hidden bg-gradient-to-br from-violet-950 via-purple-950 to-black rounded-b-[3rem] pt-28 pb-12 md:pt-32 md:pb-16">

    {{-- Decorative glows --}}
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-violet-500/30 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 -left-24 w-72 h-72 bg-purple-500/20 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-8 items-center">

            {{-- Text Content --}}
            <div class="text-center md:text-left">
                <span class="inline-block bg-white/10 text-violet-200 text-xs font-semibold px-3 py-1 rounded-full mb-3 backdrop-blur-sm">
                    ☕ Wake & Brew Coffee Co.
                </span>
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white leading-tight">
                    Enjoy the most
                    <span class="text-violet-300">delicious coffee</span>
                </h1>
                <p class="mt-4 text-base text-gray-300 max-w-lg mx-auto md:mx-0">
                    Freshly roasted beans, cozy spaces, and a menu made for your daily ritual.
                    Order ahead, earn rewards, and never miss your favorite blend.
                </p>
                <div class="mt-6 flex flex-col sm:flex-row justify-center md:justify-start gap-3">
                    <x-button href="#get-started" variant="primary">Order Now</x-button>
                    <x-button href="#features" variant="outline">See the Menu</x-button>
                </div>
            </div>

            {{-- Product Illustration with floating badges --}}
            <div class="relative flex justify-center">
                <div class="relative">
                    <img src="https://placehold.co/380x380/2e1065/ffffff?text=Wake+%26+Brew"
                         alt="Wake and Brew coffee"
                         class="rounded-[2rem] w-64 md:w-80 shadow-2xl">

                    <div class="absolute -top-5 -right-5 bg-white/95 backdrop-blur-sm rounded-xl px-3 py-2 shadow-lg text-center">
                        <div class="text-violet-600 text-xs">★★★★★</div>
                        <p class="text-[10px] text-gray-600 mt-1 max-w-[95px]">4.9 out of 5 rating from our customers</p>
                    </div>

                    <div class="absolute -bottom-5 -left-5 bg-white/95 backdrop-blur-sm rounded-xl px-3 py-2 shadow-lg text-center">
                        <div class="text-violet-600 text-xs">★★★★★</div>
                        <p class="text-[10px] text-gray-600 mt-1 max-w-[95px]">Loved by 10,000+ coffee drinkers</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Best Sellers --}}
        <div class="mt-10">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg md:text-xl font-bold text-white">Our Best Sellers</h2>
                <a href="#features" class="text-sm text-violet-300 hover:text-white transition">View all →</a>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4">
                <x-product-card
                    image="https://placehold.co/300x200/3a2618/ffffff?text=Americano"
                    name="Americano"
                    description="Bold and smooth, made from pure espresso."
                    price="₱99"
                    rating="4.9"
                />
                <x-product-card
                    image="https://placehold.co/300x200/1c1c1c/ffffff?text=Black+Coffee"
                    name="Black Coffee"
                    description="Simple, hot, and straight to the point."
                    price="₱79"
                    rating="4.8"
                />
                <x-product-card
                    image="https://placehold.co/300x200/6d28d9/ffffff?text=Mocha"
                    name="Mocha"
                    description="Chocolate and espresso in perfect balance."
                    price="₱129"
                    rating="4.9"
                />
                <x-product-card
                    image="https://placehold.co/300x200/4c1d95/ffffff?text=Cold+Brew"
                    name="Cold Brew"
                    description="Slow-steeped for a smooth, bold finish."
                    price="₱109"
                    rating="4.7"
                />
            </div>
        </div>
    </div>
</section>