<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobassign extends Model
{
    public function candidate()
    {
    	return $this->belongsTo('App\Candidate');
    }
    public function company()
    {
    	return $this->belongsTo('App\Company');
    }
    public function job()
    {
    	return $this->belongsTo('App\Job');
    }
}
