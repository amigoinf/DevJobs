<div>
        @forelse ($vacantes as $vacante)
        <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
            <div class="leading-4">
                <a href="#" class="text-xl font-bold  hover:text-blue-700  active:text-yellow-500"
                > {{$vacante->titulo}}</a>
                <p class="text-sem text-gray-600 font-bold hover:text-black">
                    {{$vacante->empresa}} - Fecha fin: {{$vacante->ultimo_dia->format('d/m/Y')}}
                </p>
            </div>
            <div class="flex flex-col md:flex-row items-stretch gap-3 items-center mt-5 md:mt-0">
                <a
                    href="#"
                    class="bg-slate-800 py-2 px-4 rounded text-xs text-white uppercase hover:bg-slate-600 hover:font-bold active:bg-yellow-500 text-center"
                >Candidatos</a>
                <a
                href="{{ route('vacantes.edit', $vacante->id) }}"
                class="bg-blue-800 py-2 px-4 rounded text-xs text-white uppercase hover:bg-blue-600 hover:font-bold active:bg-yellow-500 text-center"
                >Editar</a>
                <button

                    wire:click="$emit('prueba')"
                    class="bg-red-600 py-2 px-4 rounded text-xs text-white uppercase hover:bg-red-500 hover:font-bold active:bg-yellow-500 text-center"
                    >
                    Eliminar
            </button>
         
            </div>
        </div>
        @empty
            <p class="p-3 text-center text-sm font-bold text-gray-600"> No hay vacantes ahora mismo</p>
        @endforelse
        <div class="mt-10">
            {{ $vacantes->links()}}
        </div>
</div>

@push('scripts')

{{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}

<script>
    Livewire.on('prueba', () => {
        alert ('a ver si ahora funciona')
    })
</script>
    {{-- // Livewire.on('prueba', () => {
    //     alert ('a ver si ahora funciona')
    // })
// Swal.fire({
//     title: '¿Estas completamente seguro?',
//     text: "Una vez borrado no podemos recuperarlo",
//     icon: 'warning',
//     showCancelButton: true,
//     confirmButtonColor: '#3085d6',
//     cancelButtonColor: '#d33',
//     confirmButtonText: '¡SI!, Borralo por favor',
//     cancelButtonText: 'ABORTA'
//   }).then((result) => {
//     if (result.isConfirmed) {
//         Swal.fire({
//             title: '¡ELIMINIADA!',
//             text: "La vacante ha sido borrada",
//             icon: 'success',
//             confirmButtonText: 'Aceptar',
//         })}
//   })

//   </script> --}}