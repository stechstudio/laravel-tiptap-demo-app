@props([
    'attributes',
])

<div>
    <x-tiptap::editor wire:model="message.body" class="border-gray-200 shadow-sm" id="body" name="body" />
</div>
