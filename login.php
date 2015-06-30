<?php 
    include('inc/top_site.php'); 

    if(isset($_SESSION['logged']) && $_SESSION['logged'] == true)
        header("Location: index.php");

    $error = false;

    if(isset($_POST['login']))
    {
        $user = $_POST['email'];
        $pass = $_POST['password'];
        $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        
        if(trim($user) == '' || trim($pass) == ''){ 
            $error = true;
            $_SESSION['logged'] = false;
        }        
        $res    = $mysqli->query("select* from utenti where email='$user' AND password='$pass'" );
        if($res->num_rows == 1)
        {
            $array = mysqli_fetch_array($res);
            $_SESSION['email']   = $array['email'];
            $_SESSION['livello']      = $array['livello'];
            $_SESSION['logged']     = true;
            $mysqli->close();
            header("Location: index.php");
        }
        else
        {
            $error = true;
            $_SESSION['logged'] = false;
            
        }
        
        
    }
?>

    <body>
        <div class="container">
            <?php include('inc/header.php');?>

            <?php include('inc/lateral_menu.php');?>
            <div class="main-content">
                <h1>Login</h1>

                <?php if($error): ?>
                    <div class="errore"> Login errato, riprova </div>
                <? endif;?>

                <form method="post" action="login.php">
                    <table class="table">
                        <tr>
                            <td>
                                <label for="email">Email</label>
                            </td>
                            <td>
                                <input name="email" id="email" type="text" />
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
                    <input type="submit" value="Entra!" name="login"/>
                </form>
                
                <p>Dati d'accesso</p>
                <p>Amministratore -> email: amministratore@admin.it</p>
                <p>Utente -> email: utente@utente.it</p>
                <p>Password (per entrambi) : 123456789</p>
            </div>

            <?php include('inc/footer.php');?>

        </div>
    </body>
</html>