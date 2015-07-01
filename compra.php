<?php 
    include('inc/top_site.php'); 

    if(!isset($_SESSION['logged']) && $_SESSION['logged'] == false)
        header("Location: index.php");

    $error = false;

    if(!isset($_GET['id']))
        header("Location: index.php");
    
    else
    {
        $risposta = compraProdotto($_GET['id']);
        
    }
        
?>

    <body>
        <div class="container">
            <?php include('inc/header.php');?>

            <?php include('inc/lateral_menu.php');?>
            <div class="main-content">
                <h1>Acquista prodotto</h1>

                <?php if($risposta == false): ?>
                    <div class="errore"> L'ordine non è andato a buon fine </div>
                <? else: ?>
                    <div class="successo"> Ordine salvato </div>
                <? endif;?>

            </div>

            <?php include('inc/footer.php');?>

        </div>
    </body>
</html>