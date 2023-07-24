<div>
    <h1>{{$title}}</h1>

    <form wire:submit="save">
        <label for="title">Title: </label>
        <input type="text" class="text-black" id="title" wire:model.live="title">
        <button type="submit">Save</button>
    </form>
</div>


