<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactureController extends Controller
{
    public function  factureDetail () {
        return view('boutique.commande.detail');
    }

}
