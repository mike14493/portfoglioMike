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

           
            <div class=" col-10 col-md-4 ms-5 mt-1 mt-md-5 Negro">
                <h2 >Chi sono</h2>
                <p class="quienSoy" >Sono uno sviluppatore Full Stack e ingegnere petrolifero nato in Bolivia con una propensione al front end. Ho acquisito conoscenze ingegneristiche conseguendo la laurea in ingegneria petrolifera a Santa Cruz - Bolivia con un punteggio del 92. Dopo aver svolto uno stage come ingegnere junior nell'area della logistica presso Yacimientos Petrolíferos Fiscales Bolivianos (YPFB) in Bolivia, ho acquisito conoscenze avanzate nello sviluppo web grazie al bootcamp di codifica presso Aulab, approfondendo HTML, CSS, JavaScript, PHP lavorando sul framework di LARAVEL. Le competenze relazionali e la risoluzione dei problemi sono alcune delle competenze acquisite grazie alla mia esperienza precedente. Ho anche lavorato e realizzato alcuni progetti in WORDPRESS. Mi definisco creativo, artistico e questa volta vi presento questo portfolio ispirato ai telefoni Nokia degli anni '90 per i più nostalgici. Senza ulteriori indugi e con il desiderio di ampliare le mie conoscenze nel campo dell'IT, vi auguro una buona giornata e spero che apprezziate il mio portfolio.</p>
                <img src="/firma.jpg" alt="">
                <img src="/Foto linkedin.jpg" alt="" class="d-block rounded-circle ">
            </div>
            
           
           

           <x-footer/>
    </body>
</html>