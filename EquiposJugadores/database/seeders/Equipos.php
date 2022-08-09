<?php

namespace Database\Seeders;


use Database\Factories\JugadoresFactory;
use Hamcrest\Core\Set;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Number;

class Equipos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        for($i=1;$i<=51-1;$i++){

                DB::table('Equipos')->insert([

                "Name_Team"=>Str::random(10),


            ]);
        }
    }
}
