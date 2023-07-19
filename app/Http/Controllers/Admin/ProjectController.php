<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;
use App\Http\Requests\StoreNomeModelloRequest;
use App\Http\Requests\UpdateType;

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
        $types = Type::all();

        return view('admin.projects.index', compact('projects','types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        $projects = Project::all();

        return view('admin.projects.create', compact('projects','types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNomeModelloRequest $request)
    {
        $data = $request->validated();

        $newProject = new Project();
        $newProject->fill($data);
        $newProject->save();

        return to_route("admin.projects.show", $newProject->id);
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
    $type = $project->type; 

    return view('admin.projects.show', compact('project', 'type'));
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
        $types = Type::all();
        return view('admin.projects.edit', compact('project', 'types'));
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
        $validatedData = $request->validate([
            'title' => 'required',
            'image'=> 'required',
            'content'=>'required',
            'type_id' => 'nullable|exists:types,id',
        ]);
    
        $project = Project::findOrFail($id);
        $project->name = $validatedData['name'];
  
        if ($request->has('type_id')) {
            $project->type_id = $validatedData['type_id'];
        }
        $project->save();
    
     
    
        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
    
        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }
}
