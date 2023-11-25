<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            ['nom'=> 'Orange Money',
             'image' => "orange"
            ],

            ['nom'=> 'MTN Money',
            'image' =>"mtn"
           ],

           ['nom'=> 'Moov Money',
           'image' =>"moov"
           ],

           ['nom'=> 'Canal +',
           'image' => "canal+"
           ],

        ]);
    }
}
