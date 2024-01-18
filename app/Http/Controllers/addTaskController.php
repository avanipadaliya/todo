<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class addTaskController extends Controller
{
    public function store(Request $request){
    
        $user=Auth::user();
        $userId=$user->id;
        // dd($userId);

        $request->validate(
            ['taskname'=>['required','string','max:255'],
            'description'=>['required','string'],
            ]
        );

        $task=[];
        $task['user_id']=$userId;
        $task['taskname']=$request->taskname;
        $task['description']=$request->description;

        
        Task::create($task);

        notify()->success('Task has Created!');

        return redirect(RouteServiceProvider::HOME);
    }
    
}
