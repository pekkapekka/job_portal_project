<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    public function job(){
    	return $this->hasMany('App\Job');
    }
    public function company()
    {
        return $this->hasMany('App\Company');
    }
}
