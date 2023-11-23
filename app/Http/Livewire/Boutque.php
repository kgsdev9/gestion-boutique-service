<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Articles;

class Boutque extends Component
{

    public function add($id) {
        $article = Articles::findOrFail($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $article->nom,
                "quantity" => 1,
                "price" => $article->prix,
                "image" => $article->image,
                "articleId"  =>$article->id,
            ];
        }
        session()->put('cart', $cart);
        $this->dispatchBrowserEvent('alert',[
            'type'=>'success',
            'message'=>"Article Ajouté à votre commande"
        ]);

    }

    public function delete($id) {
        
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
    }




    public function render()
    {
        return view('livewire.boutque', [
            'allArticles' => Articles::orderByDesc('created_at')->get()
        ]);
    }
}
