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
            'name' => 'Campeonato de Teste 1',
            'descr' => 'Descrição do campeonato',
            'published' => 'N',
            'id_sport' => '1',

        ]);

        DB::table('nx510_bl_tournament')->insert([
            'name' => 'Campeonato de Grupos',
            'descr' => 'Descrição do grupos',
            'published' => 'S',
            'id_sport' => '1',

        ]);
    }
}
