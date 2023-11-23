<?php

namespace App\Http\Livewire;

use App\Models\Facture;
use Livewire\Component;
use App\Models\Articles;

class Order extends Component
{

    public $mode  = false ;
    public $nom_client;
    public $adresse_client;
    public $telephone_client;
    public $email_client;
    public $article_id = [] ;
    public $detail = [] ;
    public $quantity= [];

    protected $rules = [
        'nom_client'=> 'required',
        'adresse_client' => 'required',
        'telephone_client' => 'required',
        'email_client' => 'required'
    ];


    public function create() {
        dd(Articles::find($this->article_id));
        $ressource =  Facture::create([
            'nom_client'=> $this->nom_client,
            'adresse_client'=> $this->adresse_client,
            'telephone_client'=> $this->telephone_client,
            'email_client'=> $this->email_client
        ]);
        $ressource->articles()->sync($this->article_id);

        $this->mode = true;
        $this->reset();
    }

    public function affichageCommande(Facture $facture){

      $this->detail =$facture->articles()->get();

        $this->dispatchBrowserEvent('showModal',[]);

    }


    public function displayForm() {
        $this->mode = true;
    }
    public function render()
    {
        return view('livewire.order', [
            'allArticles' => Articles::all(),
            'allFactures' => Facture::orderByDesc('created_at')->get(),
            'detailOrder' => $this->detail
        ]);
    }
}
