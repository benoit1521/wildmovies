@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">

        @foreach ($movies as $movie)
        <div class="col-md-3 mt-2 mr-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}} </h5>
                    <p class="card-text">Réal. : {{$movie->director}}</p>
                    <p class="card-text">Année : {{$movie->release_date}}</p>
                    <p class="card-text">Catégorie : {{$movie->category}}</p>
                    <p class="card-text">Note : {{$movie->rating}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection