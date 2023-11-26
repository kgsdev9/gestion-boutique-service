<?php

namespace App\Http\Controllers;

class BonCommandeController extends Controller
{
    public function __invoke()
    {
        return view('BonDeCommande.index');
    }

}
