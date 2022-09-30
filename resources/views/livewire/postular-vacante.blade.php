<div class="bg-gray-100 p-3 mt-3 flex flex-col justify-center items-center">
    <h3 class="text-center text-xl font-bold my-2">Postularme a esta vacante</h3>

    <form class="w-96 mt-3" action="">
        <div class="mb-2">
            <x-input-label for="cv" :value="__('Curriculum u hoja de vida')"/>
            <x-text-input id="cv" type="file" accept=".pdf" class="block mt-1 w-full" />
        </div>
        <x-primary-button class="my-3">
            {{ __('Postularme')}}
        </x-primary-button>
    </form>
</div>
