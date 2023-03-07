@extends('layouts.app')
@vite(['resources/js/app.js'])
@section('content')




<div class="container mt-5">
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome progetto</th>
      <th scope="col">link git hub</th>
      <th scope="col">maggiori dettagli</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($all_projects as $project)
      
    <tr>
      <th scope="row">{{$project->id}}</th>
      <td>{{$project->name_project}}</td>
      <td><a href="{{$project->link_git}}">link</a></td>
      <td><a href="{{route('admin.projects.show', $project['id'])}}">maggiori info</a></td>
    </tr>
  @endforeach

  </tbody>
</table>

</div>
@endsection

