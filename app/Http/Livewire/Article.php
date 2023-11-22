<?php

namespace App\Http\Livewire;

use App\Services\ArticleService;
use Livewire\Component;
use Livewire\WithFileUploads;

class Article extends Component
{

    use ArticleService;
    use WithFileUploads;


    public function render()
    {
        return view('livewire.article', [
            'all' => $this->all(),
            'allCategorie'=> $this->allCategorie()
        ]);
    }
}
