<div>
    <h3>Posts</h3>
    <div>
        <ul>
            @forelse ($posts as $post)
                <li wire:key="{{$post->id}}">{{$post->title}}</li>
            @empty
                <p>No Record Found!</p>
            @endforelse
        </ul>
    </div>
</div>
