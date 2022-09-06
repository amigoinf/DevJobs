<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('¿Olvidaste tu password?¿De veras? ¡NUNCA A NADIE LE HABIA PASADO!
            No te preocupes, te enviamos via email un enlace para que puedas reestablecerla y poner la misma que ya tenias pero que no te acordabas hasta ahora') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Dirección de correo electrónico')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex justify-between my-5">
                <x-link
                :href="route('login')">
                ¡Ya me acorde de mi Password!
            </x-link>
            <x-link
            :href="route('register')">
            ¡Yo no estoy registrado!
            </x-link>
            </div>
            <x-button class="w-full item-center">
                {{ __('Envíame el enlace para reestablecerla') }}
            </x-button>
        </form>
    </x-auth-card>
</x-guest-layout>
 