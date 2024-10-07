<?php

namespace App\Livewire\Forms;

use App\Models\Post;
use Livewire\Attributes\Validate;
use Livewire\Form;


class PostForm extends Form
{
    public Post $post;


    #[Validate('required|min:5')]
    public string $title = '';

    #[Validate('required')]
    public string $body = '';

    public function setThePost(Post $post)
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->body = $post->body;
    }

    public function update()
    {
        $this->validate();
        $this->post->update($this->all());
    }


    public function store()
    {
        $this->validate();
        auth()->user()->posts()->create($this->all());
        $this->reset();
        // dd($this->all());
        // auth()->user()->posts()->create([
        //     "title" => $this->title,
        //     "body" => $this->body,
        // ]);
    }
}
