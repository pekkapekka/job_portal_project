<?php

namespace App\Http\Controllers;

use Request;
use App\Job;
use App\User;
use App\Category;
use App\Location;
use App\Jobtype;

class candidateSearchController extends Controller
{
    public function index()
    {
    	$q2_name = Request::get ( 'q2-name' );

		$user = User::where('name','LIKE','%'.$q2_name.'%')->paginate(7);
		if($user)
			return view('candidatesearch')->withDetails($user)->withQuery ( $q2_name );
		else return view ('candidatesearch')->withMessage('No Details found. Try to search again !');
    }
}
