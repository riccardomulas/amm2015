<div class="lateral-menu">
    <h3>Sezioni del sito</h3>
    <ul class="menuPrincipale">


    	<? if(isset($_SESSION['logged']) && $_SESSION['logged'] == true): ?>
        <li> <a href="index.php"> Visualizza prodotti </a> </li>
        <? if($_SESSION['livello'] == "admin"): ?>
        	<li> <a href="aggiungiProdotto.php"> Aggiungi prodotto </a> </li>
        <? endif; ?>

        <li> <a href="informazioni.php"> Informazioni </a> </li>
        <li> <a href="logout.php"> Logout </a> </li>
    <? else: ?>
    <li> <a href="login.php"> Login </a> </li>
	<? endif; ?>
    </ul>
</div>