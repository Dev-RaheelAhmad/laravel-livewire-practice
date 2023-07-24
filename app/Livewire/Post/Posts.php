<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{

    public Post $posts;

    function mount()
    {
        $this->posts = Post::get();
    }

    public function render()
    {
        return view('livewire.post.posts');
    }
}
