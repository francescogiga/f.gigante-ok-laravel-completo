<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieEditRequest;
use App\Http\Requests\MovieRequest;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;


class MovieController extends Controller implements HasMiddleware
{
   public static function middleware(): array
    {
        return [
            // Applica 'auth' a tutto tranne 'index'
            new Middleware('auth', except: ['index']),
            
           
        ];
    }
    
    
    public function index()
     {
        $movies = Movie::all();
        return view('movie.index',['movies' => $movies]);
     }

      public function create()
      {
        $genres = Genre::all();
       return view('movie.create', compact('genres')); 
      }
       

public function store(MovieRequest $request)
{
    $movie = Movie::create([
        'title' => $request->title,
        'director' => $request->director,
        'year' => $request->year,
        'plot' => $request->plot,
        'img' =>$request->file('img')->store('images','public'),
        'user_id'=>Auth::user()->id

    ]);

    $movie->genres()->attach($request->genres);

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
    if($movie->user_id == Auth::user()->id){
     return view('movie.edit', compact('movie'));   
    }else{
        return redirect()->route('homepage')->with('errorMessage', 'non puoi vedere questa pagina');
    }
    
}

public function update(MovieEditRequest $request, Movie $movie)
{
    if($movie->user_id == Auth::user()->id){ 
    $movie->update([
        $movie->title = $request->title,
        $movie->director = $request->director,
        $movie->year = $request->year,
        $movie->plot = $request->plot,

    ]);
    if($request->img){
        $request->validate(['img' => 'image']);
        $movie->update([
            $movie->img = $request->file('img')->store('public/image')
        ]);
    }
return redirect()->route('homepage')->with('successMessage', 'Hai correttamente modificato il film');
}else{
   return redirect()->route('homepage')->with('errorMessage', 'non puoi vedere questa pagina');
}

}

public function destroy(Movie $movie)
{ 
    if($movie->user_id == Auth::user()->id){
       $movie->delete();
    return redirect()->route('homepage')->with('successMessage','Hai correttamente eliminato il film');  
    } else {
      return redirect()->route('homepage')->with('errorMessage', 'non puoi vedere questa pagina'); 
    }
       
}

}
