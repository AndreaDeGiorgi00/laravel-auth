@extends('layouts.app')
@vite(['resources/js/app.js'])
@section('content')
    <form action="{{route('admin.projects.store')}}"  method="POST">
        @csrf
        <div class="container mt-5 col-6 ">

            <div class="mb-3 col-6">
            <label for="Titolo" class="form-label"><h4>Titolo progetto</h4></label>
            <input type="text" class="form-control" id="titolo" name="titolo">
            </div>

            <div class="mb-4">
            <label for="linkGitHub" class="form-label"><h4>Link git hub</h4></label>
            <input type="text" class="form-control" id="linkGitHub" name="link_git_hub">
            </div>

            <div class="mb-4">
            <label for="descrizione" class="form-label"><h4>Descrizione</h4></label>
            <textarea class="form-control" id="descrizione" rows="3" name="descrizione"></textarea>
            <div class="text-center">

            <button type="submit" class="btn btn-success mt-5">salva</button>
            </div>
        </div>
    </form>
</div>
@endsection