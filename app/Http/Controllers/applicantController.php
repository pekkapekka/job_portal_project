<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobassign;

class applicantController extends Controller
{
    public function index()
    {
    	$applicants = Jobassign::all();
    	return view('applicant',compact('applicants'));
    }
}
