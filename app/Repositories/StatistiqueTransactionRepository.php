<?php
namespace App\Repositories ;


use App\Models\Transaction;

class StatistiqueTransactionRepository   {

    protected $transaction ;

    public function __construct(Transaction $transaction)
    {
        $this->transaction = $transaction ;
    }

    public function paymentCurrentMonth() {

        return $this->transaction
                    ->whereMonth('created_at', now()->month)
                    ->whereYear('created_at', now()->year)
                    ->sum('montant_entrant');
    }






}
