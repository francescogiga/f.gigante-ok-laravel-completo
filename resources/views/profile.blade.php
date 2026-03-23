<x-layout>
    <div class="container-fluid movies">
        <div class="row justify-content-center">
            <h2 class="text-white text-color text-center">Profilo di {{Auth::user()->name}}</h2>
          @forelse (Auth::user()->movies as $movie)
          <div class="col-12 col-md-4 mb-3 d-flex justify-content-center">
            <x-card :movie="$movie" />

          </div>
          @empty
        <div class="col-12 text-center">
          <h3 class="text-white text-center text-color">Non hai ancora pubblicato nessun film</h3>
          <a href="{{ route('movie.create') }}">Pubblica il tuo primo film</a>
        </div>
          @endforelse
        </div>
       </div>
</x-layout>