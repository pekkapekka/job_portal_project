<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobtype;
use App\Category;
use App\Location;

class jobTypeSearch extends Controller
{
    public function index($request)
    {
    	$id = $request;
    	$categories = Category::all();
    	$locations = Location::all();
    	$jobtypes = Jobtype::all();
    	$result = Jobtype::find($id)->job()->paginate();
    	return view('index',compact('categories','locations','jobtypes'))->withDetails($result);
    }
}
