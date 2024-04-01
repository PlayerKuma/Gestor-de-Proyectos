<?php

namespace App\Http\Controllers;

use App\Models\task;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $tasks = Task::latest()->paginate(3);
        return view('index', ['tasks'=>$tasks]);
    }
    public function uIndex(): View
    {
        $tasks = Task::latest()->paginate(3);
        return view('uTasks', ['tasks'=>$tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $projects = Project::all();
        return view('create',['projects'=>$projects]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'project' => 'required',

        ]);

       Task::create($request->all());
       return redirect()->route('tasks.index')->with('success','Nueva tarea creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task) :View
    {
        return view('edit',['task'=>$task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, task $task): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);
        $task->update($request->all());
        return redirect()->route('tasks.index')->with('success','La tarea ha sido actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(task $task): RedirectResponse
    {
      $task->delete();
      return redirect()->route('tasks.index')->with('success','La tarea ha sido eliminada exitosamente');
    }
}
