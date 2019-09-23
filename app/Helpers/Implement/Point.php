<?php

namespace App\Helpers\Implement;

use App\Helpers\Contracts\PointContract;
use App\Models\PointModel;


class Point implements PointContract {

    protected $pointModel;

    public function __construct() {
        $this->pointModel = new PointModel();
    }
    
    public function getPointList(){
        
        return $this->pointModel->join('teams','points.team_id', '=', 'teams.id')->get();
        
    }

}