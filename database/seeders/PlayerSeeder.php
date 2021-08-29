<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nx510_bl_players')->insert([
            'first_name' =>'alexandre',
            'last_name' => 'terebinto',
            'team_id' => '1',
            'position_id' =>'1',
        ]);
    }
}
