<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamDetailsModel extends Model
{
    protected $table = 'team_details';
    
    public function playerDetails() {
        return $this->belongsTo(PlayerModel::class,'player_id','id');
    }
}
