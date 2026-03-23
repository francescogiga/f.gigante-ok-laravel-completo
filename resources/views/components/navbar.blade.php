<nav class="navbar navbar-expand-lg bg-dark border-bottom" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('homepage') }}"><i class="bi bi-camera-reels-fill"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="{{ route('aboutUs') }}">Chi siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contacts') }}">Contattaci!</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" 
          aria-expanded="false">
            I nostri servizi
          </a>
          <ul class="dropdown-menu">
            
            <li><a href="{{ route('movie.create')}}" class="dropdown-item">Inserisci il tuo film</a></li>
            <li><a  href="{{route('movie.index')}}" class="dropdown-item">Tutti i film</a></li>
            <li><a  href="{{route('genre.create')}}" class="dropdown-item">Aggiungi una categoria</a></li>
            <li><a  href="{{route('genre.index')}}" class="dropdown-item">Tutte le categorie</a></li>
            
        </ul>
      </li>
       <li class="nav-item dropdown">
        @auth
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao,{{ Auth::user()->name}}
          </a>
            <ul class="dropdown-menu"> 
              <li>
                <a href="{{ route('user.profile') }}">Profilo personale</a>
              </li>
            <li>
              <a href="{{ route('logout') }}"
              onclick="event.preventDefault(); document.getElementById('form-logout').submit();"
              class="dropdown-item">Logout</a>
              <form action="{{ route('logout') }}" method="POST" style="display: none;"
              id="form-logout">
                  @csrf</form>
            </li>
        </ul>
        @else
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" 
           aria-expanded="false">
            Ciao, ospite
          </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
            
          </ul>
   @endauth
</li>
           
      
    </div>
  </div>
</nav>