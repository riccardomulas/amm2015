<?php 
    include('inc/top_site.php'); 

    if($_SESSION['logged'] == false)
        header("Location: login.php");

    $arrayProdotti = recuperaProdotti();

    $arrayOrdini = recuperaOrdini();
    ?>

    <body>
        <div class="container">
            <?php include('inc/header.php');?>

            <?php include('inc/lateral_menu.php');?>
            <div class="main-content">
                <h1>Prodotti</h1>

                <table class="tableContent" id="tabella">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome prodotto</th>
                            <th>Prezzo</th>
                            <th>Quantità</th>
                            <th>Operazioni</th>
                        </tr>
                    </thead>
                    <tbody>


                    <?php foreach($arrayProdotti as $prodotto): ?>
                        <tr id="riga<?= $prodotto['id']; ?>">
                            <td> <?= $prodotto['id']; ?> </td>
                            <td> <?= $prodotto['nome_prodotto']; ?> </td>
                            <td> <?= $prodotto['costo']; ?></td>
                            <td> <?= $prodotto['quantita']; ?> </td>
                            <td>
                            <?if($_SESSION['livello'] == "admin"): ?>
                                <input type="button" id="<?= $prodotto['id']?>" value="Cancella" / >
                            <? else: ?>
                                <a href="compra.php?id=<?= $prodotto['id']?>"> Compra subito </a>
                            <? endif; ?>
                            </td>
                        </tr>
                    <? endforeach;?>
                    </tbody>
                </table>

                <?if($_SESSION['livello'] == "admin"): ?>
                    <h1>Ordini</h1>
                    <table class="tableContent" id="tabella">
                        <thead>
                            <tr>
                                <th>ID ordine</th>
                                <th>Nome prodotto</th>
                            </tr>
                        </thead>
                        <tbody>


                        <?php foreach($arrayOrdini as $ordine): ?>
                            <tr>
                                <td> <?= $ordine['id']; ?> </td>
                                <td> <?= $ordine['nome_prodotto']; ?> </td>
                            </tr>
                        <? endforeach;?>
                        </tbody>
                    </table>
                <? endif; ?>

                
            </div>

            <?php include('inc/footer.php');?>
            <script type="text/javascript">
                $(document).ready
                (
                    function()
                    {
                        $('input[type=button]' ).click(function() {
                           var bid = this.id; // button ID 

                                $.ajax(
                                    {
                                        type: 'POST',
                                        url:  'libs/funzioni.php',
                                        data: {
                                            "cancellaID": bid
                                            },
                                        
                                        success: function(data) { 
                                            console.debug('Click ok'); 
                                            $('#riga' + bid).remove(); 
                                        },
                                        //error:  function(data) { console.debug('Errore nella chiamata updateFrasi');} 
                                    }
                                );
                            }
                        );
                    }
                );
            </script>
        </div>
    </body>
</html>