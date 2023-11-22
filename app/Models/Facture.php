<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;

    protected $fillable  = [
        'nom_client',
        'adresse_client',
        'telephone_client',
        'email_client',
        'user_id'
    ];

    public function articles() {
        return $this->belongsToMany(Articles::class, 'article_facture', 'facture_id', 'article_id');
    }
}
