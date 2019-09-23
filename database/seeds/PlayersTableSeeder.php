<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $players = [
            ['first_name' => 'MS' , 'last_name' => 'Dhoni' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'1','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Suresh' , 'last_name' => 'Raina' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'2','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Faf Du' , 'last_name' => 'Plessis' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'3','country'=>'','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'M' , 'last_name' => 'Vijay' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'4','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Ravindra' , 'last_name' => 'Jadeja' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'5','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Sam' , 'last_name' => 'Billings' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'6','country'=>'','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mitchell' , 'last_name' => 'Santner' , 'image_uri' => 'default-avatar.png','jersey_number'=>'7','country'=>'','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'David' , 'last_name' => 'Willey' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'8','country'=>'','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Dwayne' , 'last_name' => 'Bravo' , 'image_uri' => 'default-avatar.png','jersey_number'=>'9','country'=>'','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Shane' , 'last_name' => 'Watson' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'10','country'=>'','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Lungi' , 'last_name' => 'Ngidi' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'11','country'=>'','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
           
            ['first_name' => 'Shreyas' , 'last_name' => 'Iyer' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'12','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Rishabh' , 'last_name' => 'Pant' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'13','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Prithvi' , 'last_name' => 'Shaw' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'14','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Amit' , 'last_name' => 'Mishra' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'15','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Rahul' , 'last_name' => 'Tewatiya' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'16','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Colin' , 'last_name' => 'Munro' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'17','country'=>'','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Shikhar' , 'last_name' => 'Dhawan' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'18','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Chris' , 'last_name' => 'Gayle' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'19','country'=>'','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Andrew' , 'last_name' => 'Tye' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'20','country'=>'','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'David' , 'last_name' => 'Miller' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'21','country'=>'','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Ravichandran' , 'last_name' => 'Ashwin' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'22','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            
            ['first_name' => 'Mandeep' , 'last_name' => 'Singh' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'23','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Karun' , 'last_name' => 'Nayer' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'24','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Harbhajan' , 'last_name' => 'Singh' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'25','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Deepak' , 'last_name' => 'Chahar' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'26','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Shardual' , 'last_name' => 'Thakur' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'27','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Monu' , 'last_name' => 'Kumar' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'28','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Hanuman' , 'last_name' => 'Bihari' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'29','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Colin' , 'last_name' => 'Ingram' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'30','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Aveshy' , 'last_name' => 'Khan' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'31','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Harshal' , 'last_name' => 'Patel' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'32','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Keemo' , 'last_name' => 'Paul' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'33','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            
            
            ['first_name' => 'Manjot' , 'last_name' => 'Kalra' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'34','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Ankush' , 'last_name' => '' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'35','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Nathu' , 'last_name' => 'Singh' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'36','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Bandaru' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'37','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Chris' , 'last_name' => 'Moris' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'38','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Trent' , 'last_name' => 'Bolt' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'39','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Sam' , 'last_name' => 'Curran' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'40','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mohammed' , 'last_name' => 'Sami' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'41','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Nicolas' , 'last_name' => 'Pooran' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'42','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Dinesh' , 'last_name' => 'Karthik' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'43','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Robin' , 'last_name' => 'Uthappa' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'44','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'45','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'46','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'47','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'48','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'49','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'50','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'51','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'52','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'53','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'54','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'55','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            
            
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'56','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'57','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'58','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'59','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'60','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'61','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'62','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'63','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'64','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'65','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'66','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'67','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'68','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'69','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'70','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'71','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'72','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'73','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'74','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'75','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'76','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'77','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'78','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'79','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'80','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'81','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'82','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'83','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'84','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'85','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'86','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'87','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
            ['first_name' => 'Mayank' , 'last_name' => 'Agarwal' , 'image_uri' => 'default-avatar.png' ,'jersey_number'=>'88','country'=>'India','matches'=>100,'runs'=>12000,'highest_scores'=>120,'fifties'=>30,'hundreds'=>10],
        ];
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); 
        DB::table('players')->truncate();
        DB::table('players')->insert($players);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); 
    }
}
