<?php

namespace App\Http\Livewire;

use App\Models\BonDeCommande as ModelsBonDeCommande;
use Livewire\Component;
use App\Models\TCommandeArticle;

class BonDeCommande extends Component
{

    public $codeCommande ;
    public $designation;
    public $prix ;
    public $quantite;
    public $nom_client;
    public $total;
    public $inputs = [];
    public $i = 1;
    public $prenom_client;
    public $email_client;
    public $search ;
    public $allCommande = [];



    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }


    public function remove($i)
    {
        unset($this->inputs[$i]);
    }


    public function mount() {
        $this->codeCommande = "DIGITAL". rand(1000, 2000);
    }

    public function store()
    {

    $validatedDate = $this->validate([
        'nom_client'=>'required',
        'prenom_client'=>'required',
        'email_client'=>'required',
        'codeCommande'=>'required',
        'prix'=>'required',
        'quantite'=>'required',
        'designation.0' => 'required',
        'prix.0' => 'required',
        'quantite.0' => 'required',
        'designation.*' => 'required',
        'prix.*' => 'required',
        'quantite.*' => 'required',
    ],
    [
        'designation.0.required' => 'ce champ est réquis',
        'prix.0.required' => 'ce champs est réquis',
        'quantite.0.required' => 'ce champs est réquis',
    ]
);
         $bonDeCommande =ModelsBonDeCommande::create([
        'codeCommande' => $this->codeCommande ?? "DIGITAL-".time(),
        'nom_client' => $this->nom_client,
        'prenom_client' => $this->prenom_client,
        'email_client' => $this->email_client,
        ]);

        foreach ($this->designation as $key => $value) {
            TCommandeArticle::create(['designation' => $this->designation[$key], 'prix' => $this->prix[$key] , 'quantite' => $this->quantite[$key], 'total' => (int)$this->prix[$key] * (int)$this->quantite[$key], 'bon_de_commande_id'=> $bonDeCommande->id]);
        }

        $this->inputs = [];
        $this->reset();
        session()->flash('message', 'Commande créé avec succes.');
    }



    public function delete($id)
    {
        if($id){
           BonDeCommande::where('id',$id)->delete();
            session()->flash('error', 'Commande supprimée avec success.');
        }
    }

    public function render()
    {
        return view('livewire.bon-de-commande', [
            'allCommandes'=> ModelsBonDeCommande::all()
        ]);
    }
}
