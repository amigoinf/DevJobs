
    <form class="md:w-1/2 space-y-6" wire:submit.prevent='editarVacante'>
        <!-- Titulo vacante -->
        <div>
            <x-label for="titulo" :value="__('Titulo de la Vacante')" />

            <x-input 
                id="titulo"
                class="block mt-1 w-full" 
                type="text" 
                wire:model="titulo" 
                :value="old('titulo')" 
                placeholder="Titulo Vacante"
            />

            @error('titulo')
                <livewire:mostrar-alerta :message="$message" /> 
            @enderror
        </div>
        <!-- Salario (Rango) -->
        <div>
            <x-label for="salario" :value="__('Salario ofertado')" />

            <select
                    id="salario"
                    wire:model="salario"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                    :value="old('salario')"
                    >
                <option>--Seleccione salario --</option>
                @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
                @endforeach
            </select>
            @error('salario')
                <livewire:mostrar-alerta :message="$message" /> 
            @enderror
        </div>
            <!-- Categoria profesional (Rango) -->
        <div>
            <x-label for="categoria" :value="__('Categoria profesional')" />

            <select
                    id="categoria"
                    wire:model="categoria"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                    :value="old('categoria')"
                    >
                <option>--Seleccione categoria --</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                    @endforeach
                </select>
            </select>
            @error('categoria')
            <livewire:mostrar-alerta :message="$message" /> 
        @enderror
        </div>
        <!-- Empresa -->
        <div>
            <x-label for="empresa" :value="__('Empresa')" />

            <x-input 
                id="empresa"
                class="block mt-1 w-full" 
                type="text" 
                wire:model="empresa" 
                :value="old('empresa')" 
                placeholder="Empresa: ej. Netflix, Apple, Tesla"
            />
            @error('empresa')
            <livewire:mostrar-alerta :message="$message" /> 
        @enderror
        </div>
        <!-- Fecha fin oferta -->
        <div>
            <x-label for="ultimo_dia" :value="__('Fecha limite inscripción')" />

            <x-input 
                id="ultimo_dia"
                class="block mt-1 w-full" 
                type="date" 
                wire:model="ultimo_dia" 
                :value="old('ultimo_dia')" 
            />
            @error('ultimo_dia')
            <livewire:mostrar-alerta :message="$message" /> 
        @enderror
        </div>
       <!-- DPT.- Descripcion puesto de trabajo -->
        <div>
            <x-label for="descripcion" :value="__('Descripcion del puesto de trabajo')" />

            <textarea
            wire:model="descripcion"
            placeholder="Descripcion del puesto de trabajo, experiencia requerida, tecnologías, etc..."
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full h-72"
            ></textarea>
            @error('descripcion')
            <livewire:mostrar-alerta :message="$message" /> 
        @enderror

        </div>
           <!-- imagen -->
           <div>
            <x-label for="imagen" :value="__('Imagen_nueva')" />

            <x-input 
                id="imagen"
                class="block mt-1 w-full" 
                type="file" 
                wire:model="imagen_nueva" 
                accept="image/*"
            />
            @error('imagen_nueva')
                <livewire:mostrar-alerta :message="$message" /> 
            @enderror
            <div class="my-5 w-96">
                <x-label :value="__('Imagen Actual')" />
                
                <img src="{{ asset('storage/vacantes/' . $usuario . '/'. $imagen ) }}" alt="{{'Imagen de la vacante '.$titulo }}">

            </div>

            <div class="my-5 w-96">
                @if($imagen_nueva)
                <x-label :value="__('Imagen nueva')" />
                <img src="{{ $imagen_nueva->temporaryUrl() }}">
                @endif
            </div>

        </div>
        <br>
        <div>
            <x-button class="md:flex md:justify-center w-full">
                Guardar vacante
            </x-button>
        </div>
    </form>


