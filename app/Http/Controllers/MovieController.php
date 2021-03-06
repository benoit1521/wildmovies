<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App;
use App\Movies;

class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(request $request)
    {
        $request->user()->authorizeRoles('admin');


        return view('add');
    }

    public function add(Request $request)
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

        return view('confirmation', [
            'movie' => $movie,
        ]);
    }
    public function index()
    {
        $userId = Auth::user() -> id;

        $movies = Movies::where('user_id', $userId)
            ->get();
        
        return view('moviesList', [
            'movies' => $movies,
        ]);
    }
}