@extends('layouts.app')
@section('content')

@foreach ($movies as $movie)
<p class="card-text">{{ $movie->title }}</p>
@endforeach



@endsection