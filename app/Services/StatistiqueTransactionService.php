<?php

namespace App\Services ;

use App\Repositories\StatistiqueTransactionRepository;

class StatistiqueTransactionService   {

    protected $statistiqueRepository ;

    public function __construct(StatistiqueTransactionRepository $statistiqueRepository)
    {
        $this->statistiqueRepository = $statistiqueRepository ;
    }

    public function paymentCurrentMonth() {

        return $this->statistiqueRepository->paymentCurrentMonth();
    }



}
