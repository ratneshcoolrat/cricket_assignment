<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = [
            ['name' => 'CSK' , 'logo_uri' => 'csk.png' , 'club_state' => 'Chennai' ],
            ['name' => 'KKR' , 'logo_uri' => 'kkr.png' , 'club_state' => 'Kolkata' ],
            ['name' => 'MI' , 'logo_uri' => 'mi.png' , 'club_state' => 'Mumbai' ],
            ['name' => 'DC' , 'logo_uri' => 'dc.png' , 'club_state' => 'Delhi' ],
            ['name' => 'KXIP' , 'logo_uri' => 'kxip.png' , 'club_state' => 'Panjab' ],
            ['name' => 'SRH' , 'logo_uri' => 'srh.png' , 'club_state' => 'Hyderabad' ],
            ['name' => 'RR' , 'logo_uri' => 'rr.png' , 'club_state' => 'Rajasthan' ],
            ['name' => 'RCB' , 'logo_uri' => 'rcb.png' , 'club_state' => 'Bangalore' ]
        ];
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); 
        DB::table('teams')->truncate();
        DB::table('teams')->insert($teams);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); 
    
    }
}
