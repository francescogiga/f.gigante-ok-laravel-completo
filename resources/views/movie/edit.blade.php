<x-layout>
    <div class="container-fluid movies">
        <div class="row justify-content-center">
            @if ($errors->any())
                <div class="alert alert-danger col-6 text-center">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <div class="col-12 col-md-8 text-white text-color">
                <h2 class="display-4 text-center">Modifica il tuo film preferito</h2>
            </div>
            
            <form method="POST" action="{{route('movie.update', $movie)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{$movie->title}}">
                </div>
                
                <div class="mb-3">
                    <label for="director" class="form-label">Regista</label>
                    <input type="text" name="director" class="form-control" id="director" value="{{$movie->director}}">
                </div>
                
                <div class="mb-3">
                    <label for="year" class="form-label">Anno di uscita</label>
                    <input type="text" name="year" class="form-control" id="year" value="{{$movie->year}}">
                </div>
                
                <div class="mb-3">
                    <label for="img" class="form-label">Inserisci una locandina</label>
                    <input type="file" name="img" class="form-control" id="img">
                    @if($movie->img)
                        <small class="text-muted">Locandina attuale: {{ basename($movie->img) }}</small>
                    @endif
                </div>
                
                <div class="mb-3">
                    <label for="plot" class="form-label">Trama</label>
                    <textarea name="plot" id="plot" cols="30" rows="10" class="form-control">{{$movie->plot}}</textarea>
                </div>
                
                <!-- SEZIONE GENERI (MANY-TO-MANY) -->
                <div class="mb-3">
                    <label class="form-label">Generi</label>
                    <div class="row">
                        @php
                            $movieGenres = $movie->genres->pluck('id')->toArray();
                        @endphp
                        
                        @foreach($genres as $genre)
                            <div class="col-3">
                                <div class="form-check">
                                    <input 
                                        type="checkbox" 
                                        name="genres[]" 
                                        value="{{ $genre->id }}"
                                        class="form-check-input"
                                        id="genre_{{ $genre->id }}"
                                        {{ in_array($genre->id, $movieGenres) ? 'checked' : '' }}
                                    >
                                    <label class="form-check-label" for="genre_{{ $genre->id }}">
                                        {{ $genre->name }}
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Modifica il tuo film</button>
            </form>
        </div>
    </div>
</x-layout>