<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class showDetail extends Controller
{
	public function index()
	{
		$post = Job::all();
		return view('detail.detail',compact('post'));
	}   
}
