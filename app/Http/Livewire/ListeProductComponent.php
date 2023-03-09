<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Produit; 
use Livewire\WithPagination;
class ListeProductComponent extends Component
{

     public $search ;  
    use WithPagination;
     protected $paginationTheme = 'bootstrap';



    public function render()
    {
        return view('livewire.liste-product-component', [
             'ressource' => Produit::where('designation', 'like', '%'.$this->search.'%')->paginate(10),
        ])->extends('layout.app')->section('content');
           
    }
}
