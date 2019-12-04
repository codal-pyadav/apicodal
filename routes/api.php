<?php

use Illuminate\Http\Request;

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

Route::post('/employee', 'ApiController@create');

Route::put("/employeeupdate/{empid}", "ApiController@updateDetails");

Route::delete("/removeEmployee/{empid}", "ApiController@deleteByEmpId");

Route::get('/alldata', 'ApiController@allDetails');

Route::get('/search/{empid}', 'ApiController@searchDataById');

Route::get("verifydata", "StudentController@verifyRegisterData");

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
