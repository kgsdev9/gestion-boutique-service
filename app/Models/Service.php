<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable =  [
        'nom',
        'image',
        'user_id'
    ];

    public function entreprise() {
        return $this->belongsTo(User::class ,'user_id');
    }


    Public function getSousService($id) {
        return   SousService::where('service_id', '=', $id)->get();

    }
}
