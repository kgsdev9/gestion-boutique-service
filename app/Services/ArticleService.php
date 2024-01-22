<?php

namespace App\Services;

use App\Models\Marque;
use App\Models\Articles;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
trait ArticleService
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $dynamique_paginate =10 ;

    public $image;
    public $new_image;
    public $prix ;
    public $slug;
    public $description;
    public $marque_id;
    public $nom ;
    public $mode = false ;
    public $articleId;
    public $search= "";

    public function prepareBeforeValidation($value) {

        return Str::slug($value);
    }


    public function updatingSearch() {

        $this->resetPage();
    }

    public function allCategorie() {
        return Marque::orderBy('nom')->get();
    }

    protected function rules()
    {
        return [
            'nom' => 'required|min:6|max:255|unique:marques,nom,' . $this->articleId,
            'image' => 'required',
            'prix' => 'required|integer',
            'description' =>'required',
            'marque_id' => 'required',
            'new_image' => 'nullable'
        ];
    }

    public function displayform() {
        $this->mode = true;
    }

    public function all() {
       return  Articles::where('nom', 'like', '%'.$this->search.'%')->orderByDesc('created_at')->paginate($this->dynamique_paginate);
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
       $data=Articles::create([
            'nom' => $data['nom'],
            'prix' => $data['prix'],
            'marque_id' => $data['marque_id'],
            'slug' => $this->prepareBeforeValidation($this->nom),
            'image' => $image,
            'description' => $data['description'],
            'user_id' => Auth::user()->id,
        ]);

        $this->reset();
        $this->mode = false;

    }

    public function edit($id) {
        $ressourceMarque = Articles::find($id);
        $this->nom = $ressourceMarque->nom;
        $this->description  = $ressourceMarque->description;
        $this->image = $ressourceMarque->image;
        $this->articleId = $ressourceMarque->id;
        $this->prix = $ressourceMarque->prix;
        $this->marque_id = $ressourceMarque->marque_id;
        $this->mode = true;
    }


    public function update()
    {
        $this->validate();
         $article = Articles::findOrFail($this->articleId);

        if($this->new_image) {
            $photo = $article->image;
            Storage::delete($article->image);
            $photo = $this->new_image->store('public/artticles');
        } else {
            $photo = $article->image;
        }
            $article->update([
                'nom' => $this->nom,
                'prix' => $this->prix,
                'marque_id' => $this->marque_id,
                'slug' => $this->prepareBeforeValidation($this->nom),
                'image' => $photo,
                'description' => $this->marque_id
            ]);
            $this->articleId='';
            $this->mode  = false ;
            $this->reset('nom', 'image', 'articleId', 'nom', 'prix', 'description', 'marque_id');
    }





    public function destroy($id) {
        {
            try{
                Articles::find($id)->delete();
                session()->flash('success',"Marque supprimé avec succès !!!");
            }catch(\Exception $e){
                session()->flash('error',"Quelque chose ne va pas!!");
            }
        }
    }





}
