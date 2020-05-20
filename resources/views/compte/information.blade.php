@extends('layouts.app')

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="{{route('product.list')}}">Retour</a>
  <div class="top-right links">
    <a href="{{ url('/home') }}">Home</a>
  </div>
</nav>

@section('content')

<div class="container">

    <form method="post" action="{{route('compte.check', $user->id)}}">
    @csrf
        <div class="form-group">
            <div class="form-group">
              <label>Pseudo </label>
              <input class="form-control" type="text" name="name" id="name" placeholder="{{$user->name}}">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input class="form-control" type="text" name="email" id="email" placeholder="{{$user->email}}">
            </div>
            <div class="form-group">
                <label>Image : </label>
                <img src="{{$user->image}}" style="width: 5%; margin-bottom: 10px"></img>
                <input class="form-control" type="text" name="image" id="image" placeholder="{{$user->image}}">
            </div>
            <div class="form-group">
                <label>Mot de passe</label>
                <input class="form-control" type="text" name="password" id="password" placeholder="Entrer nouveau mot de passe">
            </div>


        <button class="form-control" type="submit" class="btn btn-primary">Enregistrer</button>

    </form>



</div>


@endsection