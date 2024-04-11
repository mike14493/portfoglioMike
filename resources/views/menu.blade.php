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

           <div class="min-vh-100 optionMenu">
                <div id="carouselExample" class="carousel slide min-vh-100">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="d-block text-center "><h1 class="TituloOptioMenu">GIOCHI</h1></div>
                            <a href="games"><img src="/juegos.jpg" class="d-block w-100" alt="..."></a>
                        </div>
                        <div class="carousel-item">
                            <div class="d-block text-center "><h1 class="TituloOptioMenu">TONI</h1></div>
                            <a href="tones"><img src="/Tonos.jpg" class="d-block w-100" alt="..."></a>
                        </div>
                        <div class="carousel-item">
                            <div class="d-block text-center "><h1 class="TituloOptioMenu">CHI SONO</h1></div>
                            <a href="aboutMe"><img src="/quienSoy.jpg" class="d-block w-100" alt="..."></a>
                        </div>
                        <div class="carousel-item">
                            <div class="d-block text-center "><h1 class="TituloOptioMenu">PROGETTI</h1></div>
                            <a href="projects"><img src="/Proyectos.jpg" class="d-block w-100" alt="..."></a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="prevNext" aria-hidden="true"> < </span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="prevNext" aria-hidden="true"> > </span>
                    <span class="visually-hidden">Next</span>
                    </button>
                    <h1 class="Select text-center "><a class="Select" href="menu" id="selectLink">Select</a></h1>
                </div>
                
                    
                
           </div>
            
           
           

           <x-footer/>
    </body>
</html>