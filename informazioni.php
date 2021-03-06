<?php include('inc/top_site.php'); ?>

    <body>
        <div class="container">
            <?php include('inc/header.php');?>

            <?php include('inc/lateral_menu.php');?>
            <div class="main-content">
                <h1>Informazioni</h1>  
                <p>Il progetto simula la gestione di un negozio di prodotti sardi. Permette l'aggiunta, la cancellazione dei prodotti e 
                   la visualizzazione degli ordini da parte dell'amministratore, la visualizzazione dei prodotti e il loro acquisto da parte
                   dell'utente. L'unica azione permessa nella home page è il login; in base alle credenziali inserite saranno possibili
                   le diverse operazioni. 
                </p>   
                <p>Requisiti rispettati:
                    <ul>
                        <li>Utilizzo di HTML e CSS</li>
                        <li>Utilizzo di PHP e MySQL</li>
                        <li>Due ruoli (amministratore e utente)</li>    
                        <li>Una transizione (acquisto prodotti) implementata in funzioni.php (funzione compraProdotto)</li>  
                        <li>Una funzionalità AJAX (cancellazioni prodotti) implementata in index.php</li>             
                    </ul>
                </p>

                
            </div>

            <?php include('inc/footer.php');?>

        </div>
    </body>
</html>