
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
    return view('welcome');
});
Route::get("/create", [
    'as'   =>'create',
    'uses' =>'QuestionsController@create',
]);
Route::post("/create", [
    'as'   =>'web.question.store',
    'uses' =>'QuestionsController@store',
]);
Route::get("/edit/{id}", [
    'as'   =>'web.question.edit',
    'uses' =>'QuestionsController@edit',
]);
Route::post("/edit/{id}", [
    'as'   =>'web.question.update',
    'uses' =>'QuestionsController@update',
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', [
    'as'=>'index',
    'uses'=>'QuestionsController@index'
]);

//Route::get('/delete', [
  //  'as'=>'delete',
    //'uses'=>'QuestionsController@delete'
//]);
Route::get('/delete/{id?}',array('as'=>'delete','uses'=>'QuestionsController@delete'));


