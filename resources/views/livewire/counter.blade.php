<div>
{{--    test livewire--}}
    <h1>{{ $count }}</h1>

    <button wire:click="increment">+</button>

    <button wire:click="decrement">-</button>

{{--    test tailwindcss--}}
    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>

{{--    test alpine--}}
    <div x-data="{ count: 0 }">
        <button x-on:click="count++">Increment</button>

        <span x-text="count"></span>
    </div>
</div>
