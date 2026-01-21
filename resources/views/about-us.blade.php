<x-layout>


       
<header>
    <div class="container-fluid header">
        <div class="row h-100 justify-content-around align-items-center">
            <div class="col-6">
                <h2 class="text-white text-color text-center">Chi siamo</h2>
                <p class="text-white text-color">Lorem ipsum dolor 
                  sit amet, consectetur adipiscing elit, 
                  sed do eiusmod tempor incididunt ut labore 
                  et dolore magna aliqua. Ut enim ad 
                  minim veniam, quis nostrud
                   exercitation ullamco laboris 
                   nisi ut aliquip ex ea commodo consequat. 
                   Duis aute irure dolor in reprehenderit 
                   in voluptate velit esse cillum dolore eu fugiat
                   nulla pariatur. Excepteur sint occaecat cupidatat 
                   non proident, sunt in culpa qui officia deserunt
                   mollit anim id est laborum.</p>
                </div>
                <div class="col-6">
                    <img src="/media/team.jpeg" alt="foto del team" class="shadow rounded">
                </div>
            
        </div>
    </div>
</header>

<section>
  <div class="container userHeight">
    <div class="row">
        @foreach ($users as $user)
          <div class="col-12 col-md-4">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">{{$user['name'] . " " .$user['surname']}}</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{$user['role']}}</h6>
                <a href="{{route('aboutUsDetail', ['name'=>$user['name']] )}}" class="card-link">Leggi di più</a>
              </div>
            </div>
         </div>
       @endforeach

    </div> 
  </div>
</section>





</x-layout>