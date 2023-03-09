<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category; 
use Illuminate\Support\Facades\Validator; 

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    

    public function index()
    {
        return view('categories.liste', [
          'ressource' => Category::orderBy('nom')->paginate(10)

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('categories.form', [

            'action' =>route('categorie.add'),
            'methode'=>'post'

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $data = $request->input();  

        Validator::make($data, [
        'nom' =>'required|unique:categories'
        ])->validate();

        Category::create([
            'nom' => $data['nom']
        ]);

        return redirect()->route('categorie.gestion');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $collection = Category::find($id); 
        return view('categories.edit', [
        'ressource' => $collection,
        'action' =>route('categorie.update', $collection->id),
        'method' => 'post'

        ]); 

    }




    /**
     * Update the specified resource in storage.
     */


    public function update(Request $request, int $id)
    {
        $data = $request->input();
        
        $ressource = Category::findOrFail($id); 
        $ressource->nom = $data['nom'];
        $ressource->update();
        return redirect()->route('categorie.gestion');
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $ressource = Category::findOrFail($id);
        $ressource->delete();
        return redirect()->back();

    }
}
