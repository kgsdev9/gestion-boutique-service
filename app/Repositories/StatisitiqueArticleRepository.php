<?php
namespace App\Repositories ;

use App\Models\Articles;

class StatisitiqueProductRepository  {

    protected $article ;

    public function __construct(Articles $article)
    {
        $this->article = $article;
    }

    public function getSumArticleOrdering() {
        

    }










}
