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

Route::get("/",function ()
{
    return view('create');
});
Route::get("/create", [
    'as'   =>'web.question.index',
    'uses' =>'QuestionsController@index',
]);
Route::post("/create", [
    'as'   =>'web.question.store',
    'uses' =>'QuestionsController@store',
]);