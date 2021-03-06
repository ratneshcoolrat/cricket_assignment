<?php
/*
 * Copyright US Tech Solutions. 
 * All rights reserved.
 * File: Match.php
 * Project: Cricket Assignment
 * Author: Ratnesh Kumar Rai
 * CreatedOn: date (22/09/2019) 
*/
namespace App\Helpers\Implement;

use App\Helpers\Contracts\MatchContract;
use App\Models\MatchModel;

class Match implements MatchContract {

    protected $matchModel;

    public function __construct() {
        $this->matchModel = new MatchModel();
    }
    
    public function getMatchList(){
        
        return $this->matchModel->with('firstTeamDetails')->with('secondTeamDetails')->with('winnerDetails')->get()->toArray();
        
    }

}