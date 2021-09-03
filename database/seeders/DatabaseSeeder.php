<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(SportSeeder::class);
        $this->call(TournamentSeeder::class);
        $this->call(SeasonSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(TeamSeasonSeeder::class);      
        $this->call(PositionSeeder::class);
        $this->call(PlayerSeeder::class);
        $this->call(MatchdaySeeder::class);   
        $this->call(MatchSeeder::class);  

        
    }
}
