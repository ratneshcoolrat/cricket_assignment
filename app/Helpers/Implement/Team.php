<?php

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
        
        return $this->teamModel->orderBy('name')->paginate(5);
        
    }
    
    public function getTeamDetails($id){
        
        return TeamDetailsModel::whereTeamId($id)->with('playerDetails')->get()->toArray();
        
    }

    

}