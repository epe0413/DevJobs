<div class="bg-gray-100 p-3 mt-3 flex flex-col justify-center items-center">
    <h3 class="text-center text-xl font-bold my-2">Postularme a esta vacante</h3>

    @if(session()->has('mensaje'))
        <p class="border border-gren-600 bg-green-100 text-green-600 font-bold p-2 my-3 rounded">
            {{session('mensaje')}}
        </p>
    @else
        <form wire:submit.prevent='postularme' class="w-96 mt-3">
            <div class="mb-2">
                <x-input-label for="cv" :value="__('Curriculum u hoja de vida (PDF)')"/>
                <x-text-input id="cv" type="file" accept=".pdf" wire:model="cv" class="block mt-1 w-full" />
            </div>

            @error('cv')
                <livewire:mostrar-alerta :message="$message"/>
            @enderror

            <x-primary-button class="my-3">
                {{ __('Postularme')}}
            </x-primary-button>
        </form>
    @endif
</div>
