<x-layout>
    <div class="container-fluid movies">
        <div class="row justify-content-center pt-5">
            <h2 class="text-white display-4 text-color text-center py-5">
                Esplora per genere cinematografico
            </h2>
            @foreach ($genres as $genre )
            <div class="col-12 col-md-3 d-flex justify-content-center">
                <a href="{{ route('genre.show', compact('genre')) }}" class="h-100 w-100">
                    <div class="box mx-auto d-flex justify-content-center align-item-center">
                        <h3 class="text-white text-color text-capitalize">{{ $genre->name}}</h3>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>