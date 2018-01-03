<?php
   session_start();
?>
<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
      <!--</*?php
          $_SESSION["user"]="Greta Piai";
          $_SESSION["tasti"]=[];
      ?*/>
      <a href="fin.php">clicca</a><br/><br/>-->
    <!--  <table>
        <tr>-->
          <?php
            if (isset($_SESSION["turni"]) && $_SESSION["turni"] == 1) {
              $_SESSION["turni"] = 2;
            }
            else{
              $_SESSION["turni"] = 1;
            }
            
            //var_dump($_POST); per verificare contenuto dell'array $_POST in modo da aggiornare in modo appropriato l'array con i valori dei tasti
            if (!empty($_POST)) { //è la prima volta nella pagina
              //non devo leggere il bottone premuto
              //se inizio, altrimenti
              //bisogna aggiornare l'array se[$_POST["riga"]][$_POST["bottone"]] = $_SESSION["turni"];ssion['tasti']
              if ($_SESSION['tasti'][$_POST['riga']][$_POST['bottone']] != 0) {
                //l'utente sta facendo il furbo: ha cambiato l'html cercando di mettere il suo segno al posto del segno dell'avversario
                echo "<h1>NON SI BARA(TELLA) BRUTTO BASTARDO!!!!!!!</h1>";
              } else {
                $_SESSION['tasti'][$_POST['riga']][$_POST['bottone']] = $_SESSION["turni"];
              }
            //  $_SESSION["tasti"][$_POST["riga"]][$_POST["bottone"]] = $_SESSION["turni"];
            }
            //per segato: controlla vincite qui!!!!!!!!!
            $n=1;
              foreach ($_SESSION["tasti"] as $j => $righe) {
                foreach ($_SESSION["tasti"][$j] as $i => $button) {
                  if ($button == 0) {
                    ?>
                    <form style="display:inline;" name="form<?=$n?>" action="./gioco.php" method="POST">
                      <input type="submit" value="premi"/>
                      <input type="hidden" name="riga" value="<?=$j?>"/>
              				<input type="hidden" name="bottone" value="<?=$i?>"/>
                    </form>
                    <?php
                  }
                  else {
                    // 1 per player1, 2 per player2
                    if ($button==1) {
                      //stampa simbolo player1
                      ?>
                      <img src="./cerchio.jpg" height="20" width="20"/>
                      <?php
                    }
                    if ($button == 2) {
                      //stampa simbolo player2
                      ?>
                      <img src="./croce.jpg" height="20" width="20"/>
                      <?php
                    }
                  }
                $n++;
                }
                ?>
                <br/>
                <?php

              }
          ?>
  </body>
</html>
