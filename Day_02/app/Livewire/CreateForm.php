<?php

namespace App\Livewire;

use Livewire\Component;
use App\models\BookStore;

class CreateForm extends Component
{
    public function render()
    {
        return view('livewire.create-form');
    }
    public $isbn;
    public $name;
    public $author;
    public $description;
 
    protected $rules = [
        'isbn' => 'required|min:6',
        'name' => 'required|min:10',
        'author' => 'required|min:5',
        'description' => 'required|min:10'
    ];
 
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
 
    public function saveCreateForm()
    {
        $validatedData = $this->validate();
 
        BookStore::create($validatedData);
        return redirect()->route('bookstore.index')->with('success', 'Post Deleted!');
    }
}
