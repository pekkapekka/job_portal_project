<?php

namespace App\Http\Controllers;

use Request;
use App\Job;
use App\User;
use App\Category;
use App\Location;
use App\Jobtype;
use App\Candidate;

class candidateSearchController extends Controller
{
    public function index()
    {
    	$q2_name = '';
    	$q2_location = Request::get('q2-location');
    	$q2_jobtype = Request::get( 'q2-jobtype' );

		$user = Jobtype::where('name','LIKE','%'.$q2_jobtype.'%')
				// >where('title','LIKE','%'.$q2_location.'%')
				->paginate(7);
        return $user;
		if($user)
			return view('candidatesearch')->withDetails($user)->withQuery ( $q2_name );
    }
}
