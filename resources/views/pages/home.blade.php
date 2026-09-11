<x-layouts.app title="Type C Cafe - Fresh Coffee, Real Conversations">

    <x-navbar />
    <x-hero />

    <section class="py-10 bg-white border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div>
                <p class="text-3xl font-extrabold text-green-700">10K+</p>
                <p class="text-xs text-gray-500 mt-1 uppercase tracking-wide">Happy Customers</p>
            </div>
            <div>
                <p class="text-3xl font-extrabold text-green-700">50+</p>
                <p class="text-xs text-gray-500 mt-1 uppercase tracking-wide">Coffee Blends</p>
            </div>
            <div>
                <p class="text-3xl font-extrabold text-green-700">4.9★</p>
                <p class="text-xs text-gray-500 mt-1 uppercase tracking-wide">Average Rating</p>
            </div>
            <div>
                <p class="text-3xl font-extrabold text-green-700">15</p>
                <p class="text-xs text-gray-500 mt-1 uppercase tracking-wide">Branches Nationwide</p>
            </div>
        </div>
    </section>

    <section id="features" class="py-16 md:py-24 bg-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-green-700 font-semibold text-sm uppercase tracking-wide">Why Type C Cafe</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-black mt-2">Everything you'll love about us</h2>
                <p class="text-gray-600 mt-4">From bean to cup, every detail is crafted for your daily ritual.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <x-feature-card icon="☕" title="Freshly Roasted Beans" number="01">
                    Beans roasted in small batches every week for peak freshness and flavor.
                </x-feature-card>
                <x-feature-card icon="📱" title="Order Ahead" number="02">
                    Skip the line — order through our app and pick up when it's ready.
                </x-feature-card>
                <x-feature-card icon="🎁" title="Rewards Program" number="03">
                    Earn points with every purchase and redeem them for free drinks.
                </x-feature-card>
                <x-feature-card icon="🛋️" title="Cozy Spaces" number="04">
                    Comfortable seating and free Wi-Fi, perfect for work or catching up.
                </x-feature-card>
                <x-feature-card icon="🌱" title="Ethically Sourced" number="05">
                    We partner directly with local farmers for fair-trade, sustainable coffee.
                </x-feature-card>
                <x-feature-card icon="🚚" title="Fast Delivery" number="06">
                    Get your favorite blend delivered hot and fresh, right to your door.
                </x-feature-card>
            </div>
        </div>
    </section>

    {{-- Menu Categories --}}
    <section id="menu" class="py-16 md:py-24 bg-white/60 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-green-700 font-semibold text-sm uppercase tracking-wide">Explore the Menu</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-black mt-2">Menu Categories</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-0 rounded-2xl overflow-hidden shadow-lg">

                <div class="bg-gray-50 p-8">
                    <p class="text-lg font-bold text-black">All Time Favorites</p>
                    <p class="text-sm text-gray-500 mb-6">From ₱99</p>

                    <ul class="space-y-3 text-sm text-gray-700 mb-8">
                        <li class="flex justify-between border-b border-gray-200 pb-2">
                            <span>Mango Paradise</span><span>₱139</span>
                        </li>
                        <li class="flex justify-between border-b border-gray-200 pb-2">
                            <span>Iced Hibiscus Tea</span><span>₱99</span>
                        </li>
                        <li class="flex justify-between border-b border-gray-200 pb-2">
                            <span>Classic Iced Coffee</span><span>₱109</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Choco Overload</span><span>₱149</span>
                        </li>
                    </ul>

                    <x-button href="#order" variant="dark" class="w-full">Order Now</x-button>
                </div>

                <div class="bg-green-700 text-white p-8">
                    <p class="text-lg font-bold">Signature Drinks</p>
                    <p class="text-sm text-green-200 mb-6">From ₱129</p>

                    <ul class="space-y-3 text-sm mb-8">
                        <li class="flex justify-between border-b border-white/20 pb-2">
                            <span>Salted Caramel Coffee</span><span>₱129</span>
                        </li>
                        <li class="flex justify-between border-b border-white/20 pb-2">
                            <span>Alamang Shake</span><span>₱149</span>
                        </li>
                        <li class="flex justify-between border-b border-white/20 pb-2">
                            <span>Brown Sugar Latte</span><span>₱139</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Ube Cream Frappe</span><span>₱159</span>
                        </li>
                    </ul>

                    <x-button href="#order" variant="secondary" class="w-full">Order Now</x-button>
                </div>

                <div class="bg-gray-50 p-8">
                    <p class="text-lg font-bold text-black">Hot Brews</p>
                    <p class="text-sm text-gray-500 mb-6">From ₱89</p>

                    <ul class="space-y-3 text-sm text-gray-700 mb-8">
                        <li class="flex justify-between border-b border-gray-200 pb-2">
                            <span>Americano</span><span>₱89</span>
                        </li>
                        <li class="flex justify-between border-b border-gray-200 pb-2">
                            <span>Cafe Latte</span><span>₱99</span>
                        </li>
                        <li class="flex justify-between border-b border-gray-200 pb-2">
                            <span>Cappuccino</span><span>₱109</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Mocha</span><span>₱119</span>
                        </li>
                    </ul>

                    <x-button href="#order" variant="dark" class="w-full">Order Now</x-button>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="py-16 md:py-24 bg-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-green-700 font-semibold text-sm uppercase tracking-wide">Our Menu</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-black mt-2">More coffee to love</h2>
                <p class="text-gray-600 mt-4">Explore more of our handcrafted drinks, made fresh daily.</p>
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
    </section>

    <section id="testimonials" class="py-16 md:py-24 bg-white/60 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-green-700 font-semibold text-sm uppercase tracking-wide">Testimonials</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-black mt-2">Loved by our regulars</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <x-testimonial-card photo="https://placehold.co/80x80/15803d/ffffff?text=A" name="Ana Reyes" position="Freelance Writer">
                    Type C Cafe is my second office. Great coffee, great Wi-Fi, and the staff remembers my order!
                </x-testimonial-card>
                <x-testimonial-card photo="https://placehold.co/80x80/000000/ffffff?text=M" name="Miguel Santos" position="College Student">
                    The rewards program actually pays off. Free drinks almost every week!
                </x-testimonial-card>
                <x-testimonial-card photo="https://placehold.co/80x80/15803d/ffffff?text=J" name="Joyce Cruz" position="Small Business Owner">
                    I order ahead every morning through the app — saves me so much time.
                </x-testimonial-card>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-20 bg-black">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-4">Ready for your next cup?</h2>
            <p class="text-gray-300 mb-8">Join thousands of coffee lovers who start their day with Type C Cafe.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <x-button href="#get-started" variant="primary">Start Free Trial</x-button>
                <x-button href="#contact" variant="outline">Contact Sales</x-button>
            </div>
        </div>
    </section>

    <x-footer />

</x-layouts.app>