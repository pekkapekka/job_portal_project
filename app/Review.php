<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $fillable = [
        'body','job_id','user_id',
    ];

    public function job(){
    	return $this->belongsTo('App\Job');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
