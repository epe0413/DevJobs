<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    @foreach ($vacantes as $vacante )
        <div class="p-6 bg-white border-b border-gray-200 hover:bg-indigo-100">
            <div class="">
                <a href="#" class="text-lg font-bold">
                    {{ $vacante->titulo}}
                </a>
            </div>
        </div>
    @endforeach
    
</div>
