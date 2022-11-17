@props([
    'color',
])

<div
    @click="window.tiptap.chain().focus().unsetColor().run()"
    class="flex-grow h-6 p-px border border-transparent hover:border-gray-500 cursor-pointer"
>
    <div class="w-full h-full" style="background-color: {{ $color }}"></div>
</div>
