<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class Main extends Controller
{
    public function home (){

        $tasks = Task::all();
        //$tasks = Task::where('visible', 1)->get();

        return view('home', ['tasks' => $tasks]);           
    }

    public function new_task(){
        return view("new_task_frm");
    }
}