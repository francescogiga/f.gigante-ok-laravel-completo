<x-layout>
    <div class="container-fluid movies">
        <div class="row justify-content-center">
        <div class="col-12 col-md-6 text-white text-color text-center">
            <h2>{{ $movie->title }}</h2>
            <3>Regista: {{$movie->director}}</3>
            <p>{{ $movie->plot }}</p>

        </div>
        <div class="col-12 col-md-6">
            <img src="{{ Storage::url($movie->img) }}" alt="Poster di '{{$movie->title}}'">
        </div>
      </div>
    </div>
</x-layout>