<?php

namespace App\Livewire\Post;

use Livewire\Attributes\Title;
use Livewire\Component;

class UpdatePost extends Component
{
    #[Title('Update Post')]
    public function render()
    {
        return view('livewire.post.update-post');
        // ->title('Update Post') // this is for dynamic title
    }
}
