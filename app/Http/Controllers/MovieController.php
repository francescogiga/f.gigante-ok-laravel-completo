<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public   $movies =[
        ['id'=>'1', 'title'=>'e.t..', 'director'=>'S.Spielberg' , 'img'=>'/media/poster/e.t..jpeg', 'genres'=>'sci-fi' ],
        ['id'=>'2', 'title'=>'Flashdance', 'director'=>'Thomas Hedley' , 'img'=>'/media/poster/flashdance.jpeg', 'genres'=>'musical-sentimentale' ],
        ['id'=>'3', 'title'=>'Matrix', 'director'=>'Lana Wachowski,' , 'img'=>'/media/poster/matrix.jpeg', 'genres'=>'fanta-azione' ],
        ['id'=>'4', 'title'=>'Quovado', 'director'=>'G.Nunziante' , 'img'=>'/media/poster/quovado.jpeg', 'genres'=>'commedia' ],
        ['id'=>'5', 'title'=>'Titanic', 'director'=>'James Cameron' , 'img'=>'/media/poster/titanic.jpeg', 'genres'=>'drammatico' ],
    ];

    
    public function movieList(){
         return view('movie.movies',['movies'=>$this->movies]); 
}
public function movieDetail($id){
    foreach($this->movies as $movie){
        if($id == $movie['id']){
            return view('movie.movie-detail',['movie'=>$movie]);
        }
    }
}
}
