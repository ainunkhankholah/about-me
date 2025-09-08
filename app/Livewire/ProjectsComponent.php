<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Project;

class ProjectsComponent extends Component
{
    public function render()
    {
        $projects = Project::latest()->get();
        return view('livewire.projects-component', compact('projects'));
    }
}
