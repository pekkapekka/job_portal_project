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
$q1 = Request::get ( 'q1' );
// $job = Job::where('title','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
$job = Job::where('title','LIKE','%'.$q1.'%')->get();
if($job)
	return view('jobsearch')->withDetails($job)->withQuery ( $q1 );
else return view ('jobsearch')->withMessage('No Details found. Try to search again !');
});

Route::any('/candidatesearch',function(){
$q2 = Request::get ( 'q2' );

$user = User::where('name','LIKE','%'.$q2.'%')->get();
if($user)
	return view('candidatesearch')->withDetails($user)->withQuery ( $q2 );
else return view ('candidatesearch')->withMessage('No Details found. Try to search again !');
});