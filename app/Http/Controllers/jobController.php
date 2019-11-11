<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Job;
use App\Category;

class jobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::all(); 
        $jobs = Job::all();
        $categories = Category::all();
        return view('postjob',compact('locations','jobs','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'title' => 'required|min:5',
            'name' => 'required|min:5',
            'category' => 'required',
            'location' => 'required',
            'description' => 'required',
            'photo' => 'required|mimes:jpeg,jpg,png',
        ]);

        if($request->hasfile('photo')){
            $photo = $request->file('photo');
            //$name = $photo->getClientOriginalName();
            $name = time().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path().'/img/',$name);
            $photo = '/img/'.$name;
        }


        // Data insert
        $job = new Job();
        $job->title = request('title');
        $job->name = request('name');
        $job->category_id = request('category');
        $job->location_id = request('location');
        $job->description = request('description');
        $job->image = $photo;
        $job->user_id = 3;
        //$job->user_id = Auth::id();
        // $post->status = true;

        $job->save();

        // Redirect
        return redirect()->route('postjob.index');

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
