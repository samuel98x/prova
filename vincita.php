<?php
//se ritorna 1, si ha una vincita
function vincita($_SESSION["tasti"]){
//vincita verticale
if($_SESSION["tasti"][1]==$_SESSION["tasti"][2] && $_SESSION["tasti"][1]==$_SESSION["tasti"][3] && $_SESSION["tasti"][3]==$_SESSION["tasti"][2]){
		return 1;
	}
if($_SESSION["tasti"][4]==$_SESSION["tasti"][5] && $_SESSION["tasti"][5]==$_SESSION["tasti"][6] && $_SESSION["tasti"][4]==$_SESSION["tasti"][6]){
		return 1;
	}
if($_SESSION["tasti"][7]==$_SESSION["tasti"][8] && $_SESSION["tasti"][8]==$_SESSION["tasti"][9] && $_SESSION["tasti"][7]==$_SESSION["tasti"][8]){
		return 1;
	}
//vincita orrizzontale
if($_SESSION["tasti"][1]==$_SESSION["tasti"][4] && $_SESSION["tasti"][4]==$_SESSION["tasti"][7] && $_SESSION["tasti"][1]==$_SESSION["tasti"][7]){
		return 1;
	}
if($_SESSION["tasti"][2]==$_SESSION["tasti"][5] && $_SESSION["tasti"][5]==$_SESSION["tasti"][8] && $_SESSION["tasti"][2]==$_SESSION["tasti"][8]){
		return 1;
	}
if($_SESSION["tasti"][3]==$_SESSION["tasti"][6] && $_SESSION["tasti"][6]==$_SESSION["tasti"][9] && $_SESSION["tasti"][3]==$_SESSION["tasti"][9]){
		return 1;
	}
//vincita obliqua
if($_SESSION["tasti"][1]==$_SESSION["tasti"][5] && $_SESSION["tasti"][5]==$_SESSION["tasti"][9] && $_SESSION["tasti"][1]==$_SESSION["tasti"][9]){
		return 1;
	}
if($_SESSION["tasti"][3]==$_SESSION["tasti"][5] && $_SESSION["tasti"][5]==$_SESSION["tasti"][7] && $_SESSION["tasti"][3]==$_SESSION["tasti"][7]){
		return 1;
	}
}

?>
