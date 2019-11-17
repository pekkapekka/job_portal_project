<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
    public function category(){
    	return $this->belongsTo('App\Category');
    }
    public function location(){
    	return $this->belongsTo('App\Location');
    }
    public function jobtype()
    {
    	return $this->belongsTo('App\Jobtype');
    }
    public function user()
    {
       return $this->belongsTo('App\User');
    }
}
