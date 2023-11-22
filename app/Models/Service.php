<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable =  [
        'nom_service',
        'slug',
        'image',
        'balance_total',
        'balance_restante',
        'user_id'
    ];

    public function entreprise() {
        return $this->belongsTo(User::class ,'user_id');
    }
}
