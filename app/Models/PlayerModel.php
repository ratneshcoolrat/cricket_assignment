<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerModel extends Model
{
    protected $table = 'players';
    protected $fillable = ['created_at', 'updated_at', 'deleted_at'];
}
