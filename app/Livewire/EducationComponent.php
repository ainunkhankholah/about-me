<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Education;

class EducationComponent extends Component
{
    public function render()
    {
        $educations = Education::orderBy('start_year', 'desc')->get();
        return view('livewire.education-component', compact('educations'));
    }
}
