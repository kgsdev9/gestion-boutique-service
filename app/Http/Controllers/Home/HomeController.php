<?php

namespace App\Http\Controllers\Home;
use App\Models\User;
use App\Models\Facture;
use App\Models\Articles;
use App\Models\Commande;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Services\StatistiqueTransactionService;


class HomeController extends Controller
{

    protected $statistiqueTransactionService ;


    public function  __construct(StatistiqueTransactionService $statistiqueTransactionService)
    {
        $this->middleware('auth');
        $this->statistiqueTransactionService = $statistiqueTransactionService;

    }


    public function index()
    {
      

        return view('welcome', [
            'countCommande' => Commande::orderBy('name')->count(),
            'countUser' => User::orderBy('name')->count(),
            'allLatestProduct' => Articles::where('user_id', '=', Auth::user()->id)->orderByDesc('created_at')->take(13)->get(),
            'allTransactionSommeWithMounth'=> $this->statistiqueTransactionService->paymentCurrentMonth()
        ]);
    }





    public function orderDetail($id) {
        $order = Facture::find($id);
            return view('orders.detail', compact('order'));
    }

}
