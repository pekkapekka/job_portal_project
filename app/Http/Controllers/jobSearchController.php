<?php
namespace App\Http\Controllers;

use Request;
use App\Job;
use App\User;
use App\Category;
use App\Location;
use App\Jobtype;

class jobSearchController extends Controller
{
    public function index()
    {
    	$categories = Category::all();
		$locations = Location::all();
		$jobtypes = Jobtype::all();

		$q1_title = Request::get ( 'q1-title' );
		$q1_category = Request::get( 'q1-category' );
		$q1_location = Request::get( 'q1-location' );
		// $job = Job::where('title','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
		$job = Job::query()
				->where('title','LIKE','%'.$q1_title.'%')
				->where('category_id','LIKE',$q1_category)
				->where('location_id','LIKE',$q1_location)
				->paginate(7);
		if($job)
			return view('index',compact('categories','locations','jobtypes'))->withDetails($job)->withQuery ( $q1_title );
		else return view ('jobsearch',compact('categories','locations'))->withMessage('No Details found. Try to search again !');
    }
}
