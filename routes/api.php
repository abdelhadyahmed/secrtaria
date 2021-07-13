<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// manager apis
Route::get('/manager', 'ManagerController@get_visitors');
Route::post('/deleteVisitor/{id}', 'ManagerController@delete');
Route::post('/command_to_secrtary', 'ManagerController@command_to_secrtary');


Route::post('/secretary', 'SecretaryController@create');
Route::get('/getVisitorsCommand', 'SecretaryController@getVisitorsCommand');
Route::post('/deleteVisitorCommand/{id}', 'SecretaryController@deleteVisitorCommand');

