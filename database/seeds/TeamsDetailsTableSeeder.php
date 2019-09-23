<?php

use Illuminate\Database\Seeder;

class TeamsDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $details = [
            ['team_id' => 1 , 'player_id' => 1 ],
            ['team_id' => 1 , 'player_id' => 2 ],
            ['team_id' => 1 , 'player_id' => 3 ],
            ['team_id' => 1 , 'player_id' => 4 ],
            ['team_id' => 1 , 'player_id' => 5 ],
            ['team_id' => 1 , 'player_id' => 6 ],
            ['team_id' => 1 , 'player_id' => 7 ],
            ['team_id' => 1 , 'player_id' => 8 ],
            ['team_id' => 1 , 'player_id' => 9 ],
            ['team_id' => 1 , 'player_id' => 10 ],
            ['team_id' => 1 , 'player_id' => 11 ],
            
            ['team_id' => 2 , 'player_id' => 12 ],
            ['team_id' => 2 , 'player_id' => 13 ],
            ['team_id' => 2 , 'player_id' => 14 ],
            ['team_id' => 2 , 'player_id' => 15 ],
            ['team_id' => 2 , 'player_id' => 16 ],
            ['team_id' => 2 , 'player_id' => 17 ],
            ['team_id' => 2 , 'player_id' => 18 ],
            ['team_id' => 2 , 'player_id' => 19 ],
            ['team_id' => 2 , 'player_id' => 20 ],
            ['team_id' => 2 , 'player_id' => 21 ],
            ['team_id' => 2 , 'player_id' => 22 ],
            
            ['team_id' => 3 , 'player_id' => 23 ],
            ['team_id' => 3 , 'player_id' => 24 ],
            ['team_id' => 3 , 'player_id' => 25 ],
            ['team_id' => 3 , 'player_id' => 26 ],
            ['team_id' => 3 , 'player_id' => 27 ],
            ['team_id' => 3 , 'player_id' => 28 ],
            ['team_id' => 3 , 'player_id' => 29 ],
            ['team_id' => 3 , 'player_id' => 30 ],
            ['team_id' => 3 , 'player_id' => 31 ],
            ['team_id' => 3 , 'player_id' => 32 ],
            ['team_id' => 3 , 'player_id' => 33 ],
        ];
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); 
        DB::table('team_details')->truncate();
        DB::table('team_details')->insert($details);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); 
    }
}
