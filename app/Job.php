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
    public function company_user()
    {
       return $this->belongsTo('App\Company_user');
    }
    public function reviews()
    {
       return $this->hasMany('App\Review');
    }
    public function jobassign()
    {
        return $this->hasMany('App\Jobassign');
    }
}
