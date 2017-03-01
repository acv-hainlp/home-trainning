<?php

use App\Task;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/tasks',function(){
// 	// $tasks = DB::table('tasks')->get(); //query buider

// 	$tasks = Task::all(); //eloquent 


// 	// return $tasks; //debug = dd($task);
// 	return view(('tasks.index'),compact('tasks'));
// });


// Route::get('/tasks/last',function(){
// 	$tasks = DB::table('tasks')->latest()->get();

// 	return $tasks;
// 	// return view('welcome',compact('tasks'));
// });

// Route::get('/tasks/{id}', function($id){
// 	//$tasks = DB::table('tasks')->find($id);
// 	$tasks = Task::find($id);

// 	return view('tasks.show',compact('tasks'));
// });

//Task Manage
Route::get('/','PostsController@index');

Route::get('/tasks','TasksController@index');

Route::get('/tasks/{id}','TasksController@show');

//Posts Route

Route::get('/posts','PostsController@index')->name('home');

Route::get('/posts/create','PostsController@create');

Route::get('/posts/{post}','PostsController@show');

Route::post('/posts','PostsController@store');

//Comment Manage

Route::post('/posts/{post}/comments','CommentsController@store');
// Route::post('/posts/{post}/comments',function(){ dd($_POST); });



//Auth

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

Route::get('/login','SessionsController@create');
Route::get('/logout','SessionsController@destroy');








