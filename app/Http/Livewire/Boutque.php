<?php

namespace App\Http\Livewire;

use App\Models\Facture;
use Livewire\Component;
use App\Models\Articles;

class Boutque extends Component
{

    public $nom_client;
    public $adresse_client;
    public $telephone_client;
    public $email_client;
    public $total ;
    public $quantity ;

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

    public function confirmOrder() {

        $panier =session()->get('cart');

        foreach($panier as $ressource) {
           $this->total = $ressource['price'] * $ressource['quantity'];
        }

        foreach($panier as $ressource) {
            $this->quantity =  $this->quantity * $ressource['quantity'];
         }

        $ressource =  Facture::create([
            'nom_client'=> $this->nom_client,
            'adresse_client'=> $this->adresse_client,
            'telephone_client'=> $this->telephone_client,
            'email_client'=> $this->email_client
        ]);


        foreach($panier as $data){
            $ressource->articles()->attach( $data['articleId'],
               [
                'quantity'=>$data['quantity'],
                'total'=>$data['price']*$data['quantity']
               ]);
         };
         session()->forget('cart');
         $this->reset();

    }


    public function render()
    {
        return view('livewire.boutque', [
            'allArticles' => Articles::orderByDesc('created_at')->get()
        ]);
    }
}
