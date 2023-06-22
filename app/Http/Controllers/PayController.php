<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pay;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $pays = Pay::all();/**/
        return view('pays.index',compact(['pays']));
    }

    public function listarPorProject($project_id) {
        $pays = Pay::where('project_id',$project_id);
        return $pays;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::all();/**/
        
        return view('Pays.create',compact(['projects']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pay = Pay::create($request->all());
        return redirect()->route('pays.index')
        ->with("mensaje", 'Pago creado correctamente')
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Auth::project();/**/
        $pays = $project->pays;/**/
        $pay = Pay::findOrFail($id);
        return view('pays.edit',compact(['pay','projects']));
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
        $pay = Pay::findOrFail($id);
        $pay->fill($request->all());
        $pay->save();
        return redirect()->route('pays.index')
        ->with("mensaje", 'Pago editado correctamente')
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
        $pay = Pay::findOrFail($id);
        $pay->delete();
        return redirect()->route('pays.index')
        ->with("mensaje", 'Pago eliminado correctamente')
        ->with("tipo", 'success');
    }

    public function delete($id)
    {
        $pay = Pay::findOrFail($id);
        return view('pays.delete', compact(['pay']));
    }
}
