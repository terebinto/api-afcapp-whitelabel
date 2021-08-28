<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nx510_bl_teams')->insert([
            "t_name" =>  "time  1"
        ]);

        DB::table('nx510_bl_teams')->insert([
            "t_name" =>  "time  2"
        ]);

        DB::table('nx510_bl_teams')->insert([
            "t_name" =>  "time  3"
        ]);

        DB::table('nx510_bl_teams')->insert([
            "t_name" =>  "time  4"
        ]);
    }
}
