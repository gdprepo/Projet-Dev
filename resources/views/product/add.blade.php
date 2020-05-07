@extends('layouts.app')

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="{{route('product.list')}}">Retour</a>
  <div class="top-right links">
    <a href="{{ url('/home') }}">Home</a>
  </div>
</nav>

@section('content')

<div class="container">

    <form method="post" action="{{route('product.create')}}">
    @csrf
        <div class="form-group">
            <div class="form-group">
              <label>Titre </label>
              <input class="form-control" type="text" name="title" id="title" placeholder="Entrer un titre">
            </div>
            <div class="form-group">
              <label>Description</label>
              <input class="form-control" type="text" name="description" id="description" placeholder="Entrer une description">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input class="form-control" type="text" name="image" id="image" placeholder="Entrer un titre">
            </div>

            <div class="form-group">
              <label>Categories</label>
              <select name="categories[]" multiple="multiple" class="form-control" name="categories" id="categories">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
              </select>
            </div>

        <button class="form-control" type="submit" class="btn btn-primary">Enregistrer</button>

    </form>
</div>

@endsection