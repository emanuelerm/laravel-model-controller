<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class Guest extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        // dd($movies);
        return view('index', compact('movies'));
    }

    public function show($id)
    {
        $movie = Movie::find($id);
        return view('show', compact('movie'));
    }
}
