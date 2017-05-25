<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index()
    {
    	$tasks = Task::all();

    	return view('tasks.index', compact('tasks'));
    }
}
