<nav x-data="{ open: false }" class="absolute top-0 left-0 right-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 md:h-20">

                       <a href="/" class="flex items-center gap-2">
                <img src="{{ asset('images/logo.jpg') }}" alt="Type C Cafe Logo" class="h-10 w-10 object-contain rounded-full">
                <span class="text-xl font-bold text-white">Type <span class="text-green-300">C</span> Cafe</span>
            </a>

            <div class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-300">
                <a href="#home" class="hover:text-white transition">Home</a>
                <a href="#features" class="hover:text-white transition">Features</a>
                <a href="#menu" class="hover:text-white transition">Menu</a>    
                <a href="#pricing" class="hover:text-white transition">Pricing</a>
                <a href="#testimonials" class="hover:text-white transition">Testimonials</a>
                <a href="#contact" class="hover:text-white transition">Contact</a>
            </div>

            <div class="hidden md:flex items-center gap-3">
                <a href="#signin" class="text-sm font-semibold text-white hover:text-green-300">Sign In</a>
                <x-button href="#get-started" variant="primary">Get Started</x-button>
            </div>

            <button @click="open = !open" class="md:hidden p-2 rounded-lg text-white hover:bg-white/10">
                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display:none">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div x-show="open" x-cloak class="md:hidden pb-4 space-y-2 bg-green-950/95 rounded-xl px-4" style="display:none">
            <a href="#home" class="block py-2 text-gray-200 hover:text-white">Home</a>
            <a href="#features" class="block py-2 text-gray-200 hover:text-white">Features</a>
            <a href="#pricing" class="block py-2 text-gray-200 hover:text-white">Pricing</a>
            <a href="#testimonials" class="block py-2 text-gray-200 hover:text-white">Testimonials</a>
            <a href="#contact" class="block py-2 text-gray-200 hover:text-white">Contact</a>
            <div class="pt-2 pb-2 flex flex-col gap-2">
                <a href="#signin" class="text-center py-2 font-semibold text-white">Sign In</a>
                <x-button href="#get-started" variant="primary" class="w-full">Get Started</x-button>
            </div>
        </div>
    </div>
</nav>