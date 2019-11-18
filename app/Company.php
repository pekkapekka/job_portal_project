<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function location()
    {
        return $this->belongsTo('App\Location');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function jobassign()
    {
    	return $this->hasMany('App\Jobassign');
    }

}
