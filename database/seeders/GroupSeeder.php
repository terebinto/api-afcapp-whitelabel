<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nx510_bl_groups')->insert([
            "group_name" =>  "Grupo A",
            "s_id" =>  "2"

        ]);

        DB::table('nx510_bl_groups')->insert([
            "group_name" =>  "Grupo B",
            "s_id" =>  "2"

        ]);
    }
}
