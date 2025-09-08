<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Photo;

class PhotoGalleryComponent extends Component
{
    public function render()
    {
        $photos = Photo::latest()->get();
        return view('livewire.photo-gallery-component', compact('photos'));
    }
}
