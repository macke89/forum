<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Thread;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ThreadCreateFormValidate extends Component
{
    public $title;
    public $body;
    public $category;
    protected $rules = [
        'title' => 'required|min:5|unique:threads',
        'category' => 'in:1,2,3,4,5,6',
        'body' => 'required|max:3000|min:10',
    ];

//    public function mount()
//    {
//        $this->title = auth()->user()->name;
//        $this->body = auth()->user()->email;
//    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.thread-create-form-validate', compact('categories'));
    }

    public function createthread()
    {
        $this->validate();

        $thread = Thread::create([
            'title' => $this->title,
            'user_id' => Auth::user()->id,
            'category_id' => $this->category,
            'body' => $this->body
        ]);

        return redirect()->route('thread.show', compact('thread'));
    }

    public function validateform()
    {
        $this->validate();
    }

    public function validatetitle()
    {
        $this->validate([
            'title' => 'required|min:5|unique:threads',
        ]);
    }

    public function validatecontent()
    {
        $this->validate([
            'body' => 'required|max:3000|min:10',
        ]);
    }

    public function validatecategory()
    {
        $this->validate([
            'category' => 'sometimes',
        ]);
    }
}
