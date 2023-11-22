<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marque extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'slug',
        'image',
        'total_produit',
        'total_restant_produit',
        'user_id'
    ];

    public function entreprise() {
        return $this->belongsTo(User::class ,'user_id');
    }


    public function  products() {
        return $this->hasMany(Product::class );
    }


}
