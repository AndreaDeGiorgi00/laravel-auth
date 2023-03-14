@extends('layouts.app')
@vite(['resources/js/app.js'])
@section('content')
    <div class="container mt-5 d-flex justify-content-between align-items-center show">
        <div>
            <h2>{{$project->name_project}}</h2>
            <p>{{$project->description}}</p>
            <a href="{{route('admin.projects.edit', $project)}}"  class="btn btn-success">modifica</a>
        </div>
        <img src="{{ asset('storage/' . $project->image) }}" class="preview"> 
    </div>

@endsection