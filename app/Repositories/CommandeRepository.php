<?php
namespace App\Repository ;
use App\Models\Commande;


class CommandeRepository    {


    protected $commande  ;

    public function __construct(Commande $commande)
    {
        $this->commande = $commande ;
    }

    public function   commandeOrderByDesc() {
        return $this->commande->orderByDesc('created_at')->get();

    }

    public function  collectionId( $id) {
        return $this->commande->find($id);
    }





}
