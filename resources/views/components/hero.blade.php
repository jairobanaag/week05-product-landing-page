<section id="home" class="relative overflow-hidden bg-gradient-to-br from-green-800 via-emerald-700 to-green-950 rounded-b-[3rem] pt-28 pb-12 md:pt-32 md:pb-16">

    {{-- Decorative glows --}}
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-green-400/30 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 -left-24 w-72 h-72 bg-emerald-400/25 rounded-full blur-3xl"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-8 items-center">

            {{-- Text Content --}}
            <div class="text-center md:text-left">
                <span class="inline-block bg-white/10 text-green-200 text-xs font-semibold px-3 py-1 rounded-full mb-3 backdrop-blur-sm">
                    ☕ Type C Cafe.
                </span>
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white leading-tight">
                    Enjoy the most
                    <span class="text-green-300">delicious coffee</span>
                </h1>
                <p class="mt-4 text-base text-gray-100 max-w-lg mx-auto md:mx-0">
                    Freshly roasted beans, cozy spaces, and a menu made for your daily ritual.
                    Order ahead, earn rewards, and never miss your favorite blend.
                </p>
                <div class="mt-6 flex flex-col sm:flex-row justify-center md:justify-start gap-3">
                    <x-button href="#get-started" variant="primary">Order Now</x-button>
                    <x-button href="#features" variant="outline">See the Menu</x-button>
                </div>
            </div>

            {{-- Product Illustration --}}
            <div class="relative flex justify-center">
                <img src="{{ asset('images/type-c.png') }}"
                     alt="Type C Cafe"
                     class="rounded-[2rem] w-72 md:w-96 shadow-2xl object-cover aspect-square transition duration-300 ease-out hover:scale-105 hover:-rotate-3 cursor-pointer">
            </div>
        </div>
                {{-- Best Sellers --}}
        <div class="mt-10">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-lg md:text-xl font-bold text-white">Our Best Sellers</h2>
                <a href="#features" class="text-sm text-green-200 hover:text-white transition">View all →</a>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4">
                <x-product-card
                    image="{{ asset('images/mango-paradise.png') }}"
                    name="Mango Paradise"
                    description="Our crowd favorite — creamy mango shake topped with whipped cream and caramel drizzle."
                    price="₱139"
                    rating="4.9"
                />
                <x-product-card
                    image="{{ asset('images/iced-hibiscus-tea.png') }}"
                    name="Iced Hibiscus Tea"
                    description="A refreshing floral tea, back by popular demand."
                    price="₱99"
                    rating="4.8"
                />
                <x-product-card
                    image="{{ asset('images/salted-caramel-coffee.png') }}"
                    name="Salted Caramel Coffee"
                    description="Bold iced coffee finished with a salted caramel drizzle."
                    price="₱129"
                    rating="4.9"
                />
                <x-product-card
                    image="{{ asset('images/alamang-shake.png') }}"
                    name="Alamang Shake"
                    description="A unique local favorite, topped with our freshly picked green mango."
                    price="₱149"
                    rating="4.9"
                />
            </div>
        </div>
    </div>
</section>