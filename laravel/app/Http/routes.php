<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
<<<<<<< HEAD

=======
>>>>>>> tilo14
Route::get('/', function(){
	return View::make('index');
});

<<<<<<< HEAD

=======
>>>>>>> tilo14
Route::resource('users', 'UserController');

Route::resource('questions', 'QuestionController');

Route::resource('challenges', 'ChallengeController');

Route::resource('api/flow', 'FlowController');


