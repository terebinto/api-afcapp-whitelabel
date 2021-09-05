<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class MatchEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nx510_bl_match_events')->insert([
            'e_id' => '1',
            'player_id' => '1',
            'match_id' => '1',
            'ecount' => '1',
            'minutes' => '10',
            't_id' => '1'

        ]);

        DB::table('nx510_bl_match_events')->insert([
            'e_id' => '2',
            'player_id' => '1',
            'match_id' => '1',
            'ecount' => '1',
            'minutes' => '20',
            't_id' => '1'

        ]);

        DB::table('nx510_bl_match_events')->insert([
            'e_id' => '3',
            'player_id' => '1',
            'match_id' => '1',
            'ecount' => '1',
            'minutes' => '30',
            't_id' => '1'

        ]);

        
    }
}
