<?php

namespace App\Services ;

use App\Repositories\RapportTransactionRepository;

class RapportTransactionService   {

    protected $rapportTransactionRepository;

    public function __construct(RapportTransactionRepository $rapportTransactionRepository)
    {
        $this->rapportTransactionRepository = $rapportTransactionRepository ;
    }


    public function getRapportTransactionWithMountly() {

        return $this->rapportTransactionRepository->getRapportTransactionWithMountly();
    }

}
