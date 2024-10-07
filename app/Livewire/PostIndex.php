<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Livewire\Forms\PostForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class PostIndex extends Component
{
    use WithPagination;

    public PostForm  $form;
    // public $title = "";
    // public $description = "";

    public function create(Request $request)
    {
        $this->form->store();

        // $this->validate([
        //     "title" => "required",
        //     "description" => "required"
        // ]);

        // Auth::user()->posts()->create([
        //     "title" => $this->title,
        //     "body" => $this->description
        // ]);

        // $this->title = '';
        // $this->description = '';
    }

    // #[On('deleting')]
    // public function refresh()
    // {

    // }


    public function render()
    {
        $posts = Auth::user()->posts()->latest()->paginate(5);
        return view('livewire.post-index', compact('posts'));
    }
}
