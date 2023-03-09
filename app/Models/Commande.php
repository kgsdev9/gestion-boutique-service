<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'user_id']; 

    public function client() {
        return $this->belongsTo(Client::class, 'user_id');
    }

     public function client() {
        return $this->belongsTo(Client::class);
     }


         public function produits() {
        return $this->belongsToMany(Product::class,'commandes_produits','commande_id','produit_id')
        ->withPivot('quantity','amount')
        ->withTimestamps();
     }


 
}
