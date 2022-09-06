@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600">
            {{ __('Ehhhh!!! NO...... ¿Otro intento?') }}
        </div>

        <ul class="mt-3 list-none text-sm space-y-2">
            @foreach ($errors->all() as $error)
                <li class="bg-red-100 border-l-8 border-red-600 text-red-600 font-extrabold p-3">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
