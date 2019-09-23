<?php

use Illuminate\Database\Seeder;

class PointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $points = [
            ['team_id' => 1 , 'played' => 1 , 'won' => 0 , 'lost' => 1, 'tie' => 0, 'net_run_rate' => 0, 'points' => 0 ],
            ['team_id' => 2 , 'played' => 1 , 'won' => 1,'lost' => 0, 'tie' => 0, 'net_run_rate' => 0, 'points' => 2 ],
            ['team_id' => 3 , 'played' => 1 , 'won' => 1 ,'lost' => 0, 'tie' => 0, 'net_run_rate' => 0, 'points' => 2],
            ['team_id' => 4 , 'played' => 1 , 'won' => 0,'lost' => 1, 'tie' => 0, 'net_run_rate' => 0, 'points' => 0 ],
            ['team_id' => 5 , 'played' => 1 , 'won' => 1 , 'lost' => 0, 'tie' => 0, 'net_run_rate' => 0, 'points' => 2 ],
            ['team_id' => 6 , 'played' => 1 , 'won' => 0,'lost' => 1, 'tie' => 0, 'net_run_rate' => 0, 'points' => 0 ],
            ['team_id' => 7 , 'played' => 1 , 'won' => 0 ,'lost' => 1, 'tie' => 0, 'net_run_rate' => 0, 'points' => 0],
            ['team_id' => 8 , 'played' => 1 , 'won' => 1,'lost' => 0, 'tie' => 0, 'net_run_rate' => 0, 'points' => 2 ]
        ];
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); 
        DB::table('points')->truncate();
        DB::table('points')->insert($points);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); 
    }
}
