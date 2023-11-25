<?php

namespace App\Http\Controllers\Home;

use view;
use App\Models\User;
use App\Models\Facture;
use App\Models\Articles;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Article;

class HomeController extends Controller
{


    public function  __construct()
    {
        $this->middleware('auth');

    }


  

    public function index()
    {

        $results = DB::select('SELECT *
        FROM factures
        LEFT JOIN  articles
        ON prix > 100
        WHERE factures.id = articles.id
        ');


        $article = Articles::all();
        $sommeQuantiteMount  = DB::table('article_facture')
        ->whereMonth('created_at', now()->month)
        ->whereYear('created_at', now()->year)
        ->get();


        return view('welcome', [
            'countCommande' => Commande::orderBy('name')->count(),
            'countUser' => User::orderBy('name')->count(),
            'allLatestProduct' => Articles::where('user_id', '=', Auth::user()->id)->orderByDesc('created_at')->take(13)->get()
        ]);
    }





    public function orderDetail($id) {
        $order = Facture::find($id);
            return view('orders.detail', compact('order'));
    }

}
