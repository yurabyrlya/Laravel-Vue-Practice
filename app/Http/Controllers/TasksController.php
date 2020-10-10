<?php

namespace App\Http\Controllers;
use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    //
    public function index(){
        $tasks = Tasks::incomplete()->simplePaginate(5);
        return view('tasks.index', compact('tasks'));
    }

    public function showJson(){

        $data = [
            'all'=> Tasks::all()->count(),
            'incomplete' =>  Tasks::incomplete()->count(),
            'complete'=>Tasks::completed()->count(),
        ];
        return response($data);
    }

    public function show($id){
        $task = Tasks::find($id);
        return view('tasks.show', compact('task'));
    }

    public function complete($id){
        Tasks::completeTask($id);
        return redirect()->route('tasks');
    }

}
