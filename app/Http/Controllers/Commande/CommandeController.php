<?php

namespace App\Http\Controllers\Commande;

use App\Models\Commande ;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class CommandeController extends Controller
{

    public $numeroCommande ;

    public function __construct()
    {
        $this->numeroCommande  =  Rand(100, 400).'FAE';
        $this->middleware('auth');
    }





    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('commandes.create', [
            'random' => $this->numeroCommande,
            'action'   => route('commande.poste'),
            'methode' => 'post'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     $data =  $this->validatorarray($request->all())->validate();

        $data =  $request->input();
       Commande::create([
        'numero' => $data['numero'],
        'date' => $data['date'],
        'quantite' => $data['quantite'],
        'prix' => $data['prix'],
        'entreprise' => $data['entreprise'],
        'emplacement' => $data['emplacement'],
        'reference' => $data['reference'],
        'telephone_one' => $data['telephone_one'],
        'telephone_two' => $data['telephone_two'],
        'total' => $data['prix']* $data['quantite'],
        'email' =>$data['email']
       ]);

Alert::success('Success', 'Votre Commande a été enregistrée avec success');
return redirect()->route('gestion.commande', ['sucess'=> true]);

    }


    public  function validatorarray(array $data) {
      $data =   Validator::make($data, [
            'numero' => 'required',
            'entreprise' => 'required|string|max:255',
            'date'  => 'required|date',
            'delai'  => 'required|date',
            'prix' =>  '|required|integer',
            'quantite' => 'required|integer',
            'reference' =>'required|string|max:255',
            'emplacement' =>'required|string|max:255',
            'email' =>'required|email',
            'telephone_one' => 'required|numeric',
            'telephone_two' => 'required|numeric'

        ]);
        return $data ;

    }

    /**
     * Display the specified resource.
     */
    public function show(int  $id)
    {
        
        $orders = Commande::find($id);
        return view('commandes.detail', compact('orders'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ressource = Commande::find($id);

        return view('commandes.edit', [
            'ressource' => $ressource,
            'action' => route('commande.update', $ressource->id),
            'methode'=>'post'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ressource =  Commande::find($id);
        $ressource->entreprise  = $request->input('entreprise');
        $ressource->date  = $request->input('date');
        $ressource->prix  = $request->input('prix');
        $ressource->quantite  = $request->input('quantite');
        $ressource->total  = $request->input('prix') * $request->input('quantite') ;
        $ressource->reference  = $request->input('reference');
        $ressource->emplacement  = $request->input('emplacement');
        $ressource->email  = $request->input('email');
        $ressource->delai  = $request->input('delai');
        $ressource->telephone_one  = $request->input('telephone_one');
        $ressource->telephone_two  = $request->input('telephone_two');
        Alert::success('Success', 'Votre Commande a été mise à jour  avec success');
        $ressource->update();
        return redirect()->route('gestion.commande');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ressource=  Commande::find($id);
        $ressource->delete();
        Alert::warning('Supression', 'Votre Commande a été Supprimé Dommage');
        return redirect()->back();
    }
}
