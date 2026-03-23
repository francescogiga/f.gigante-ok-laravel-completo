<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function create()
    {
       return view('genre.create');
    }

    public function index(){
        $genres = Genre::all()->sortBy('name');
        return view('genre.index', compact('genres'));
    }

    public function show(Genre $genre){
        
    }
     
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        Genre::create([
            'name'=> $request->name
        ]);
        return redirect()->route('homepage')->with('successMessage', 'Hai creato la tua categoria');

    }

}
