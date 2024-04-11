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

           
           <div class="col-12 ms-5 mt-5 Negro">

            <a class="tonos" href=""><h2 class="tonos">Nokia Original</h2></a>
            <audio controls>
                <source src="/nokiaOriginal.mp3" type="audio/mpeg">
            </audio>

            <a class="tonos" href=""><h2 class="tonos">Nokia Classic</h2></a>
            <audio controls>
                <source src="/nokiaClassic2.mp3" type="audio/mpeg">
            </audio>

            <a class="tonos" href=""><h2 class="tonos">Ring</h2></a>
            <audio controls>
                <source src="/nokia.mp3" type="audio/mpeg">
            </audio>

            <a class="tonos" href=""><h2 class="tonos">Tick</h2></a>
            <audio controls>
                <source src="/tick.mp3" type="audio/mpeg">
            </audio>

            <a class="tonos" href=""><h2 class="tonos">Mosquito</h2></a>
            <audio controls>
                <source src="/Mosquito.mp3" type="audio/mpeg">
            </audio>

            <a class="tonos" href=""><h2 class="tonos">Mary</h2></a>
            <audio controls>
                <source src="/Mary.mp3" type="audio/mpeg">
            </audio>

            <a class="tonos" href=""><h2 class="tonos">Robot</h2></a>
            <audio controls>
                <source src="/robot.mp3" type="audio/mpeg">
            </audio>

            <a class="tonos" href=""><h2 class="tonos">Jumping</h2></a>
            <audio controls>
                <source src="/Jumping.mp3" type="audio/mpeg">
            </audio>

            <a class="tonos" href=""><h2 class="tonos">Mozart 40</h2></a>
            <audio controls>
                <source src="/mozart40.mp3" type="audio/mpeg">
            </audio>

            <a class="tonos" href=""><h2 class="tonos">Elise</h2></a>
            <audio controls>
                <source src="/elise.mp3" type="audio/mpeg">
            </audio>

            <a class="tonos" href=""><h2 class="tonos">Orient</h2></a>
            <audio controls>
                <source src="/Orient.mp3" type="audio/mpeg">
            </audio>
            
            
            
            </div>
           
           

           <x-footer/>
    </body>
</html>