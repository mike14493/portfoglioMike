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

           <div class="min-vh-100 slot">
                {{$slot}}
                <div class="text-center ">
                    <h1 class="Menu"><a class="Menu" href="menu">Menu</a></h1>
                </div>
           </div>
           

           <x-footer/>
    </body>
</html>