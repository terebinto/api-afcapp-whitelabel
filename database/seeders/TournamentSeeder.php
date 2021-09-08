<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nx510_bl_tournament')->insert([
            'name' => 'CAMPEONATO INTERNO DE FUTEBOL SOCIETY',
            'descr' => 'CAMPEONATO INTERNO',
            'published' => 'N',
            'id_sport' => '1',

        ]);
    }
}
