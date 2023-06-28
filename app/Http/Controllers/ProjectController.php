<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use redirect;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index',compact(["projects"]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projects = Project::create($request->all());

        return redirect()->route('projects.index')
        ->with("mensaje", 'Proyecto creado correctamente')
        ->with("tipo", 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        $pays = $project->pays;
        return view('projects.show',compact(['project','pays']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.edit',compact(['project']));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $project->fill($request->all());
        $project->save();

        return redirect()->route('projects.index')
        ->with("mensaje", 'Proyecto editad correctamente')
        ->with("tipo", 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $pays = $project->pays;
        if(count($pays)>0){
            return redirect()->route('projects.index')
            ->with("mensaje", 'El proyecto contiene pagos que se deben eliminar')
            ->with("tipo", 'danger');
        }else{
            $project->delete();
            return redirect()->route('projects.index')
            ->with("mensaje", 'Proyecto eliminado correctamente')
            ->with("tipo", 'success');
        }

    }

    public function delete($id)
    {
        $project = Project::findOrFail($id);
        $pays = $project->pays;
        if(count($pays)>0){
            return redirect()->route('projects.index')
            ->with("mensaje", 'El proyecto contiene pagos que se deben eliminar')
            ->with("tipo", 'danger');
        }
        return view('projects.delete',compact(["project"]));
    }
}
