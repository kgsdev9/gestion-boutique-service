<?php

namespace App\Http\Controllers\Rapport;

use App\Models\Commande;
use App\Mail\SendPDFMail;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class RapportController extends Controller
{
    public function  index() {
        return view('rapport.commande.index');
    }

    public function generate() {
        $data = Commande::all();

        $pdf = Pdf::loadView('impression.rapportCommande', [
            'data'  => $data
        ]);
        $to_email = [
            'kgsdev8@gmail.com',
            'kahouoguystephane@gmail.com'
        ]  ;
        Mail::to($to_email)->send(new SendPDFMail($pdf));
        Alert::success('Success', 'Rapport Génerer avec suces consulter votre E-Mail');
      return redirect()->back();
      }

}
