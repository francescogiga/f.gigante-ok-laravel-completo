<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
//  public   $movies =[
       // ['id'=>'1', 'title'=>'e.t..', 'director'=>'S.Spielberg' , 'img'=>'/media/poster/e.t..jpeg', 'genres'=>'sci-fi' ],
       // ['id'=>'2', 'title'=>'Flashdance', 'director'=>'Thomas Hedley' , 'img'=>'/media/poster/flashdance.jpeg', 'genres'=>'musical-sentimentale' ],
       // ['id'=>'3', 'title'=>'Matrix', 'director'=>'Lana Wachowski,' , 'img'=>'/media/poster/matrix.jpeg', 'genres'=>'fanta-azione' ],
       // ['id'=>'4', 'title'=>'Quovado', 'director'=>'G.Nunziante' , 'img'=>'/media/poster/quovado.jpeg', 'genres'=>'commedia' ],
       // ['id'=>'5', 'title'=>'Titanic', 'director'=>'James Cameron' , 'img'=>'/media/poster/titanic.jpeg', 'genres'=>'drammatico' ],
   // ];

    
    public function movieList(){

        $movies = Movie::all();
         return view('movie.movies',['movies' => $movies]); 
}

//public function movieDetail($id){
    //foreach($this->movies as $movie){
        //if($id == $movie['id']){
            //return view('movie.movie-detail',['movie'=>$movie]);
      // }
    //}
//}

public function create(){
    return view('movie.create');
}

public function store(Request $request)
{
    $movie = Movie::create([
        'title' => $request->title,
        'director' => $request->director,
        'year' => $request -> year,
        'plot' => $request -> plot

    ]);

    return redirect()->route('homepage')->with('successMessage','Hai correttamente inserito il tuo film');
}

}
