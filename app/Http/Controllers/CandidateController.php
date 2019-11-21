<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Candidate;
use App\Jobtype;
use App\Gender;


class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        
    }

    public function index()
    {
        $candidates= Candidate::all();
        $jobtypes=Jobtype::all();

        $genders=Gender::all();

        return view('candidates.index',compact('candidates','jobtypes','genders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $jobtypes=Jobtype::all();

        $genders=Gender::all();

         return view('candidates.create',compact('jobtypes','genders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
          /*$request->validate([
            'jobid' => 'required',//form ka name k call(input type name
            'phone_no' =>'required|min:5',
            'address'=>'required',
            'education'=>'required',
            'photo'=>'required|mimes:jpeg,png,jpg',
            'cv'=>'required',
            
        ]);*/

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

        if($request->hasfile('cv')){
            $cv=$request->file('cv');
            $name=time().'.'.$cv->getClientOriginalExtension();
            $cv->move(public_path().'/storage/cv/',$name);
            $cv='/storage/cv/'.$name;

        }
        else{
            $cv='';
        }


        //Data Insert
        $candidates=new Candidate();
        $candidates->jobtype_id=request('jobtypeid');
        $candidates->address=request('address');
        $candidates->phone_no=request('phone_no');
        $candidates->education=request('education');
        $candidates->photo=$photo;
        $candidates->cv=$cv;
        $candidates->user_id = Auth::id();
        //d($candidates);   
        //$post->status=true;
        $candidates->save();

        //Redirect

        return redirect()->route('index');
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
        //$candidates=Candidate::find($id);//old value
        $candidates=Candidate::find($id);
         $jobtypes=Jobtype::all();
         $genders=Gender::all();
        return view('candidates.edit',compact('jobtypes','candidates','genders'));

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
            'jobtypes' => 'required',//form ka name k call(input type name
            'address' =>'required|min:5',
            'phone_number'=>'required',
            'education'=>'required',
            'photo'=>'sometimes|mimes:jpeg,png,jpg',
            'cv'=>'required',
            
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

        if($request->hasfile('cv')){
            $cv=$request->file('cv');
            $name=time().'.'.$cv->getClientOriginalExtension();
            $cv->move(public_path().'/storage/cv/',$name);
            $cv='/storage/cv/'.$name;

        }
        else{
            $cv='';
        }

        //Data Insert
        $candidates= Candidate::find($id);
        $candidates->jobtype_id=request('jobtypes');
        $candidates->address=request('address');
        $candidates->phone_no=request('phone_number');
        $candidates->education=request('education');
        $candidates->photo=$photo;
        $candidates->cv=$cv;

        //dd($candidates);   
        //$post->status=true;
        $candidates->save();

        //Redirect

       return redirect()->route('candidates.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $candidates= Candidate::find($id);
        $candidates->delete();

        return redirect()->route('candidates.index');
    }   

}
