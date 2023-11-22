<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $fillable  = [
        'nom',
        'image',
        'prix',
        'description',
        'slug',
        'entreprise_id'
    ];

    public function entreprise() {
        return $this->belongsTo(User::class ,'user_id');
    }

    public function factures() {
        return $this->belongsToMany(Article::class, 'article_facture','article_id','facture_id');
    }
}
