<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mis vacantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                @if (session()->has('mensaje'))
                  
                <div class="uppercase border border-l-8 border-green-600 bg-green-200 text-green-600 text-sm font-bold p-4">
                    {{session('mensaje')}}

                </div>
                @endif
                
                <livewire:mostrar-vacantes />

            </div>
        </div>
    </div>
</x-app-layout>
