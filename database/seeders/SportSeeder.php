<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nx510_sports')->insert([
            "name" =>  "Futebol de Campo",
        ]);

        DB::table('nx510_sports')->insert([
            "name" =>  "Futebol Suiço"
        ]);

        DB::table('nx510_sports')->insert([
            "name" =>  "Futsal"
        ]);

    }
}
