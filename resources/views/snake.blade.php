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
    <body >
           <x-nav/>
           <!-- Contenedor principal del juego -->
    <div class="game-container">
        <!-- Contenedor del tablero y los elementos del juego -->
        <div class="game-content">
            <!-- Tablero del juego -->
            <div id="board"></div>
            <!-- Contenedor para los elementos del juego -->
            <div class="game-info-container">
                <!-- Botón de inicio -->
                <button id="start">Start</button>
                <!-- Score -->
                <span id="scoreBoard">Score: </span>
            </div>
            <!-- Mensaje de "Game Over" -->
            <div id="gameOver">Game Over</div>
            <div id="controls">
                <div class="controls-container">
                    <button id="up" class="controls">↑</button>
                    <div class="horizontal-controls">
                        <button id="left" class="controls">←</button>
                        <button id="right" class="controls">→</button>
                    </div>
                    <button id="down" class="controls">↓</button>
                </div>
            </div>
        </div>
    </div>
    
            
            
           
           

           <x-footer/>
    </body>
</html>