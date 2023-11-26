<?php

namespace App\Http\Controllers\Home;
use App\Models\User;
use App\Models\Facture;
use App\Models\Articles;
use App\Models\Commande;
use App\Http\Controllers\Controller;
use App\Services\StatisitiqueArticleService;
use Illuminate\Support\Facades\Auth;
use App\Services\StatistiqueTransactionService;


class HomeController extends Controller
{

    protected $statistiqueTransactionService ;
    protected $statistiqueArticleService;


    public function  __construct(StatistiqueTransactionService $statistiqueTransactionService, StatisitiqueArticleService $statistiqueArticleService)
    {
        $this->middleware('auth');
        $this->statistiqueTransactionService = $statistiqueTransactionService;
        $this->statistiqueArticleService = $statistiqueArticleService;

    }


    public function index()
    {

        return view('welcome', [
            'allLatestProduct' => Articles::where('user_id', '=', Auth::user()->id)->orderByDesc('created_at')->take(13)->get(),
            'allTransactionSommeWithMounth'=> $this->statistiqueTransactionService->paymentCurrentMonth(),
            'allOrdersStore'=> $this->statistiqueArticleService->getSumArticleOrdering()
        ]);
    }


}
