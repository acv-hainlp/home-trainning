<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index()

    {
    	$tasks = Task::all();

    	return view('tasks.index',compact('tasks'));
    }


    public function show($id)

    {
    	$tasks = Task::find($id);

    	// return $tasks;

    	return view('tasks.show', compact('tasks'));

    }

}
