<?php

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

Route::get('/swagger', 'SwaggerController@index');

Route::get("studentlist/{sname}", "StudentController@listStudents");

Route::get("allstudentlist", "StudentController@allStudentData");

Route::get("register", function () {
    return view("form");
});

Route::get("verifydata", "StudentController@verifyRegisterData");

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("check", "StudentController@checkData");
