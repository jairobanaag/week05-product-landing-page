{{--
    Testimonial Card Component
    Props: photo, name, position
--}}
@props([
    'photo' => 'https://placehold.co/80x80',
    'name' => 'Customer Name',
    'position' => 'Regular Customer',
])

<div class="relative bg-white rounded-2xl p-8 shadow-sm hover:shadow-xl transition duration-300 border border-gray-100">
    <span class="absolute top-6 right-6 text-5xl text-green-100 font-serif leading-none">"</span>

    <div class="text-green-500 text-sm mb-4">★★★★★</div>

    <p class="text-gray-700 text-sm leading-relaxed mb-6 relative z-10">
        {{ $slot }}
    </p>

    <div class="flex items-center gap-3 pt-4 border-t border-gray-100">
        <img src="{{ $photo }}" alt="{{ $name }}" class="w-11 h-11 rounded-full object-cover ring-2 ring-green-100">
        <div>
            <p class="font-semibold text-black text-sm">{{ $name }}</p>
            <p class="text-xs text-green-600">{{ $position }}</p>
        </div>
    </div>
</div>