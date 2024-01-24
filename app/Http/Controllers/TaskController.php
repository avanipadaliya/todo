<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user=Auth::user();
        $userId=$user->id;

        $tasks = Task::all()->where('user_id','=',$userId);
        return view('mytask')->with('mytasks', $tasks);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task=Task::find($id);
        return view('edittask')->with('task',$task);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=Auth::user();
        $task=Task::find($id);
        $task->update($request->all());
        notify()->success('Task Updated!');
        return redirect(RouteServiceProvider::HOME);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task=Task::find($id);
        $task->delete();
        notify()->success('Task Deleted');
        return redirect(RouteServiceProvider::HOME);


    }
}
