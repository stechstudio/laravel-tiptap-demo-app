<div>
    <div x-data="{ counter: 0 }" class="my-4">
        <button @click="counter++" type="button" class="p-4 text-xl text-white bg-green-600 rounded-lg">+</button>
        <button @click="counter--" type="button" class="p-4 text-xl text-white bg-green-600 rounded-lg">-</button>

        <p x-text="counter" class="text-2xl text-white font-bold"></p>
    </div>

    <x-input.editor wire:model="message" />
</div>
