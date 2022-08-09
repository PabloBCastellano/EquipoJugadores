<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class Jugadores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   for($i=0;$i<50;$i++){
            DB::table('Jugadores')->insert([

                "Name_Player"=>Str::random(10),
                "TShirt_Number"=>random_int(0,50),

            ]);
        }
    }

}
