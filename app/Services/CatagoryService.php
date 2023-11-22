<?php

namespace App\Services;


use App\Models\Marque;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


trait CatagoryService
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $dynamique_paginate =10 ;

    public $image;
    public $slug;
    public $total_produit;
    public $nom ;
    public $mode = false ;
    public $marqueId;
    public $search= "";

    public function prepareBeforeValidation($value) {

        return Str::slug($value);
    }


    protected function rules()
    {
        return [
            'nom' => 'required|min:6|max:255|unique:marques,nom,' . $this->marqueId,
            'image' => 'required|image',
            'total_produit' => 'required|integer',
        ];
    }

    public function displayform() {
        $this->mode = true;
    }

    public function all() {
       return  Marque::where('nom', 'like', '%'.$this->search.'%')->orderByDesc('created_at')->paginate($this->dynamique_paginate);
    }


    public function cancelCreate() {
        $this->mode = false ;
        $this->reset();
        $this->resetValidation();
    }

    public function create()

    {
       $data = $this->validate() ;
       $image=$this->image->store('public/marques');
       $data=Marque::create([
            'nom' => $data['nom'],
            'slug' => $this->prepareBeforeValidation($this->nom),
            'image' => $image,
            'total_produit' => $data['total_produit'],
            'total_restant_produit' => $data['total_produit'],
            'user_id' => Auth::user()->id,
        ]);

        $this->reset();
        $this->mode = false;

    }

    public function edit($id) {
        $ressourceMarque = Marque::find($id);
        $this->nom = $ressourceMarque->nom;
        $this->nom  = $ressourceMarque->nom;
        $this->image = $ressourceMarque->image;
        $this->marqueId = $ressourceMarque->id;
        $this->total_produit = $ressourceMarque->total_produit;
        $this->mode = true;
    }


    public function update()
    {
        $this->validate();

         $marque = Marque::findOrFail($this->marqueId);

        $photo = $marque->image;




            if($this->image)
            {

                Storage::delete($marque->image);
                $photo = $this->image->store('public/marques');
            }else{
                $photo = $marque->image;
            }

            $marque->update([
                'nom' => $this->nom,
                'image' => $photo,
                'total_produit' => $this->total_produit,
                'total_restant_produit' => $this->total_produit,
            ]);
            $this->marqueId='';

            $this->mode  = false ;
            $this->reset('nom', 'image', 'marqueId');

    }




    public function updates() {
        $this->validate();
        $image=$this->image->store('public/marques');
        Marque::whereId($this->marqueId)->update([
            'nom' => $this->nom,
            'image' => $image,
            'total_produit' => $this->total_produit,
            'total_restant_produit' => $this->total_produit,
        ]);
        $this->mode  = false ;
        $this->reset();
    }

    public function destroy($id) {
        {
            try{
                Marque::find($id)->delete();
                session()->flash('success',"Marque supprimé avec succès !!!");
            }catch(\Exception $e){
                session()->flash('error',"Quelque chose ne va pas!!");
            }
        }
    }

}
