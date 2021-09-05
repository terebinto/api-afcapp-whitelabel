<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nx510_bl_events')->insert([
            'e_name' => 'Amarelo',
            'e_img' => 'yellow_card.png',
            'e_descr' => '',
            'player_event' => '1',
            'id_sport' => '1'

        ]);

        DB::table('nx510_bl_events')->insert([
            'e_name' => 'Vermelho',
            'e_img' => 'yellow-red_card.png',
            'e_descr' => '',
            'player_event' => '1',
            'id_sport' => '1'

        ]);

        DB::table('nx510_bl_events')->insert([
            'e_name' => 'Gol',
            'e_img' => 'ball.png',
            'e_descr' => '',
            'player_event' => '1',
            'id_sport' => '1'

        ]);

        DB::table('nx510_bl_events')->insert([
            'e_name' => 'Azul',
            'e_img' => 'bluecard.png',
            'e_descr' => '',
            'player_event' => '1',
            'id_sport' => '1'

        ]);

        DB::table('nx510_bl_events')->insert([
            'e_name' => 'Gol Contra',
            'e_img' => 'ball_contra.png',
            'e_descr' => '',
            'player_event' => '1',
            'id_sport' => '1'

        ]);

        DB::table('nx510_bl_events')->insert([
            'e_name' => 'Gol Contra',
            'e_img' => 'ball_contra.png',
            'e_descr' => '',
            'player_event' => '1',
            'id_sport' => '1'

        ]);

        DB::table('nx510_bl_events')->insert([
            'e_name' => 'Melhor em Campo',
            'e_img' => 'trofeu.png',
            'e_descr' => '',
            'player_event' => '1',
            'id_sport' => '1'

        ]);

        DB::table('nx510_bl_events')->insert([
            'e_name' => 'Assistencia',
            'e_img' => 'boot.png',
            'e_descr' => '',
            'player_event' => '1',
            'id_sport' => '1'

        ]);
    }
}
