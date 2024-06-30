<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function toggleCompleted(Task $task)
    {
        $task->update([
            'completed' => !$task->completed,
        ]);

        return redirect()->route('tasks.index');
    }
    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'completed' => 'boolean'
        ]);

        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            //'completed' => false,
        ]);

        return redirect()->route('tasks.index');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            //'completed' => 'boolean',
        ]);
        
        $task->title = $request->title;
        $task->description = $request->description;
        //$task->completed = $request->has('completed');
        $task->save();
    
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully');
    
    }
    

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }

}



