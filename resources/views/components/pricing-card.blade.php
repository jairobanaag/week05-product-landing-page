@props([
    'plan' => 'Starter',
    'price' => '₱0',
    'period' => '/month',
    'featured' => false,
    'icon' => '☕',
    'tagline' => 'Perfect for casual sippers',
    'features' => [],
])

<div @class([
    'relative rounded-[2rem] p-8 transition duration-300 overflow-hidden',
    'bg-gradient-to-b from-green-700 via-emerald-800 to-black text-white shadow-2xl shadow-green-500/40 md:-translate-y-4' => $featured,
    'bg-white text-black border-2 border-green-100 hover:border-green-300 hover:shadow-xl' => ! $featured,
])>

    @if($featured)
        <div class="absolute -top-10 -right-10 w-40 h-40 bg-green-400/30 rounded-full blur-3xl"></div>

        <span class="absolute top-5 right-5 bg-white text-green-800 text-[11px] font-bold px-3 py-1 rounded-full shadow-md">
            ★ POPULAR
        </span>
    @endif

    <div @class([
        'relative w-14 h-14 flex items-center justify-center rounded-2xl text-2xl mb-5',
        'bg-white/15' => $featured,
        'bg-green-100' => ! $featured,
    ])>
        {{ $icon }}
    </div>

    <h3 class="text-xl font-bold mb-1">{{ $plan }}</h3>
    <p @class(['text-sm mb-5', 'text-green-200' => $featured, 'text-gray-500' => ! $featured])>{{ $tagline }}</p>

    <p class="mb-6 flex items-baseline gap-1">
        <span class="text-5xl font-extrabold">{{ $price }}</span>
        <span @class(['text-sm', 'text-green-200' => $featured, 'text-gray-400' => ! $featured])>{{ $period }}</span>
    </p>

    <x-button href="#subscribe-{{ Str::slug($plan) }}" :variant="$featured ? 'secondary' : 'dark'" class="w-full mb-7">
        Choose {{ $plan }}
    </x-button>

    <ul class="space-y-3.5 text-sm">
        @foreach($features as $feature)
            <li class="flex items-center gap-3">
                <span @class([
                    'flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center text-[10px]',
                    'bg-white/20 text-white' => $featured,
                    'bg-green-600 text-white' => ! $featured,
                ])>✓</span>
                <span @class(['text-green-100' => $featured, 'text-gray-700' => ! $featured])>{{ $feature }}</span>
            </li>
        @endforeach
    </ul>
</div>