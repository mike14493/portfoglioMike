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

           
            <div class="col-10 col-md-4 ms-5 mt-1 mt-md-5 Negro">
            <h2>Progetti</h2>
            <h3 class="mt-2 mt-md-5 mb-3">Rapid</h3> 
            <p class="quienSoy">Rapid è un modello di e-commerce nel quale possiamo cercare gli articoli già pubblicati da altri utenti. Nel caso in cui vogliamo pubblicare un articolo, possiamo creare un account a cui accedere con la rispettiva password. Successivamente, all'interno della sezione dedicata, possiamo inserire l'articolo, la descrizione, la categoria e le foto. Nel caso in cui non vogliamo essere utenti registrati sul sito, possiamo uscire dal nostro account. Il sito web è stato costruito con Laravel utilizzando HTML, CSS e JavaScript per la parte visuale e PHP per la parte di backend. Potete accedere al sito seguendo il seguente link:</p>
            <a href="https://rapid.mikedev.it/" class="progettiLinks">Rapid.it</a>
            <h3 class="mt-5 mt-md-5 mb-3">VanessaZara.it</h3>
            <p class="quienSoy">VanessasZara.it è un blog realizzato su WordPress su richiesta della Psicologa Clinica Vanessa Zara. Per il blog è stato utilizzato il tema OceanWP e si è lavorato con il plugin Elementor per la personalizzazione delle pagine. Per implementare il multilingua è stato utilizzato Polylang e per la sicurezza del sito è stato implementato Wordfence. Attualmente si sta lavorando all'implementazione di MailChimp per le attività di marketing. potete accedere al sito seguendo il seguente link:</p>
            <a href="https://vanessazara.mikedev.it/" class="progettiLinks">Vanessazara.it</a>
            </div>
           
           

           <x-footer/>
    </body>
</html>