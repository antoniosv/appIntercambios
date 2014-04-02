<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Route::get('/', function()
{
  return Redirect::to('questions');
});
*/

Route::get('/', array('as' => 'home', function() { 
  return View::make('home');
  //return Redirect::to('questions/list');
} ));

  Route::get('questions/new', [
  'uses' => 'QuestionsController@newQuestion',
  'as' => 'questions/new'
]);

  Route::get('questions/faq', array('uses' => 'QuestionsController@showFAQ', 'as' => 'questions/faq'));


  
Route::group(["before" => "auth"], function() {

  Route::any("/profile", [
    "as" => "user/profile",
    "uses" => "UserController@profileAction"
  ]);

  Route::any("/logout", [
    "as" => "user/logout",
    "uses" => "UserController@logoutAction"
  ]);

  Route::get('questions/list', [
    'as' => 'questions/list',
    'uses' => 'QuestionsController@showQuestions'
  ]);

  Route::get('questions/{id}', [
    'uses' => 'QuestionsController@seeQuestion'
  ]);

  Route::post('questions/update', [
    'uses' => 'QuestionsController@updateQuestion'
  ]);

  Route::get('questions/delete/{id}', [
    'uses' => 'QuestionsController@deleteQuestion'
  ]);



});

Route::group(["before" => "guest"], function() {

  Route::any("/login", [
    'as' => 'user/login', 
    'uses' => 'UserController@loginAction'
  ]);
  
  Route::any("/request", [
    "as" => "user/request",
    "uses" => "UserController@requestAction"
  ]);

  Route::any("/reset", [
    "as" => "user/reset",
    "uses" => "UserController@resetAction"
  ]);

  Route::post('questions/create', array('uses' => 'QuestionsController@createQuestion', 'as' => 'questions/create'));

});



Route::get('users', function()
{	
 $users = User::all();
 return View::make('users')->with('users', $users);
});


//Route::get('questions/new', array('uses' => 'QuestionsController@newQuestion'));

?>