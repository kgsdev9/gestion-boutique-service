<?php
namespace App\Repositories ;

use App\Models\Articles;
use Illuminate\Support\Facades\DB;

class StatisitiqueArticleRepository  {

    protected $article ;

    public function __construct(Articles $article)
    {
        $this->article = $article;
    }

    public function getSumArticleOrdering() {

        return  DB::table('article_facture')
        ->whereMonth('created_at', now()->month)
        ->whereYear('created_at', now()->year)
        ->sum('total');
    }










}
