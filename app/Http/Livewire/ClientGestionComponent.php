<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client; 
use Livewire\WithPagination;

class ClientGestionComponent extends Component
{


    public $search ;  
    use WithPagination;
     protected $paginationTheme = 'bootstrap';


    public function render()
    {
        return view('livewire.client-gestion-component', [

             'ressourceClient' =>Client::where('nom', 'like', '%'.$this->search.'%')->paginate(10),

        ])->extends('layout.app')->section('content');
    }
}
