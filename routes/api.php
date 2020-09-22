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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['namespace' => 'Api'],function(){

    //USERS ROUTE
    Route::group(['prefix' => 'users/','as' => 'users.'],function(){
        Route::post('login',['as' => 'login' ,'uses' => 'UsersController@login']);
        Route::get('logout',['as' => 'logout' ,'uses' => 'UsersController@logout'])->middleware('api.jwt');
    });    
    Route::resource('users','UsersController');    
});
