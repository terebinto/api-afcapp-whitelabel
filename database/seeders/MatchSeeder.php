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
            'match_descr' => 'Primeira Rodada - Jogo 1',
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

        DB::table('nx510_bl_match')->insert([
            'm_id' => '1',
            'match_descr' => 'Primeira Rodada - Jogo 2',
            'team1_id' => '3',
            'team2_id' => '4',
            'score1' => '0',
            'score2' => '0',
            'published' => '1',
            'is_extra' => '0',
            'm_played' => '0',
            'm_date' => '2021-09-20',
            'm_time' => '11:00',

        ]);

        DB::table('nx510_bl_match')->insert([
            'm_id' => '2',
            'match_descr' => 'Jogo da segunda rodada',
            'team1_id' => '1',
            'team2_id' => '4',
            'score1' => '0',
            'score2' => '0',
            'published' => '0',
            'is_extra' => '0',
            'm_played' => '0',
            'm_date' => '2021-09-20',
            'm_time' => '11:00',

        ]);

        DB::table('nx510_bl_match')->insert([
            'm_id' => '2',
            'match_descr' => 'Jogo da segunda rodada - 2',
            'team1_id' => '2',
            'team2_id' => '3',
            'score1' => '0',
            'score2' => '0',
            'published' => '0',
            'is_extra' => '0',
            'm_played' => '1',
            'm_date' => '2021-10-20',
            'm_time' => '11:00',

        ]);
    }
}
