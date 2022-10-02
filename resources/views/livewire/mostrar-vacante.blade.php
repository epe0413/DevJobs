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
    <div class="md:grid md:grid-cols-6 gap-4">
        <div class="md:col-span-2">
            <img class="rounded-md" src="{{ asset('storage/vacantes/' . $vacante->imagen) }}" alt="{{ 'Imagen Vacante' . $vacante->titulo }}">
        </div>
        <div class="md:col-span-4">
            <h2 class="text-xl font-bold mb-2">Descripción del puesto</h2>
            <p>{{ $vacante->descripcion }}</p>
        </div>
    </div>
    @guest
        <div class="mt-5 bg-gray-50 border border-dashed p-3 text-center rounded-md">
            <p>
                ¿Deseas aplicar a este vacante? <a class="font-bold text-indigo-600" href="{{ route('register') }}">Obten una cuenta y aplica a esta y otras vacantes</a>
            </p>
        </div>
    @endguest
    
    @cannot('create', App\Models\Vacante::class)
        <livewire:postular-vacante :vacante="$vacante"/>
    @endcannot
        

</div>
