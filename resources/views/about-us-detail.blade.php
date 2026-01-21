<x-layout>


     
<header>
    <div class="container-fluid header">
        <div class="row h-100 justify-content-center align-items-center">
        <div class="col-md-6 col-12">
            <h3 class="text-white text-center text-color" >{{ $user['name'] }} {{$user['surname']}}</h3>
            <h4 class="text-white text-center text-color"> {{ $user['role'] }}</h4>
        </div>
    </div>
</header>



</x-layout>