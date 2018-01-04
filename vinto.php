<?php
function vincita() {
	$pareggio = true;
	  if($_SESSION['choice'] == 'tris'){
			$wincheck = [
				'diagonale1' => [],
				'diagonale2' => [],
				'colonna0' => [],
				'colonna1' => [],
				'colonna2' => [],
			];
		}
		if($_SESSION['choice'] == 'quatris'){
			$wincheck = [
				'diagonale1' => [],
				'diagonale2' => [],
				'colonna0' => [],
				'colonna1' => [],
				'colonna2' => [],
				'colonna3' => []
			];
		}
	//vincitori nelle righe
	foreach ($_SESSION["tasti"] as $i => $riga) {
		if (!in_array("0", $riga)) { //se in quella riga sono premuti tutti i tasti
			if (!in_array("1", $riga)) { //se non c'è traccia del player 1
				return 2;
			} else {
				if (!in_array("2", $riga)) { //se non c'è traccia del player 2
					return 1;
				}
			}
		}
		foreach ($riga as $j => $bottone) {
			if ($i == $j) {
				array_push($wincheck['diagonale1'], $bottone);
			}
			if ($j == 2-$i) {
				array_push($wincheck['diagonale2'], $bottone);
			}
			array_push($wincheck['colonna'.$j], $bottone);
			if ($bottone == 0) {
				$pareggio = false;
			}
		}
	}

	foreach ($wincheck as $key => $value) {
		if (!in_array("0", $value)) { //se sono stati premuti tutti i tasti
			if (!in_array("1", $value)) { //non c'è l'1
				return 2;
			} else {
				if (!in_array("2", $value)) {
					return 1;
				}
			}
		}
	}
	if ($pareggio) {
		return 3;
	} else {
		return 0;
	}

}
?>
