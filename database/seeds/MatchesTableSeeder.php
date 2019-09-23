<?php

use Illuminate\Database\Seeder;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matches = [
            ['first_team_id' => 1 , 'second_team_id' => 2 , 'winner_team_id' => 2 ],
            ['first_team_id' => 3 , 'second_team_id' => 4 , 'winner_team_id' => 3 ],
            ['first_team_id' => 5 , 'second_team_id' => 6 , 'winner_team_id' => 5 ],
            ['first_team_id' => 7 , 'second_team_id' => 8 , 'winner_team_id' => 8 ]
        ];
        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); 
        DB::table('matches')->truncate();
        DB::table('matches')->insert($matches);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); 
    }
}
