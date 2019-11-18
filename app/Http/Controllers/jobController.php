<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Location;
use App\Category;
use App\User;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs= Job::all();
        $categories = Category::all();
        $locations = Location::all();
        $users = User::all();
        return view('jobs.index',compact('jobs','categories','locations','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $locations=Location::all();
        $users=User::all();


        
         return view('jobs.create',compact('categories','locations','users'));
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
            'title' => 'required',//form ka name k call(input type name
            'categories' =>'required',
            'locations'=>'required',
            'description'=>'required',
            'salary'=>'required',
            'photo'=>'required|mimes:jpeg,png,jpg',
            'users'=>'required',
            
        ]);

        //File Upload
        if($request->hasfile('photo')){
            $photo=$request->file('photo');
            $name=time().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path().'/storage/image/',$name);
            $photo='/storage/image/'.$name;

        }
        else{
            $photo='';
        }

        //Data Insert
        $jobs=new Job();
        $jobs->title=request('title');
        $jobs->category_id=request('category');
        $jobs->location_id=request('locations');
        $jobs->description=request('description');
        $jobs->salary=request('salary');
        $jobs->photo=$photo;
        $job->user_id = Auth::id();
       
        //d($candidates);   
        //$post->status=true;
        $jobs->save();

        //Redirect

        return redirect()->route('jobs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobs=Job::find($id);
        $categories=Category::all();
        $locations=Location::all();
        $users=User::all();
        return view('jobs.edit',compact('jobs','categories','locations','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobs=Job::find($id);
        $categories=Category::all();
        $locations=Location::all();
        $users=User::all();
        return view('jobs.edit',compact('jobs','categories','locations','users'));
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
            'title' => 'required',//form ka name k call(input type name
            'category' =>'required',
            'locations'=>'required',
            'description'=>'required',
            'salary'=>'required',
            'photo'=>'sometimes|mimes:jpeg,png,jpg',
           
            'users'=>'required',
            
        ]);

        //File Upload
        if($request->hasfile('photo')){
            $photo=$request->file('photo');
            $name=time().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path().'/storage/image/',$name);
            $photo='/storage/image/'.$name;

        }
        else{
            $photo='oldphoto';
        }

        //Data Insert
        $jobs= Job::find($id);
        $jobs->title=request('title');
        $jobs->category_id=request('category');
        $jobs->location_id=request('locations');
        $jobs->description=request('description');
        $jobs->salary=request('salary');
        $jobs->image=$photo;
        $jobs->user_id=request('users');
       
        //dd($candidates);   
        //$post->status=true;
        $jobs->save();

        //Redirect

       return redirect()->route('jobs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $jobs= Job::find($id);
        $jobs->delete();

        return redirect()->route('jobs.index');
    }
}
