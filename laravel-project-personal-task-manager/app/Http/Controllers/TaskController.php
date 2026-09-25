<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
{
    $tasks = Task::orderBy('due_date', 'asc')->get();

    $action = $request->query('action', 'view');

    return view('tasks.index', compact('tasks', 'action'));
}
    public function create()
{
    return view('tasks.create');
}

public function store(Request $request)
{
    $request->validate([
        'task_name' => 'required|max:255',
        'description' => 'nullable',
        'status' => 'required|in:Pending,Completed',
        'due_date' => 'nullable|date',
    ]);

    Task::create([
        'task_name' => $request->task_name,
        'description' => $request->description,
        'status' => $request->status,
        'due_date' => $request->due_date,
    ]);

    return redirect()->route('tasks.index', ['action' => 'view'])
        ->with('success', 'Task added successfully!');
}

public function edit(Task $task)
{
    return view('tasks.edit', compact('task'));
}

public function update(Request $request, Task $task)
{
    $request->validate([
        'task_name' => 'required|max:255',
        'description' => 'nullable',
        'status' => 'required|in:Pending,Completed',
        'due_date' => 'nullable|date',
    ]);

    $task->update([
        'task_name' => $request->task_name,
        'description' => $request->description,
        'status' => $request->status,
        'due_date' => $request->due_date,
    ]);

    return redirect()->route('tasks.index', ['action' => 'edit'])
        ->with('success', 'Task updated successfully!');
}

public function destroy(Task $task)
{
    $task->delete();

    return redirect()->route('tasks.index', ['action' => 'delete'])
        ->with('success', 'Task deleted successfully!');
}

public function updateStatus(Task $task)
{
    if ($task->status === 'Pending') {
        $task->status = 'Completed';
    } else {
        $task->status = 'Pending';
    }

    $task->save();

    return redirect()->route('tasks.index', ['action' => 'status'])
        ->with('success', 'Task status updated!');
}
}