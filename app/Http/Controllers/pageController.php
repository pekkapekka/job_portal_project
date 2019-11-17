<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Location;
use App\Job;
use App\Jobtype;

class pageController extends Controller
{
    //
    public function show()
    {
    	$categories = Category::all();
    	$locations = Location::all();
    	$jobs = Job::paginate(7);
    	$jobtypes = Jobtype::all();;


    	//return $jobtypes = Jobtype::all()->count();

    	return view('index',compact('categories','locations','jobtypes'))->withDetails($jobs);
    }
}
