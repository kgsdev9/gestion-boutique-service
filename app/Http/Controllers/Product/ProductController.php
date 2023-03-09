<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produit; 
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('produits.liste', [
        'ressource' => Produit::orderByDesc('created_at')->paginate(10)

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produits.create', [

        'action' => route('product.add'),
        'methode' => 'post',
        'colllectionCategorie' => Category::orderBy('nom')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data  = $request->input(); 



        Validator::make($data, [
        'designation'=> 'required',
        'prix' => 'numeric',
        'categorie' => 'required'
        ])->validate();

        Produit::create([

        'designation' => $data['designation'],
        'prix' => $data['prix'],
        'category_id' => $data['categorie']

        ]);


        return redirect()->route('product.gestion');
    }

    /**
     * Display the specified resource.
     */
    public function show(int  $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $ressource = Produit::findOrFail($id);
        return view('produits.edit', [
            'ressource' => $ressource,
            'colllectionCategorie' => Category::orderBy('nom')->get(),
            'action' => route('product.update', $ressource->id),
            'method' => 'post'
        ]);
    }   

    /**
     * Update the specified resource in storage.
     */
  
      public function update(Request $request, int $id)
    {   
        $ressource  = Produit::findOrFail($id);
        $data = $request->input();


        $ressource = Produit::findOrFail($id); 
        $ressource->designation = $data['designation'];
        $ressource->prix = $data['prix'];
        $ressource->category_id  = $data['categorie'];
        $ressource->update();
        return redirect()->route('product.gestion');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int  $id)
    {
        $ressource= Produit::findOrFail($id);
        $ressource->delete();
        return redirect()->back();
    }
}
