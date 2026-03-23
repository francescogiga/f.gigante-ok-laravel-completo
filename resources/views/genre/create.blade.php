<x-layout>
    <div class="contasiner-fluid movies text-white text-color text-center">
    <div class="row">
      <h2 class="display-4">Inserisci una nuova categoria</h2>
    </div>

        <div class="row h-100 justify-content-center align-items-center py-5">
            <div class="col-12 col-md-8">
              @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
              <form method="post" action="{{route('genre.submit')}}">
                @csrf
               <div class="mb-3">
               <label for="genre" class="form-label">Inserisci la categoria</label>
                    <input type="text" name="name" class="form-control" id="genre" 
                    aria-describedby="emailHelp" value="{{ old('name') }}">
                     
               </div>
               
             
             <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</x-layout>