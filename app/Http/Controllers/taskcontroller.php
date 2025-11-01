<?php

namespace App\Http\Controllers;

use App\Models\todolist;
use Illuminate\Http\Request;

class taskcontroller extends Controller
{
    public function createtask() {
        return view(view:('createTask'));
    }

    public function submittask(Request $request) {
        // dd($request->all());
        todolist::create([
            'taskTitle' => $request->taskTitle,
            'taskDescription' => $request->taskDescription,
            'taskStatus' => false
        ]);
        return view('taskview');
    }
}
