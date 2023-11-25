<?php
namespace App\Traits;

use Illuminate\Support\Facades\DB;


trait  QueryDatabase    {

    public function sommeOrderThisMountly() {
        return  DB::table('article_facture')
        ->whereMonth('created_at', now()->month)
        ->whereYear('created_at', now()->year)
        ->get();

    }


    public function fullJOinSql() {
        DB::table('SELECT * FROM A  users
        FULL JOIN');

    }


    public function asSql() {
        DB::table('select `authors`.*,
        `author_books_catalogue`.`books_catalogue_id` as `pivot_books_catalogue_id`,
        `author_books_catalogue`.`author_id` as `pivot_author_id` from `authors`
        inner join `author_books_catalogue` on `authors`.`id` = `author_books_catalogue`.`author_id`
         where  `author_books_catalogue`.`books_catalogue_id` is null and `authors`.`idd` = 956
    ');



    }


}
