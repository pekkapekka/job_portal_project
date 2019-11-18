<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations= Location::all();
        return view('locations.index',compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('locations.create');
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
            'location_name' => 'required',//form ka name k call(input type name
            
        ]);

        //File Upload
      

        //Data Insert
          $locations=new Location();
      
        $locations->location_name=request('location_name');
        
        $locations->save();

        //Redirect

       return redirect()->route('locations.index');
        
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
         $locations=Location::find($id);
        return view('locations.edit',compact('locations'));
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
                'location_name' => 'required',//form ka name k call(input type 
            ]);

       

        //Data Insert
        $locations= Location::find($id);
        $locations->location_name=request('location_name');
       
       
        //dd($candidates);   
        //$post->status=true;
        $locations->save();

        //Redirect

       return redirect()->route('locations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $locations= Location::find($id);
         $locations->delete();

        return redirect()->route('locations.index');
    }
}
