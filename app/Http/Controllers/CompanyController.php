<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\User;
use App\Location;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company=Company::All();
       return view('company.index',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $users=User::all();
          $locations=Location::all();//data output//database ka na outputs 
        //
        //sdd($categories); 
       return view('company.create',compact('users','locations'));
       
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'users' => 'required',
            'locations' => 'required',//form ka name k call(input type name
            'address' =>'required|min:5',
            'phone_number'=>'required',
            
        ]);

        //Data Insert
        $company=new Company();
        $company->name=request('company_name');
        $company->user_id=request('users');
        $company->location_id=request('locations');
        $company->address=request('address');
        $company->phone_number=request('phone_number');
       
        //d($candidates);   
        //$post->status=true;
        $company->save();

        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $company=Company::find($id);
         $users=User::All();
         $locations=Location::All();
        return view('company.edit',compact('company','users','locations'));
    }

    /**ss
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'users' => 'required',
            'locations' => 'required',
            'address' => 'required',
            'phone_number'=>'required'
             ]);

         $company=Company::find($id);
        $company->user_id=request('users');
        $company->location_id=request('locations');
        $company->address=request('address');
        $company->phone_number=request('phone_number');

        $company->save();

        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company=Company::find($id);
        $company->delete();
        return redirect()->route('company.index');
    }
}
