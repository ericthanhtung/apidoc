<?php

namespace App\Http\Livewire\Project;

use App\Enums\ProjectStatus;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;

class Create extends Component
{
    public string $name;
    public string $slug;
    public string $url;
    public string $title;
    public string $description;
    public int $status;


    protected $rules = [
        'name' => 'required|string|max:255',
        'slug' => 'required|string|max:255',
        'url' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'status' => 'required|integer|max:4',
    ];

    public function updated()
    {
        $this->slug = Str::slug($this->name);
    }

    public function createProject()
    {
        $validatedData = $this->validate();
        Auth::user()->projects()->create($validatedData);
    }

    public function render()
    {
        $this->status = ProjectStatus::PUBLIC->value;
        return view('livewire.project.create');
    }
}
