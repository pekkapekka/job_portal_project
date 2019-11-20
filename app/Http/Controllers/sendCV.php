<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;
use App\Company;
use App\Job;
use App\Jobassign;

class sendCV extends Controller
{
    public function index($id)
    {
    	// $candidate_id = Candidate::find($id);
    	// $company_id = Company::find($id)->id;
    	// $job_id = Job::find($id)->id;

    	// $jobassign=new Jobassign();
    	// $jobassign->date=date('Y-m-d H:i:s');
     //    $jobassign->candidate_id=$candidate_id;
     //    $jobassign->company_id=$company_id;
     //    $jobassign->job_id=$job_id;
        
     //    $jobassign->save();

        //Redirect
        return 'sent';
    }
}
