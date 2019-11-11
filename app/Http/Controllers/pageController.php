<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Location;

class pageController extends Controller
{
    //
    public function show()
    {
    	$categories = Category::all();
    	$locations = Location::all();
    	return view('index',compact('categories','locations'));
    }
}
