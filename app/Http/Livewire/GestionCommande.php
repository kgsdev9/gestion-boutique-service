<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Commande ;
use Livewire\WithPagination;

class GestionCommande extends Component
{

    public $search ;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {

        return view('livewire.gestion-commande', [
            'ressourceCommande' =>  Commande::where('numero', 'like', '%'.$this->search.'%')->OrderByDesc('created_at')->paginate(10)
        ])->extends('layout.app')->section('content');
    }
}
