<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nx510_bl_match')->insert([
            'm_id' => '1',
            'match_descr' => 'Rodada Inicial',
            'team1_id' => '1',
            'team2_id' => '2',
            'score1' => '1',
            'score2' => '2',
            'published' => '1',
            'is_extra' => '0',
            'm_played' => '1',
            'm_date' => '2021-09-03',
            'm_time' => '11:00',

        ]);
    }
}
