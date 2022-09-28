<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ($vacantes as $vacante)
            <div class="p-6 bg-white border-b border-gray-200 hover:bg-indigo-100 md:flex md:justify-between md:items-center">
                <div class="">
                    <a href="#" class="text-lg font-bold">
                        {{ $vacante->titulo}}
                    </a>
                    <p class="text-sm text-gray-600 font-bold">{{ $vacante->empresa }}</p>
                    <p class="text-sm text-gray-500">Último día: {{ $vacante->ultimo_dia->format('d/m/y')}}</p>
                </div>
                <div class="flex flex-col md:flex-row items-stretch gap-2 mt-3 md:mt-0">
                    <a href="#"
                        class="bg-slate-800 py-2 px-4 rounded-lg text-white text-xs font-bold text-center"
                    >
                        Candidatos
                    </a>
                    <a href="{{ route('vacantes.edit',$vacante->id)}}"
                        class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold text-center"
                    >
                        Editar
                    </a>
                    <button
                        wire:click="$emit('mostrarAlerta', {{ $vacante->id }})"
                        class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold text-center"
                    >
                        Eliminar
                    </button>
                </div>
            </div> 
        @empty
            <p class="p-3 text-center text-sm text-gray-600">No hay vacantes que mostrar</p>
        @endforelse
        
    </div>

    <div class="mt-5">
        {{ $vacantes->links() }}
    </div>
</div>

@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on("mostrarAlerta",vacanteId => {
            Swal.fire({
                title: '¿Eliminar Vacante?',
                text: "Una vacante eliminada no se puede recuperar",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, ¡Eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    //Eliminar la vacante
                    Livewire.emit('eliminarVacante', vacanteId)
                    Swal.fire(
                    'Se eliminó la Vacante!',
                    'Eliminado correctamente',
                    'success'
                    )
                }
            })
        })
        
    </script>
    
@endpush