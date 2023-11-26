<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BonDeCommande extends Model
{
    use HasFactory;

    protected $fillable = [
        'codeCommande',
        'nom_client',
        'prenom_client',
        'email_client',
    ];
}
