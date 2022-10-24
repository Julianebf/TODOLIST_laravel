<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class Main extends Controller
{
    public function home (){

        $tasks = Task::where('visible', 1)
                ->orderBy('created_at', 'desc')
                ->get();

        return view('home', ['tasks' => $tasks]);           
    }

    public function new_task(){
        return view("new_task_frm");
    }

    public function new_task_submit(Request $request){
        

        $new_task = $request->input('text_new_task');
        
        $task = new Task();
        $task->task = $new_task;
        $task->save();

        return redirect()->route('home');


    }

    public function task_done($id){
        
        $task = Task::find($id);
        $task->done = new \DateTime();
        $task->save();

        return redirect()->route('home');

    }

    public function task_undone($id){
        
        $task = Task::find($id);
        $task->done = null;
        $task->save();

        return redirect()->route('home');

    }

    public function edit_task($id){
       
        $task = Task::find($id);
        
        return view('edit_task_frm',['task' => $task]);
        
        
    }

    public function edit_task_submit(Request $request){
        
        $id_task = $request->input('id_task');
        $edit_task = $request->input('text_edit_task');

        $task = Task::find($id_task);
        $task->task = $edit_task;
        $task->save();

        return redirect()->route('home');

    }

    public function task_invisible($id){
        
        $task = Task::find($id);
        $task->visible =0;
        $task->save();

        return redirect()->route('home');
    }

    public function task_visible($id){
        $task = Task::find($id);
        $task->visible =1;
        $task->save();

        return redirect()->route('home');
        
    }

    public function list_invisible(){
        
        $tasks = Task::where('visible', 0)
                ->orderBy('created_at', 'desc')
                ->get();

        return view('home', ['tasks' => $tasks]);   
        
    }
}