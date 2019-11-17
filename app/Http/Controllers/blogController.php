<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Location;
use App\User;


class blogController extends Controller
{
    //
    public function show()
    {
    	$jobs = Job::paginate(8);
    	return view('blog',compact('jobs'));
    }    
}
