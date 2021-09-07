<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class TeamSeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nx510_bl_season_teams')->insert([
            "season_id" =>  "1",
            "team_id" =>  "1"

        ]);

        DB::table('nx510_bl_season_teams')->insert([
            "season_id" =>  "1",
            "team_id" =>  "2"

        ]);

        DB::table('nx510_bl_season_teams')->insert([
            "season_id" =>  "1",
            "team_id" =>  "3"

        ]);

        DB::table('nx510_bl_season_teams')->insert([
            "season_id" =>  "1",
            "team_id" =>  "4"

        ]);

        DB::table('nx510_bl_season_teams')->insert([
            "season_id" =>  "2",
            "team_id" =>  "1"

        ]);

        DB::table('nx510_bl_season_teams')->insert([
            "season_id" =>  "2",
            "team_id" =>  "2"

        ]);

        DB::table('nx510_bl_season_teams')->insert([
            "season_id" =>  "2",
            "team_id" =>  "3"

        ]);

        DB::table('nx510_bl_season_teams')->insert([
            "season_id" =>  "2",
            "team_id" =>  "4"

        ]);




    }

    
}
