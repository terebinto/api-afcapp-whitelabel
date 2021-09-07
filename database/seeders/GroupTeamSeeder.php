<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GroupTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nx510_bl_grteams')->insert([
            "g_id" =>  "1",
            "t_id" =>  "1"

        ]);

        DB::table('nx510_bl_grteams')->insert([
            "g_id" =>  "1",
            "t_id" =>  "2"

        ]);

        DB::table('nx510_bl_grteams')->insert([
            "g_id" =>  "2",
            "t_id" =>  "3"

        ]);

        DB::table('nx510_bl_grteams')->insert([
            "g_id" =>  "2",
            "t_id" =>  "4"

        ]);
    }
}
