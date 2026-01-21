<x-layout>
   <header>
    <div class="container-fluid header">
        @if(session()->has('emailSent'))
        <div class="alert alert-success">
            {{session('emailSent')}}
        </div>
        @endif
        @if(session()->has('emailError'))
        <div class="alert alert-danger">
            {{session('emailError')}}
        </div>
        @endif
        <div class="row h-100">
            <div class="col-12 d-flex justify-content-center align-items-center">
            <h1 class= "text-light display-1 fw-bold text-color">MOVIEMANIA</h1>
            </div>
        </div>
    </div>
</header>


</x-layout>