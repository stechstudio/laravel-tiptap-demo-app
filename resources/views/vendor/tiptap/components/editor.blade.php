@props([
    'model',
])

<!-- @todo: extract to config? -->
@php
    $colors = [
        [
            'EA9999',
            'F9CB9C',
            'FFE599',
            'B6D7A8',
            'A2C4C9',
            '9FC5E8',
            'B4A7D6',
            'D5A6BD',
            'E06666',
            'F6B26B',
            'FFD966',
            '93C47D',
            '76A5AF',
            '6FA8DC',
            '8E7CC3',
            'C27BA0',
            'CC0000',
            'E69138',
            'F1C232',
            '6AA84F',
            '45818E',
            '3D85C6',
            '674EA7',
            'A64D79',
            '990000',
            'B45F06',
            'BF9000',
            '38761D',
            '134F5C',
            '0B5394',
            '351C75',
            '351C75',
            '660000',
            '783F04',
            '7F6000',
            '274E13',
            '0C343D',
            '0C343D',
            '073763',
            '4C1130',
        ],
    ];
@endphp

<!--suppress JSValidateTypes, JSUnresolvedFunction, JSUnresolvedVariable -->
<div
    x-data="TipTapEditor"
    {{ $attributes->whereDoesntStartWith('wire:model') }}
>
    <div x-cloak>
        <div class="bg-gray-100 rounded flex justify-between items-stretch mb-1 p-1">
            <div class="ProseMirror-toolbar flex items-center space-x-1">
                <button
                    @click="window.tiptap.chain().focus().toggleHeading({ level: 3 }).run()"
                    :class="(isActive('heading', updatedAt)) ? 'bg-gray-500 focus:bg-gray-400 hover:bg-gray-400 text-white' : 'focus:bg-gray-300 hover:bg-gray-300 text-gray-600'"
                    type="button"
                    class="text-sm rounded-sm"
                >
                    <x-far-heading class="w-5 h-5 px-1.5 py-1" />
                </button>

                <button
                    @click="window.tiptap.chain().focus().toggleBold().run()"
                    :class="(isActive('bold', updatedAt)) ? 'bg-gray-500 focus:bg-gray-400 hover:bg-gray-400 text-white' : 'focus:bg-gray-300 hover:bg-gray-300 text-gray-600'"
                    type="button"
                    class="text-sm rounded-sm"
                >
                    <x-far-bold class="w-5 h-5 px-1.5 py-1" />
                </button>

                <button
                    @click="window.tiptap.chain().focus().toggleItalic().run()"
                    :class="(isActive('italic', updatedAt)) ? 'bg-gray-500 focus:bg-gray-400 hover:bg-gray-400 text-white' : 'focus:bg-gray-300 hover:bg-gray-300 text-gray-600'"
                    type="button"
                    class="text-sm rounded-sm"
                >
                    <x-far-italic class="w-5 h-5 px-1.5 py-1" />
                </button>

                <!-- @todo: replace -->
                <div class="relative inline-block text-left">
                    <x-tiptap::dropdown :rightAlign="false">
                        <x-slot name="trigger">
                            <div
                                @click="setColor('#999999')"
                                class="w-6 h-6 flex-shrink-0 border border-transparent hover:border-gray-500 cursor-pointer p-px"
                            >
                                <div class="w-full h-full" style="background-color: #999999"></div>
                            </div>
                        </x-slot>

                        <div class="bg-white p-4 rounded shadow space-y-2">
                            <div class="flex justify-between">
                                <div
                                    @click="window.tiptap.chain().focus().unsetColor().run()"
                                    class="flex-grow h-6 border border-transparent hover:border-gray-500 cursor-pointer p-px"
                                >
                                    <div class="w-full h-full" style="background-color: #000"></div>
                                </div>

                                <div
                                    @click="setColor('#444444')"
                                    class="w-6 h-6 flex-shrink-0 border border-transparent hover:border-gray-500 cursor-pointer p-px"
                                >
                                    <div class="w-full h-full" style="background-color: #444444"></div>
                                </div>

                                <div
                                    @click="setColor('#666666')"
                                    class="w-6 h-6 flex-shrink-0 border border-transparent hover:border-gray-500 cursor-pointer p-px"
                                >
                                    <div class="w-full h-full" style="background-color: #666666"></div>
                                </div>

                                <div
                                    @click="setColor('#999999')"
                                    class="w-6 h-6 flex-shrink-0 border border-transparent hover:border-gray-500 cursor-pointer p-px"
                                >
                                    <div class="w-full h-full" style="background-color: #999999"></div>
                                </div>
                            </div>

                            @foreach($colors AS $group)
                                <div class="flex flex-wrap justify-between">
                                    @foreach($group AS $color)
                                        <div class="w-6 h-6 flex-shrink-0 border border-transparent hover:border-gray-500 cursor-pointer p-px"
                                             @click="setColor('#{{ $color }}')">
                                            <div class="w-full h-full" style="background-color: {{ '#' . $color }}"></div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </x-tiptap::dropdown>
                </div>

                <div class="mx-2 inline-block border-l border-gray-300 h-full"></div>

                <button
                    :class="(isActive('link', updatedAt)) ? 'bg-gray-500 focus:bg-gray-400 hover:bg-gray-400 text-white' : 'focus:bg-gray-300 hover:bg-gray-300 text-gray-600'"
                    @click="setLink()"
                    type="button"
                    class="text-sm rounded-sm"
                >
                    <x-far-link @click.prevent="open = ! open" class="w-5 h-5 px-1.5 py-1" />
                </button>

                <button
                    @click="window.tiptap.chain().focus().toggleBulletList().run()"
                    :class="(isActive('bulletList', updatedAt)) ? 'bg-gray-500 focus:bg-gray-400 hover:bg-gray-400 text-white' : 'focus:bg-gray-300 hover:bg-gray-300 text-gray-600'"
                    type="button"
                    class="text-sm rounded-sm"
                >
                    <x-far-list-ul @click.prevent="open = ! open" class="w-5 h-5 px-1.5 py-1" />
                </button>

                <button
                    @click="window.tiptap.chain().focus().toggleOrderedList().run()"
                    :class="(isActive('orderedList', updatedAt)) ? 'bg-gray-500 focus:bg-gray-400 hover:bg-gray-400 text-white' : 'focus:bg-gray-300 hover:bg-gray-300 text-gray-600'"
                    type="button"
                    class="text-sm rounded-sm"
                >
                    <x-far-list-ol @click.prevent="open = ! open" class="w-5 h-5 px-1.5 py-1" />
                </button>
            </div>

            <div class="ProseMirror-toolbar flex items-center space-x-1">
                <button
                    @click="window.tiptap.chain().focus().undo().run()"
                    :disabled="! canUndo"
                    type="button"
                    class="text-sm rounded-sm text-gray-600 focus:bg-gray-300 hover:bg-gray-300 disabled:opacity-25 disabled:cursor-default"
                >
                    <x-far-rotate-left @click.prevent="open = ! open" class="w-5 h-5 px-1.5 py-1" />
                </button>

                <button
                    @click="window.tiptap.chain().focus().redo().run()"
                    :disabled="! canRedo"
                    type="button"
                    class="text-sm rounded-sm text-gray-600 focus:bg-gray-300 hover:bg-gray-300 disabled:opacity-25 disabled:cursor-default"
                >
                    <x-far-rotate-right @click.prevent="open = ! open" class="w-5 h-5 px-1.5 py-1" />
                </button>
            </div>
        </div>

        <div x-ref="editor"></div>
    </div>

    <script src="{{ asset('js/tiptap.js') }}"></script>
</div>
