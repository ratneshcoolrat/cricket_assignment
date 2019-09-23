<?php
/*
 * Copyright US Tech Solutions. 
 * All rights reserved.
 * File: Team.php
 * Project: Cricket Assignment
 * Author: Ratnesh Kumar Rai
 * CreatedOn: date (22/09/2019) 
*/
namespace App\Helpers\Implement;

use App\Helpers\Contracts\TeamContract;
use App\Models\TeamModel;
use App\Models\TeamDetailsModel;


class Team implements TeamContract {

    protected $team;

    public function __construct() {
        $this->teamModel = new TeamModel();
    }
    
    public function getTeamList(){
        
        return $this->teamModel->orderBy('name')->paginate(config('constant.PAGINATION_LIMIT'));
        
    }
    
    public function getTeamDetails($id){
        
        return TeamDetailsModel::whereTeamId($id)->with('playerDetails')->get()->toArray();
        
    }

    

}