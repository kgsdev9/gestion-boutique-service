<?php

namespace App\Services ;

use App\Repositories\StatisitiqueArticleRepository;

class StatisitiqueArticleService  {

    protected $articleRepository ;

    public function __construct(StatisitiqueArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function getSumArticleOrdering() {

        return $this->articleRepository->getSumArticleOrdering();
    }
}


