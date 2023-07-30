<div>
    <h1>{{ $count }}</h1>
    <button wire:click="increment">+</button>

    <livewire:counter.counter-child :$count />
</div>