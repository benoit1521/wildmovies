@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ajout d'un nouveau film</div>
                <div class="card-body">

                    <form action="{{route('add')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Titre</label>
                            <div class="col-md-6">

                                <input type="text" name="title" class="form-control ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Réalisateur</label>
                            <div class="col-md-6">

                                <input type="text" name="director" class="form-control ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Année de sortie</label>
                            <div class="col-md-6">
                                <input type="text" name="release_date" class="form-control ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Catégorie</label>
                            <div class="col-md-6">
                                <input type="text" name="category" class="form-control ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Note imdb</label>
                            <div class="col-md-6">
                                <input type="text" name="rating" class="form-control ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Affiche</label>
                            <div class="col-md-6">
                                <input type="text" name="poster" class="form-control ">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-primary ">
                                    Ajouter ce film à Wildmovies
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection