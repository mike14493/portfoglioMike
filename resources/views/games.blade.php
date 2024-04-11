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

           <div class="col-12 ms-5 mt-5 Negro Games">

            <a class="tonos" href="snake"><h2 class="Vibora">Snake</h2></a>

           </div>
            
           
           

           <x-footer/>
    </body>
</html>