<?php
/*
 * Copyright US Tech Solutions. 
 * All rights reserved.
 * File: TeamContract.php
 * Project: Cricket Assignment
 * Author: Ratnesh Kumar Rai
 * CreatedOn: date (22/09/2019) 
*/
namespace App\Helpers\Contracts;

interface TeamContract {

    public function getTeamList();
    
    public function getTeamDetails($request);
}
