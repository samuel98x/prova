
<!-- PAGINA SVILUPPATA DA GRETA PIAI-->
<?php
   session_start();
   include './vinto.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <link href="./style.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <?php
          if($_SESSION['turni'] == 1){
            echo "<h1>Tocca a " . $_SESSION['player1'] . "</h1>";
            if(empty($_POST))
              $_SESSION['turni'] = 2;
          }
          else {
            echo "<h1>Tocca a " . $_SESSION['player2'] . "</h1>";
            if(empty($_POST))
              $_SESSION['turni'] = 1;
          }
          ?>
    <div class = "tavola">
          <?php
            //var_dump($_POST); per verificare contenuto dell'array $_POST in modo da aggiornare in modo appropriato l'array con i valori dei tasti
            if (!empty($_POST)) { //è la prima volta nella pagina
              //non devo leggere il bottone premuto
              //se inizio, altrimenti
              //bisogna aggiornare l'array session['tasti']
              if (isset($_SESSION["turni"]) && $_SESSION["turni"] == 1) {
                $_SESSION["turni"] = 2;
              }
              else{
                $_SESSION["turni"] = 1;
              } //così se l'utente tenta di eseguire il refresh della pagina non riesce far cambiare il turno
              if ($_SESSION['tasti'][$_POST['riga']][$_POST['bottone']] != 0) {
                //l'utente sta facendo il furbo: ha cambiato l'html cercando di mettere il suo segno al posto del segno dell'avversario
                echo "<h1>NON SI BARA(TELLA), CATTIVONE!!!!!!!</h1>";
              } else {
                $_SESSION['tasti'][$_POST['riga']][$_POST['bottone']] = $_SESSION["turni"];
              }
            //  $_SESSION["tasti"][$_POST["riga"]][$_POST["bottone"]] = $_SESSION["turni"];
            }
            $win = vincita();
            if($win == 1){
              $_SESSION['vincitore'] = 1;
              echo "ha vinto1";
            }
            if($win == 2){
              $_SESSION['vincitore'] = 2;
              echo "ha vinto2";
              header("Location: ./index.html");
            }
            if($win == 3){
              //echo "pareggio";
              header("Location: ./index.html");
            }
            $n=1;
              foreach ($_SESSION["tasti"] as $j => $righe) {
                foreach ($_SESSION["tasti"][$j] as $i => $button) {
                  if ($button == 0) {
                    ?>
                    <form style="display:inline;" name="form<?=$n?>" action="./gioco.php" method="POST">
                      <input type="submit" value="premi"/>
                      <input type="hidden" name="riga" value="<?=$j?>"/> <!--hidden serve per passare un valore "nascosto" (in questo caso le coordinate della posizione del pulsante) quando si preme quel pulsante-->
              				<input type="hidden" name="bottone" value="<?=$i?>"/>
                    </form>
                    <?php
                  }
                  else {
                    // 1 per player1, 2 per player2
                    if ($button==1) {
                      //stampa simbolo player1
                      ?>
                      <img src="./cerchio.jpg" height="50" width="50"/>
                      <?php
                    }
                    if ($button == 2) {
                      //stampa simbolo player2
                      ?>
                      <img src="./croce.jpg" height="50" width="50"/>
                      <?php
                    }
                  }
                $n++; // $n è usata per dare nomi diversi ai vari form che corrisponderanno ai bottoni
                }
                ?>
                <br/>
                <?php

              }
          ?>
        </div>
  </body>
</html>
