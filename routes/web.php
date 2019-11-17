<?php

// use Illuminate\Support\Facades\Input;
//use Request;

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

Route::get('/jobsearch','jobSearchController@index');

Route::get('/candidatesearch','candidateSearchController@index');

Route::get('/read','pdfoperator@read');

Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');

Route::get('/jobtypesearch/{id}','jobTypeSearch@index')->name('jobtypesearch');

Route::resource('/candidates','CandidateController');

Route::resource('/jobs','jobController');

Route::resource('/jobtypes','JobtypeController');