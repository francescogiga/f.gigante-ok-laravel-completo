<div class="card mb-3" style="width: 18rem;">
  @if(!$movie->img)
  <img src="https://picsum.photos/200/300
  "class="card-img-top cardImg img-fluid"
  alt="poster di {{ $title }}">
  @else
 <img src="{{Storage::url($movie->img)}}" class="card-img-top cardImg" alt="poster di  {{ $title}}">
   @endif
 <div class="card-body">
    <h5 class="card-title" alt="poster di {{ $title}}"></h5>
    <h5 class="card-title muted">{{$movie["director"]}}</h5>
     <p class="card-text">{{$movie["genres"]}}</p>
    <a href="{{ route('movie.show', compact('movie')) }}" class="btn btn-primary">leggi 
        di più</a>
    </div>
  </div>