@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm text-gray-800 font-bold uppercase mb-2']) }}>
    {{ $value ?? $slot }}
</label>
