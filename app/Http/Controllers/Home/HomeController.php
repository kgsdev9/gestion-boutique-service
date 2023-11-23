<?php

namespace App\Http\Controllers\Home;

use App\Models\User;
use App\Models\Articles;
use App\Models\Commande;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{


    public function  __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {


        return view('welcome', [
            'countCommande' => Commande::orderBy('name')->count(),
            'countUser' => User::orderBy('name')->count(),
            'allLatestProduct' => Articles::where('user_id', '=', Auth::user()->id)->orderByDesc('created_at')->take(13)->get()
        ]);
    }

}
