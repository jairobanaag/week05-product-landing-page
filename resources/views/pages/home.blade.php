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

    <section class="py-16 md:py-24 bg-white/60 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-green-700 font-semibold text-sm uppercase tracking-wide">See It In Action</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-black mt-2">See Type C Cafe in action</h2>
                <p class="text-gray-600 mt-4">
                    Preview your order, track your rewards, and discover new blends —
                    all from our simple, intuitive dashboard and mobile app.
                </p>
            </div>

            <div class="grid sm:grid-cols-3 gap-4 mb-12 max-w-3xl mx-auto">
                <div class="flex items-center gap-2 bg-white rounded-xl px-4 py-3 shadow-sm border border-gray-100">
                    <span class="text-green-600">✓</span>
                    <span class="text-sm text-gray-700">Real-time order tracking</span>
                </div>
                <div class="flex items-center gap-2 bg-white rounded-xl px-4 py-3 shadow-sm border border-gray-100">
                    <span class="text-green-600">✓</span>
                    <span class="text-sm text-gray-700">Personalized recommendations</span>
                </div>
                <div class="flex items-center gap-2 bg-white rounded-xl px-4 py-3 shadow-sm border border-gray-100">
                    <span class="text-green-600">✓</span>
                    <span class="text-sm text-gray-700">One-tap reordering</span>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="https://placehold.co/500x350/14532d/ffffff?text=Product+Screenshot" alt="Product screenshot" class="w-full h-full object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="https://placehold.co/500x350/15803d/ffffff?text=Dashboard+Preview" alt="Dashboard preview" class="w-full h-full object-cover">
                </div>
                <div class="rounded-2xl overflow-hidden shadow-lg">
                    <img src="https://placehold.co/500x350/000000/ffffff?text=Mobile+View" alt="Mobile view" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="py-16 md:py-24 bg-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-green-700 font-semibold text-sm uppercase tracking-wide">Membership</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-black mt-2">Choose your Type C plan</h2>
                <p class="text-gray-600 mt-4">Pick the plan that matches your daily coffee ritual.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <x-pricing-card
                    plan="Starter"
                    icon="☕"
                    tagline="Perfect for casual sippers"
                    price="₱199"
                    :features="['1 free drink/month', 'Standard rewards', 'App ordering']"
                />
                <x-pricing-card
                    plan="Professional"
                    icon="🥤"
                    tagline="For your everyday brew habit"
                    price="₱399"
                    :featured="true"
                    :features="['3 free drinks/month', 'Double rewards points', 'Priority pickup', 'Birthday treat']"
                />
                <x-pricing-card
                    plan="Enterprise"
                    icon="🏆"
                    tagline="Unlimited coffee, VIP treatment"
                    price="₱799"
                    :features="['Unlimited drip coffee', 'VIP rewards tier', 'Free delivery', 'Dedicated support']"
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