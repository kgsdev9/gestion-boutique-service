<?php

namespace App\Http\Controllers\Impression;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Client; 

class ImpressionController extends Controller
{
    
    public function impression()  {
        $data = Client::orderByDesc('created_at')->get();
        $pdf = Pdf::loadView('impression.client',  [
            'data' =>$data

        ])->setOptions(['defaultFont' => 'sans-serif']);
           return $pdf->download('RapportClient.pdf');

    }
}
