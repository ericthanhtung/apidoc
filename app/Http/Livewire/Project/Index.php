<?php

namespace App\Http\Livewire\Project;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public $project;
    public $slug;

    public function mount()
    {
        $this->project = Auth::user()->projects()->where('slug', $this->slug)->first();
    }

    public function render()
    {
        return view('livewire.project.index');
    }
}
