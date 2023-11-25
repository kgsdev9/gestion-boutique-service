<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

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

    public function allTransactionWithSingleService($id) {
        return Transaction::whereYear('created_at', '=', date('Y'))
                            ->orderByDesc('created_at')
                            ->where('service_id', '=', $id)->count();
    }


}
