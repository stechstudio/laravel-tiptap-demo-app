@props([
    'color',
])

<div
    @click="window.tiptap.chain().focus().unsetColor().run()"
    class="w-6 h-6 cursor-pointer"
>
    <div class="w-full h-full" style="background-color: {{ $color }}"></div>
</div>
