<?php

namespace App\Http\Controllers\Admin;
use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_projects = Project::all();
        return view('admin.projects.index',compact('all_projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        if(array_key_exist('image' , $data)){
            $img_url = Storage::put('project_images', $data['image']) ;
            $data['image']= $img_url;

        }
        $project = new Project;
        $project->name_project = $data['titolo'];
        $project->description= $data['descrizione'];
        $project->link_git = $data['link_git_hub'];
        $project->save();

        return to_route('admin.projects.show', $project->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::find($id);
        return view('admin.projects.edit' , compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)

    {
        $data = $request->all();
        @dd($data);
        $project = Project::find($id);
        $project->name_project = $data['titolo'];
        $project->description= $data['descrizione'];
        $project->link_git = $data['link_git_hub'];
        $project->save();
        return to_route('admin.projects.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);
        $project -> delete();
        

        return to_route('admin.projects.index');
    }
}
