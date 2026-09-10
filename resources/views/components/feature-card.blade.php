{{--
    Feature Card Component (used in Features section)
    Props: icon, title
--}}
@props([
    'icon' => '☕',
    'title' => 'Feature Title',
])

<div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl hover:-translate-y-1 transition duration-300 border border-violet-100">
    <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-gradient-to-br from-violet-600 to-purple-600 text-2xl mb-4 shadow-md shadow-violet-500/20">
        <span class="text-white">{{ $icon }}</span>
    </div>
    <h3 class="text-lg font-semibold text-black mb-2">{{ $title }}</h3>
    <p class="text-sm text-gray-600 leading-relaxed">
        {{ $slot }}
    </p>
</div>