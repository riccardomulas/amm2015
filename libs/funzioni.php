<?php	
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