<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('¡Ya casi estamos! Tu eres de fiar, pero hay gente que no. ASi que vamos a enviarte un correo electronico para confirmar que la dirección que nos has dado existe. En el mail vienen intrucciones pero simplemente pinncha en el enlace de confirmacion ') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Oido cocina! Te mandamos un nuevo enlce. Si no te llega llama a la oficina para que te lo miremos') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="text-sm text-grey-600 hover:text-blue-500 hover:font-extrabold">
                    {{ __('Cerrar sesion') }}
                </button>
            </form>
        </div>
        <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button class="w-full justify-center my-3">
                        {{ __('Reenvíame el enlace de confirmación') }}
                    </x-button>
                </div>
            </form>
    </x-auth-card>
</x-guest-layout>
