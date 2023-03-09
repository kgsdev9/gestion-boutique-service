<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User; 
use Livewire\WithPagination;

class GestionUserComponent extends Component
{


    public $search ;  
    use WithPagination;
     protected $paginationTheme = 'bootstrap';


    public function render()
    {
        return view('livewire.gestion-user-component', [

         'users' => User::where('name', 'like', '%'.$this->search.'%')->paginate(10),

        ])->extends('layout.app')->section('content');
    }  
}
         