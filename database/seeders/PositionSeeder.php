<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nx510_bl_positions')->insert([
            "name" =>  "Atacante",
            "sports_id" =>  "1",
            
        ]);


        DB::table('nx510_bl_positions')->insert([
            "name" =>  "Volante",
            "sports_id" =>  "1",
        ]);

        DB::table('nx510_bl_positions')->insert([
            "name" =>  "Zagueiro",
            "sports_id" =>  "1",
        ]);

        DB::table('nx510_bl_positions')->insert([
            "name" =>  "Goleiro",
            "sports_id" =>  "1",
        ]);

        DB::table('nx510_bl_positions')->insert([
            "name" =>  "Meio-Campo",
            "sports_id" =>  "1",
        ]);
    }
}
