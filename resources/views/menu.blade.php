<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>{{$title ?? 'PortfoglioMike'}}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Fonts -->
        
        

        <!-- Styles -->
        
    </head>
    <body>
           <x-nav/>

           
            <div id="carouselExample" class="carousel slide min-vh-100">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="..." class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
           
           

           <x-footer/>
    </body>
</html>