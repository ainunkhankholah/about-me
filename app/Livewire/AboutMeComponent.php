<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\AboutMe;

class AboutMeComponent extends Component
{
    public function render()
    {

        $about = AboutMe::first(); // data dari DB
        return view('livewire.about-me-component', compact('about'));
    }
}
