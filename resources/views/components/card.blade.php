<div class="card mb-3" style="width: 18rem;">
  <img src="{{ Storage::url($movie->img) }}" class="card-img-top cardImg img-fluid"
  alt="poster di '{{ $movie->title }}'">
 <div class="card-body">
    <h5 class="card-title">Titolo:  {{ $movie->title }}</h5>
    <h5 class="card-title muted">Regista: {{ $movie->director }}</h5>
     <p class="card-text">Anno: {{ $movie->year }}</p>
     <p>Creato da: {{ $movie->user->name }}</p>
      <div class="d-flex">
        @forelse ($movie->genres as $genre )
        @if(!$loop->last)
        <a href="{{route('genre.show', compact('genre'))}}" class="card-text small text-capitalize mx-1">{{ $genre->name }}, </a>
        @else
        <a href="{{route('genre.show', compact('genre'))}}" class="card-text small text-capitalize mx-1">{{ $genre->name }} </a>
        @endif

        @empty
        @endforelse
      </div>
    <a href="{{ route('movie.show', compact('movie')) }}" class="btn btn-primary">leggi 
        di più</a>
       @auth 
       @if ($movie->user_id == Auth::id())
    <a href="{{ route('movie.edit', compact('movie')) }}" class="btn btn-primary">Modifica il film</a>
@endif
    @endauth 

    </div>
  </div>