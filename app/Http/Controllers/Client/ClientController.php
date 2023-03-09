<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client ; 
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  view('clients.liste', [
        'ressourceClient' => Client::orderByDesc('created_at')->paginate(10),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.form', [
        'action' => route('client.add'),
        'methode'  => 'post'

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->input();  

        Validator::make($data, [
        'nom' =>'required',
        'prenom' =>'required',
        'adresse' =>'required',
        'email' =>'required|unique:clients|max:255|email'
        ])->validate();


        $client = Client::create([

        'nom' => $data['nom'],
        'prenom' => $data['prenom'],
        'adresse'   => $data['adresse'],
        'email'   => $data['email'],
        ]);

     

        return redirect()->route('gestion.client');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $ressource = Client::find($id);
        return view('clients.detail', [

        'ressource' =>$ressource 

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $ressourceClient = Client::findOrFail($id);
        return view('clients.edit', [
        'ressource' => $ressourceClient,
        'action'  => route('client.update', $ressourceClient->id),
        'method'  => 'post'
        ]);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $data = $request->input();
    
        $ressource = Client::findOrFail($id); 
        $ressource->nom = $data['nom'];
        $ressource->prenom = $data['prenom'];
        $ressource->adresse  = $data['adresse'];
        $ressource->email = $data['email'];
        $ressource->update();
        return redirect()->route('gestion.client');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ressource = Client::findOrFail($id);
        $ressource->delete();
        return redirect()->back();
    }
}
