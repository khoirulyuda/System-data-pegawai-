<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MOSSI ACCESS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="p-3 mb-2 bg-primary text-white">
         <br>
        <br>
        <br>
        <h1 class="text-center mt-5 mb-5">MOSSI ACCESS</h1>

        {{-- <div class="container-fluid">
            <div class="background">
                 <img src="{{URL::asset('/images/background.png')}}"  class="d-block w-100 h-300px m-0" alt="...">
            </div> --}}
            {{-- <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel"> --}}
            {{-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div> --}}
            {{-- <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{URL::asset('/images/background.png')}}" style="height: 300px;" class="d-block w-100 height" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3 style="color:white ;">ACCESS LOGIN</h3>
                </div>
            </div>--}}

        <div class="container">
            
                <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
                <div class="col">
                    <a href="/loginsales" class="card rounded-5">
                    <img src="{{URL::asset('/images/sales.png')}}" style="height: 200px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold" style="text-align:center;">SALES</h5>
                        <p class="card-text "></p>
                    </div>
                    </a>
                </div>
                <div class="col">
                    <a href="/loginproduction" class="card rounded-5">
                    <img src="{{URL::asset('/images/production.png')}}" style="height: 200px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold" style="text-align:center; ">PRODUCTION</h5>
                        <p class="card-text"></p>
                    </div>
                    </a>
                </div>
                <div class="col">
                    <a href="/loginexim" class="card rounded-5">
                    <img src="{{URL::asset('/images/exim.png')}}" style="height: 200px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold" style="text-align:center;">EXIM</h5>
                        <p class="card-text"></p>
                    </div>
                    </a>
                </div>
                <div class="col">
                    <a href="/loginoutgoing" class="card rounded-5">
                    <img src="{{URL::asset('/images/outgoing.png')}}" style="height: 200px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold" style="text-align:center;">OUT GOING</h5>
                        <p class="card-text"></p>
                    </div>
                    </a>
                </div>

        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        
    </div>
    
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>