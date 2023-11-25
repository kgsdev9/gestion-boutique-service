<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable  = [
        'montant_entrant',
        'date_paiement',
        'service_id',
        'code_transaction',
        'user_id',
        'sub_service_id',
    ];

    public function service() {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function subService() {
        return $this->belongsTo(SousService::class, 'sub_service_id');
    }

    public function entreprise() {
        return $this->belongsTo(User::class ,'user_id');
    }
}
