<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class addTaskController extends Controller
{
    public function store(Request $request){
    
        $request->validate(
            ['taskname'=>['required','string','max:255'],
            'description'=>['required','string'],
            ]
        );

        $request=Task::create(
            ['taskname'=>$request->taskname,
            'description'=>$request->description
            ]
        );
        return redirect(RouteServiceProvider::HOME);
    }
    
}
