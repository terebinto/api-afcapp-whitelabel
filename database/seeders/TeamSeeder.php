<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nx510_bl_teams')->insert([
            "t_name" =>  "CASCAVEL ESPORTE CLUBE",
            "t_initials" =>  "CASCAVEL",            
            "t_emblem" =>  "semescudo.jpg"
        ]);

        DB::table('nx510_bl_teams')->insert([
            "t_name" =>  "INTERNACIONAL F.C.",
            "t_initials" =>  "INTERNACIONAL", 
            "t_emblem" =>  "semescudo.jpg"
        ]);

        DB::table('nx510_bl_teams')->insert([
            "t_name" =>  "BRASIL SPORT CLUB",
            "t_initials" =>  "BRASIL", 
            "t_emblem" =>  "semescudo.jpg"
        ]);

        DB::table('nx510_bl_teams')->insert([
            "t_name" =>  "GUARANY ESPORTE CLUBE ",
            "t_initials" =>  "GUARANY", 
            "t_emblem" =>  "semescudo.jpg"
        ]);
      
        DB::table('nx510_bl_teams')->insert([
            "t_name" =>  "ESPARTANO ESPORTE CLUBE",
            "t_initials" =>  "GUARANY", 
            "t_emblem" =>  "semescudo.jpg"
        ]);

        DB::table('nx510_bl_teams')->insert([
            "t_name" =>  "BRITÂNIA SPORT CLUB",
            "t_initials" =>  "BRITÂNIA",
            "t_emblem" =>  "semescudo.jpg"
        ]);

        DB::table('nx510_bl_teams')->insert([
            "t_name" =>  "ESPORTE CLUBE 9 DE JULHO",
            "t_initials" =>  "9 DE JULHO",
            "t_emblem" =>  "semescudo.jpg"
        ]);

        DB::table('nx510_bl_teams')->insert([
            "t_name" =>  "NOVA RÚSSIA ESPORTE CLUBE",
            "t_initials" =>  "NOVA RÚSSIA",
            "t_emblem" =>  "semescudo.jpg"
        ]);

        DB::table('nx510_bl_teams')->insert([
            "t_name" =>  "SOCIEDADE E. MATSUBARA",
            "t_initials" =>  "MATSUBARA",
            "t_emblem" =>  "semescudo.jpg"
        ]);

        DB::table('nx510_bl_teams')->insert([
            "t_name" =>  "PALESTRA ITÁLIA FUTEBOL CLUBE",
            "t_initials" =>  "PALESTRA",
            "t_emblem" =>  "semescudo.jpg"
        ]);

        DB::table('nx510_bl_teams')->insert([
            "t_name" =>  "COLORADO ESPORTE CLUBE",
            "t_initials" =>  "COLORADO",
            "t_emblem" =>  "semescudo.jpg"
        ]);

        DB::table('nx510_bl_teams')->insert([
            "t_name" =>  "CLUBE ATLÉTICO FERROVIÁRIO",
            "t_initials" =>  "FERROVIÁRIO",
            "t_emblem" =>  "semescudo.jpg"
        ]);

        DB::table('nx510_bl_teams')->insert([
            "t_name" =>  "SELETO DE PARANAGUÁ",
            "t_initials" =>  "SELETO",
            "t_emblem" =>  "semescudo.jpg"
        ]);

        DB::table('nx510_bl_teams')->insert([
            "t_name" =>  "RECREATIVO BELTRONENSE",
            "t_initials" =>  "BELTRONENSE",
            "t_emblem" =>  "semescudo.jpg"
        ]);

        DB::table('nx510_bl_teams')->insert([
            "t_name" =>  "UNIÃO PLATINENSE DE ESPORTES",
            "t_initials" =>  "PLATINENSE",
            "t_emblem" =>  "semescudo.jpg"
        ]);

        DB::table('nx510_bl_teams')->insert([
            "t_name" =>  "PINHEIROS ESPORTE CLUBE",
            "t_initials" =>  "PINHEIROS",
            "t_emblem" =>  "semescudo.jpg"
        ]);

        


        

        
        




        



        

       
    }
}
