<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatchModel extends Model
{
    protected $table = 'matches';
    
    public function firstTeamDetails() {
        return $this->belongsTo(TeamModel::class,'first_team_id','id');
    }
    public function secondTeamDetails() {
        return $this->belongsTo(TeamModel::class,'second_team_id','id');
    }
    public function winnerDetails() {
        return $this->belongsTo(TeamModel::class,'winner_team_id','id');
    }
}
