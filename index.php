<?php 
    include('inc/top_site.php'); 

    if($_SESSION['logged'] == false)
        header("Location: login.php");

    $arrayProdotti = recuperaProdotti();
    ?>

    <body>
        <div class="container">
            <?php include('inc/header.php');?>

            <?php include('inc/lateral_menu.php');?>
            <div class="main-content">
                <h1>Home page</h1>


                <table class="tableContent">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome prodotto</th>
                            <th>Quantità</th>
                            <th>Prezzo</th>
                            <th>Operazioni</th>
                        </tr>
                    </thead>
                    <tbody>


                    <?php foreach($arrayProdotti as $prodotto): ?>
                        <tr>
                            <td> <?= $prodotto['id']; ?> </td>
                            <td> <?= $prodotto['nome_prodotto']; ?> </td>
                            <td> <?= $prodotto['costo']; ?></td>
                            <td> <?= $prodotto['quantita']; ?> </td>
                            <td>
                            <?if($_SESSION['livello'] == "admin"): ?>
                                <button id="delete">Elimina</button>
                            <? endif; ?>
                            </td>
                        </tr>
                    <? endforeach;?>
                    </tbody>
                </table>


                
            </div>

            <?php include('inc/footer.php');?>

        </div>
    </body>
</html>