<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory; 

    protected $fillable = ['designation', 'prix', 'category_id']; 


    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }


      public function commandes() {
        return $this->belongsToMany(Commande::class,'commandes_produits','produit_id','commande_id')
        ->withPivot('quantity','amount')
        ->withTimestamps();
     }

    
   
}
