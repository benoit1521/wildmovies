@extends('layouts.app')

@section('content')

<div class="text-center">
    <h1>Vous avez ajouté un nouveau film !</h1>
    <div class="card" style="width: 18rem;">

        <img src={{$movie->poster}} class="card-img-top" alt="photoWilder">

        <div class="card-body">
            <h5 class="card-title">{{$movie->title}} </h5>
            <p class="card-text">Réal. : {{$movie->director}}</p>
            <p class="card-text">Année : {{$movie->release_date}}</p>
            <p class="card-text">Catégorie : {{$movie->category}}</p>
            <p class="card-text">Note : {{$movie->rating}}</p>
        </div>

    </div>

    <a href="{{route('add')}}">Ajouter un nouveau film</a>
</div>

@endsection