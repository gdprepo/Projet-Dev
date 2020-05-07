@extends('layouts.app')

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="{{route('category.list')}}">Retour</a>
  <div class="top-right links">
    <a href="{{ url('/home') }}">Home</a>
  </div>
</nav>

@section('content')

<div class="container add">

    <form method="post" action="{{route('category.create')}}">
    @csrf
        <div class="form-group">
            <label>Titre </label>
            <input class="form-control" type="text" name="title" id="title" placeholder="Entrer un titre">
        </div>

        <div class="form-group">
            <label>Image</label>
            <input class="form-control" type="text" name="image" id="image" placeholder="Entrer un titre">
        </div>

        <button class="form-control" type="submit" class="btn btn-primary">Enregistrer</button>

    </form>
</div>

@endsection