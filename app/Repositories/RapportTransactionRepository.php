<?php
namespace App\Repositories ;


use App\Models\Transaction;

class RapportTransactionRepository   {

    protected $transaction ;

    public function __construct(Transaction $transaction)
    {
        $this->transaction = $transaction ;
    }

    public function getRapportTransactionWithMountly() {

        return $this->transaction
                    ->whereMonth('created_at', now()->month)
                    ->whereYear('created_at', now()->year)
                    ->get();
    }

    public function get() {
        $r = DB::table('article_facture')
        ->whereMonth('created_at', now()->month)
        ->whereYear('created_at', now()->year)
        ->sum('total');
        dd($r);
    }


    public function encours() {
        $users = DB::table('articles')
        ->join('article_facture', 'articles.id', '=', 'article_facture.id')
        ->join('factures', 'articles.id', '=', 'article_facture.id')
        ->get();
        dd($users);
    }





}
