<?php

namespace App\Http\Controllers\Home;

use App\Models\User;
use App\Models\Commande;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{


    public function  __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {

        // Validator::make($data, [
        //     'telephone_one' => 'required|integer|max:12'
        // ])

        return view('welcome', [
            'countCommande' => Commande::orderBy('name')->count(),
            'countUser' => User::orderBy('name')->count(),
        ]);
    }

}
