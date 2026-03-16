<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;


class MovieController extends Controller implements HasMiddleware
{
    public function __construct()
    {
        // $this->middleware('auth')->except('index');
    }  
     public static function middleware(): array
    {
        return [
            'auth',
            new Middleware('log', only: ['index']),
           
        ];
    } 
    
    
    public function index()
     {
        $movies = Movie::all();
        return view('movie.index',['movie' => $movies]);
     }

      public function create()
      {
       return view('movie.create'); 
      }
       

public function store(MovieRequest $request)
{
    $movie = Movie::create([
        'title' => $request->title,
        'director' => $request->director,
        'year' => $request->year,
        'plot' => $request->plot,
        'img' =>$request->file('img')->store('public/images')

    ]);

    return redirect()->route('homepage')->with('successMessage','Hai correttamente inserito il tuo film preferito');
}


    public function movieList()
    {

        $movies = Movie::all();
         return view('movie.movies',['movies' => $movies]); 
    }


public function show(Movie $movie)
{
    return view('movie.show', compact('movie'));
}

public function edit(Movie $movie)
{
    return view('movie.edit', compact('movie'));
}


}
