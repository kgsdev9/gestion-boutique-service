<?php

namespace App\Http\Livewire;

use App\Models\Marque;
use App\Services\CatagoryService;
use Livewire\Component;
use Livewire\WithFileUploads;

class Category extends Component
{
    use WithFileUploads;
    use CatagoryService;




    public function render()
    {
        return view('livewire.category', [
            'all' => $this->all()
        ]);
    }
}
