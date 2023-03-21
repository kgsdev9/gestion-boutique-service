<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'date',
        'entreprise',
        'emplacement',
        'reference',
        'telephone_one',
        'telephone_two',
        'prix',
        'quantite',
        'total',
        'email',
        'logo',
        'delai'
    ];




}
