<?php

namespace App\Http\Controllers;

use Faker\Factory;
use App\Models\User;
use App\Models\Commande;
use Illuminate\Http\Request;
use simitsdk\phpjasperxml\PHPJasperXML;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show($id)
    {
      
 $ressource= Commande::find($id); 

 $filename = base_path(). ' /vendor/simitgroup/phpjasperxml/examples/Facture_1.jrxml'; 

$data=[
     ['numero'=>$ressource->numero, 'date' =>$ressource->date, 'entreprise'=>$ressource->entreprise ,'emplacement'=>$ressource->emplacement, 
     'reference'=>$ressource->reference, 'telephone_one'=>$ressource->telephone_one, 'prix'=>$ressource->prix, 'telephone_two'=>$ressource->telephone_two,
    'quantite'=>$ressource->quantite, 'total'=>$ressource->total, 'email'=>$ressource->email], 
];

$config = ['driver'=>'array','data'=>$data];

$report = new PHPJasperXML();
$report->load_xml_file($filename)    
->setDataSource($config)
->export('Pdf'); 


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }







    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
