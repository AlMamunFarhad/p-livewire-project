<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;

class PostItem extends Component
{
    public Post $post;

    public bool $edit = false;

    public function destroy(int $id)
    {
        $post = Post::find($id);
        $this->authorize("delete", $post);
        $post->delete();
        $this->dispatch('deleting');
    }
    #[On('updating')]
    public function updating(bool $updating)
    {
        $this->edit = $updating;
    }
    public function render()
    {
        return view('livewire.post-item');
    }
}
