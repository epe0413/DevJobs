<div class="p-8">
    <div class="mb-3">
        <h3 class="font-bold text-xl text-gray-800 my-2">
            {{ $vacante->titulo }}
        </h3>

        <div class="md:grid md:grid-cols-2 bg-gray-50 p-4 my-3 rounded-md">
            <p class="font-bold text-sm text-gray-800 my-1">Empresa: 
                <span class="font-normal">{{ $vacante->empresa }}</span>
            </p>
            <p class="font-bold text-sm text-gray-800 my-1">Último día para postularse: 
                <span class="font-normal">{{ $vacante->ultimo_dia->toFormattedDateString() }}</span>
            </p>
            <p class="font-bold text-sm text-gray-800 my-1">Categoria: 
                <span class="font-normal">{{ $vacante->categoria->categoria }}</span>
            </p>
            <p class="font-bold text-sm text-gray-800 my-1">Salario: 
                <span class="font-normal">{{ $vacante->salario->salario }}</span>
            </p>
        </div>
    </div>
</div>
