<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatchdaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nx510_bl_matchday')->insert([
            'm_name' => '1',
            's_id' => '1'

        ]);

        DB::table('nx510_bl_matchday')->insert([
            'm_name' => '2',
            's_id' => '1'

        ]);

        DB::table('nx510_bl_matchday')->insert([
            'm_name' => '3',
            's_id' => '1'

        ]);

        DB::table('nx510_bl_matchday')->insert([
            'm_name' => '4',
            's_id' => '1'

        ]);
    }
}
