<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $projects = Project::latest()->paginate(3);
        return view('Pindex', ['projects'=>$projects]);
    }

    public function uIndex(): View
    {
        $projects = Project::latest()->paginate(3);
        return view('uProjects', ['projects'=>$projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {

        return view('Pcreate');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',


        ]);

       Project::create($request->all());
       return redirect()->route('projects.index')->with('success','Nueva tarea creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(project $project) :View
    {
        return view('Pedit',['project'=>$project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, project $project): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',

        ]);
        $project->update($request->all());
        return redirect()->route('projects.index')->with('success','El proyecto ha sido actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(project $project): RedirectResponse
    {
      $project->delete();
      return redirect()->route('projects.index')->with('success','El proyecto ha sido eliminado exitosamente');
    }
}
