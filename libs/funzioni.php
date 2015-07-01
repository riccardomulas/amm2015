<?php	
	/*define("DB_SERVER", "localhost"); 
	define("DB_USER", "mulasRiccardo"); 
	define("DB_PASS", "pesce4352"); 
	define("DB_NAME", "amm15_mulasRiccardo");

*/
		define("DB_SERVER", "localhost"); 
	define("DB_USER", "root"); 
	define("DB_PASS", ""); 
	define("DB_NAME", "negozio");


	function aggiungiProdotto($nome, $costo, $quantita){
		$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
		$res 	= $mysqli->query
		(
			"
				INSERT INTO prodotti (nome_prodotto, costo, quantita)
					VALUES ('$nome', $costo, $quantita);
			"
		);
		
		if($res)
			return true;
		else
			return false;
	}

	function recuperaProdotti(){
		$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
		$res 	= $mysqli->query("SELECT * FROM prodotti;");

		return $res;
	}

	function recuperaOrdini(){
		$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
		$res 	= $mysqli->query("SELECT * FROM prodotti JOIN ordini ON prodotti.id = ordini.id_prodotto ORDER BY ordini.id");
		return $res;
	}
	if (isset($_POST['cancellaID'])) 
        echo cancellaProdotto($_POST['cancellaID']);

	function cancellaProdotto($id){
		$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
		$ordiniCancella 	= $mysqli->query("DELETE FROM ordini WHERE id_prodotto=$id");
		$prodottoCancella 	= $mysqli->query("DELETE FROM prodotti WHERE id=$id");

		if($res)
			return true;
		else
			return false;
	}

	function compraProdotto($id){
		$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

		$mysqli->autocommit(false);

		$add 	= $mysqli->query("INSERT INTO ordini (id_prodotto) VALUES ($id)");
		$q 		= $mysqli->query("SELECT * FROM prodotti WHERE id=$id");

		if(!$add){
			$mysqli->rollback();
			return false;
		}

		$prodottoSelezionato = mysqli_fetch_assoc($q);

		if($prodottoSelezionato['quantita'] == 0){
			$mysqli->rollback();
			return false;
		}
		$nuovaQuantita = $prodottoSelezionato['quantita'] - 1;

		$u 	= $mysqli->query("UPDATE prodotti SET quantita = $nuovaQuantita WHERE id=$id");

		if($u){
			$mysqli->commit();
			$mysqli->autocommit(true);
			return true;
		}

	}