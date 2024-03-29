<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function employee(){
        return $this->hasMany('App\Employee');
    }

    public function department(){
        return $this->belongsTo('App\Department');
    }
}
