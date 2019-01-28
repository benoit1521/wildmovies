<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App;

class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return view('add');
    }

    public function add()
    {
        $userId = Auth::user() -> id;

        $movie = new App\Movies;
        $movie -> title = request('title');
        $movie -> director = request('director');
        $movie -> release_date = request('release_date');
        $movie -> category = request('category');
        $movie -> rating = request('rating');
        $movie -> poster = request('poster');
        $movie -> save();

        return view('confirmation');
    }

}