<x-layout>


        

    <div class="container-fluid movies">
        <div class="row h-100 justify-content-around align-items-center ">

            <div class="col-12 text-center mb-4">
                <h2 class="text-white display-5">Contattaci</h2>
            </div>

            <div class="col-md-3 text-center box d-flex flex-column justify-content-center align-items-center text-white">
                <div class="row"><div class="col-12">
                    <i class="bi bi-whatsapp fs-2 text-white"></i>
                </div></div>
                <div class="row"><div class="col-12">
                    <p class="text-white">Scrivici su WhatsApp</p>
                </div></div>
            
            
                
                
            </div>

            <div class="col-md-3 text-center box d-flex flex-column justify-content-center align-items-center text-white">
                <div class="row"><div class="col-12">
                    <i class="bi bi-instagram fs-2 text-white"></i>
                </div></div>
                <div class="row"><div class="col-12">
                    <p class="text-white">Seguici su Instagram</p>
                </div></div>
            
                
            </div>

            <div class="col-md-3 text-center box d-flex flex-column justify-content-center align-items-center text-white">
               <div class="row"><div class="col-12">
                    <i class="bi bi-facebook fs-2 text-white"></i>
                </div></div>
               <div class="row">  <div class="col-12">
                    <p class="text-white">Seguici su Facebook</p>
                </div></div>
            
            
              
            </div>

        </div>
    </div>

    <div class="row h-100 justify-content-center align-items-center">
        <h2 class="text-white display-4 text-center text-color">...o Scrivici una mail</h2>
        <div class="col-12 col-md-8">
            <form method="post" action="{{route('contactUs')}}">
                @csrf
                  <div class="mb-3">
    <label for="user" class="form-label">inserisci il tuo nome</label>
    <input type="text"  name="user"  class="form-control" id="user" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">inserisci la tua mail</label>
    <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Inserisci il tuo messaggio</label>
  <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

        </div>
    </div>





</x-layout>