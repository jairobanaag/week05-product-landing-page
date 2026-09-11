@props([
    'name' => 'Coffee',
    'image' => 'https://placehold.co/300x300/047857/ffffff?text=Coffee',
    'description' => 'A rich, bold coffee.',
    'rating' => '4.9',
    'price' => '₱99',
    'featured' => false,
])

<div @class([
    'bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1 transition duration-300',
    'ring-2 ring-green-600' => $featured,
])>
    <div class="h-32 md:h-36 overflow-hidden">
        <img src="{{ $image }}" alt="{{ $name }}" class="w-full h-full object-cover">
    </div>
    <div class="p-4">
        <div class="flex items-center justify-between mb-1">
            <h3 class="font-semibold text-black text-base">{{ $name }}</h3>
            <span class="text-xs text-green-600 font-semibold">★ {{ $rating }}</span>
        </div>
        <p class="text-xs text-gray-500 leading-relaxed mb-3 line-clamp-2">{{ $description }}</p>
        <div class="flex items-center justify-between">
            <span class="text-sm font-bold text-black">{{ $price }}</span>
            <a href="#order" class="text-xs font-semibold text-green-700 hover:text-green-900 transition">Order →</a>
        </div>
    </div>
</div>