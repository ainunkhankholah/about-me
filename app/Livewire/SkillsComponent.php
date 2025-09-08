<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Skill;

class SkillsComponent extends Component
{
    public function render()
    {
        $skills = Skill::all();
        return view('livewire.skills-component', compact('skills'));
    }
}
