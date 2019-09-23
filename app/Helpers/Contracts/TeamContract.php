<?php

namespace App\Helpers\Contracts;

interface TeamContract {

    public function getTeamList();
    
    public function getTeamDetails($request);
}
