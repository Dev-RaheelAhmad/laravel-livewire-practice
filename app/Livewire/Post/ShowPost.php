<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class ShowPost extends Component
{

    public Post $post;

    function mount($id)
    {
        $this->post = Post::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.post.show-post');
    }
}
