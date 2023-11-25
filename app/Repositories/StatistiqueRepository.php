<?php
namespace App\Repositories ;

use App\Models\Marque;

class CategoryRepository    {


    protected $statistique  ;

    public function __construct(Marque $category)
    {
        $this->category = $category ;
    }

    public function all() {
        return $this->category->all();
    }



}
