@php
    $classes = "text-sm text-grey-600 hover:text-blue-500 hover:font-extrabold"
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>