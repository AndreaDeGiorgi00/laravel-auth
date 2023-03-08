@extends('layouts.app')
@vite(['resources/js/app.js'])
@section('content')




<div class="container mt-5">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome progetto</th>
      <th scope="col">link git hub</th>
      <th scope="col">Maggiori dettagli</th>
      <th scope="col">Modifica</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($all_projects as $project)
      
    <tr>
      <td>{{$project->name_project}}</td>
      <td><a href="{{$project->link_git}}">link</a></td>
      <td><a href="{{route('admin.projects.show', $project['id'])}}">maggiori info</a></td>
      <td>
      <form method="POST" action="{{route('admin.projects.destroy', $project['id'])}}">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger"> elimina</button>
      </form>
      </td>
    </tr>
  @endforeach

  </tbody>
</table>

</div>
@endsection

