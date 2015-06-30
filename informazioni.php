<?php include('inc/top_site.php'); ?>

    <body>
        <div class="container">
            <?php include('inc/header.php');?>

            <?php include('inc/lateral_menu.php');?>
            <div class="main-content">
                <h1>Informazioni</h1>
                <form method="post">
                <table class="table">
                    <tr>
                        <td>
                            <label for="username">Username</label>
                        </td>
                        <td>
                            <input name="username" id="username" type="text" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">Password</label>
                        </td>
                        <td>
                            <input name="password" id="password" type="password"/> 
                        </td>
                    </tr>
                    
                    </table>
                    <input type="submit" value="Entra!"/>
                </form>
                    <hr />

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
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>10€</td>
                                <td><button id="delete">Elimina</button></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>10€</td>
                                <td><button id="delete">Elimina</button></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>10€</td>
                                <td><button id="delete">Elimina</button></td>
                            </tr>
                        </tbody>
                    </table>


                
            </div>

            <?php include('inc/footer.php');?>

        </div>
    </body>
</html>