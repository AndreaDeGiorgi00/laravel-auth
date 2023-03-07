@extends('layouts.app')
@vite(['resources/js/app.js'])
@section('content')
    <div class="container mt-5 ">
        <h1>{{$project->name_project}}</h1>
        <h3>{{$project->description}}</h3>
    </div>
@endsection