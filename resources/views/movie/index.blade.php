<x-layout>
    <div class="container-fluid movies">
        <div class="row justify-content-center">
            <h2 class="text-white text-color text-center display-4">Tutti i film:</h2>
            @foreach($movies as $movie)
            <div class="col-12 col-md-4">
                <x-card :movie="$movie" />
            </div>
            

            @endforeach
        </div>
    </div>
</x-layout>