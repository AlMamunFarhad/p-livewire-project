<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\Post;
use Livewire\Component;

class PostUpdate extends Component
{
    public PostForm $form;
    public Post $post;
    // public string $title = '';
    // public string $body  = '';

    public function mount(Post $post)
    {   
        $this->form->setThePost($post);
        // $this->title = $this->post->title;
        // $this->body  = $this->post->body;
    }

    public function submit()
    {

        $this->form->update();
        $this->dispatch('updating', false);
        // dd('hi');
        // $this->post->update([
        //     'title' => $this->title,
        //     'body' => $this->body
        // ]);
       
    }

    
    public function render()
    {
        return view('livewire.post-update');
    }
}
