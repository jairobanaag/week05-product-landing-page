@props([
    'image' => 'https://placehold.co/300x300',
    'name' => 'Coffee',
    'description' => 'A rich, bold coffee.',
    'price' => '₱99',
    'rating' => '5.0',
])

<div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1 transition duration-300">
    <div class="h-24 md:h-28 overflow-hidden">
        <img src="{{ $image }}" alt="{{ $name }}" class="w-full h-full object-cover">
    </div>
    <div class="p-3">
        <div class="flex items-center justify-between mb-1">
            <h3 class="font-semibold text-black text-sm">{{ $name }}</h3>
            <span class="text-xs text-violet-600 font-semibold">★ {{ $rating }}</span>
        </div>
        <p class="text-xs text-gray-500 leading-relaxed mb-2 line-clamp-2">{{ $description }}</p>
        <div class="flex items-center justify-between">
            <span class="text-sm font-bold text-violet-700">{{ $price }}</span>
            <a href="#pricing" class="text-xs font-semibold text-violet-700 hover:text-violet-900">More →</a>
        </div>
    </div>
</div>