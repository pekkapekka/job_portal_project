<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company_user;

class CompanyUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $company_user=Company_user::all();
        return view('company_user.index',compact('company_user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        auth()->user()->assignRole('employer');
        return view('company_user.create');
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
            'name' => 'required',
            'email'=>'required',
            'phone_number'=>'required',
          
            
        ]);

        //File Upload
      

        //Data Insert
          $company_user=new Company_user();
      
        $company_user->name=request('name');
        $company_user->email=request('email');
        $company_user->phone_number=request('phone_number');
        
        
        $company_user->save();

        //Redirect

       return redirect()->route('company_user.index');
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
         $company_user=Company_user::find($id);
        return view('company_user.edit',compact('company_user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
             $request->validate([
                'name' => 'required',
                'email'=>'required',
                'phone_number'=>'required',
          
                //form ka name k call(input type 
            ]);

       

        //Data Insert
        $company_user= Company_user::find($id);
        $company_user->name=request('name');
        $company_user->email=request('email');
        $company_user->phone_number=request('phone_number');
        
        
        $company_user->save();

        //Redirect

       return redirect()->route('company_user.index');
       
       
        //dd($candidates);   
        //$post->status=true;
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company_user= Company_user::find($id);
         $company_user->delete();

        return redirect()->route('company_user.index');
    }
}
