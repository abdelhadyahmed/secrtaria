<?php

use App\Events\FormSubmited;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

//manager rotes
Route::get('/manager', 'ManagerController@index');

//secretar routes
Route::get('/secretary', 'SecretaryController@index');
Route::post('/secretary', 'SecretaryController@create');

//other routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/counter', function(){
//     return view("counter");
// });
// Route::get('/sender', function(){
//     return view("sender");
// });
// Route::post('/sender', function(){
//     $text = request()->content;
//     event(new FormSubmited($text));
// });
