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
                <a href="#"
                    class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold text-center"
                >
                    Editar
                </a>
                <a href="#"
                    class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold text-center"
                >
                    Eliminar
                </a>
            </div>
        </div> 
    @empty
        <p class="p-3 text-center text-sm text-gray-600">No hay vacantes que mostrar</p>
    @endforelse
    
</div>
