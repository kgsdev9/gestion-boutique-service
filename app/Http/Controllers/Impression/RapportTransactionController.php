<?php

namespace App\Http\Controllers\Impression;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use App\Services\RapportTransactionService;

class RapportTransactionController extends Controller
{
    protected $rapportTransactionService ;

    public function __construct(RapportTransactionService $rapportTransactionService)
    {
      $this->rapportTransactionService = $rapportTransactionService;
    }


    public function  invoiceAllTransactionMounthAllService() {

        $pdf = Pdf::loadView('impression.rapports.transactions.mois.liste',  [
            'invoiceTransactionMountly'=> $this->rapportTransactionService->getRapportTransactionWithMountly()
        ])->setOptions(['defaultFont' => 'sans-serif']);
           return $pdf->download('Bilandumoisdesservices.pdf');
    }


}
