<?php

// use Illuminate\Support\Facades\Input;
//use Request;
use App\Job;
use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'pageController@show')->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog','blogController@show')->name('blog');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::resource('/postjob','jobController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::any('/jobsearch',function(){
$q1_title = Request::get ( 'q1-title' );
$q1_category = Request::get( 'q1-category' );
$q1_location = Request::get( 'q1-location' );
// $job = Job::where('title','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
$job = Job::query()
		->where('title','LIKE','%'.$q1_title.'%')
		->where('category_id','LIKE',$q1_category)
		->where('location_id','LIKE',$q1_location)
		->get();
if($job)
	return view('jobsearch')->withDetails($job)->withQuery ( $q1_title );
else return view ('jobsearch')->withMessage('No Details found. Try to search again !');
});

Route::any('/candidatesearch',function(){
$q2_name = Request::get ( 'q2-name' );

$user = User::where('name','LIKE','%'.$q2_name.'%')->get();
if($user)
	return view('candidatesearch')->withDetails($user)->withQuery ( $q2_name );
else return view ('candidatesearch')->withMessage('No Details found. Try to search again !');
});