<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{
    public $title = '';

    public function save()
    {
        $this->post = Post::create([
            'title' => $this->title
        ]);

        return redirect()->to('/posts')->with(['success' => 'Post Created!']);
        // $this->dispatch('post-created');
    }

    public function render()
    {
        return view('livewire.post.create-post');
    }
}
