<?php
   session_start();
?>
<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
      <?php
          $_SESSION["user"]="Greta Piai";
          $_SESSION["tasti"]=[];
      ?>
      <a href="fin.php">clicca</a><br/><br/>
      <table>
        <tr>
          <?php
              foreach ($_SESSION["tasti"] as $j => $righe) {
                foreach ($_SESSION["tasti"][$j] as $i => $button) {
                  if($button==0){
                    ?>
                    <input type="submit"/>
                    <?php
                  }
                  else {
                    // 1 per player1, 2 per player2
                    if ($button==1) {
                      
                    }
                    if ($button==2) {
                      //stampa simbolo p2
                    }
                  }
                }
              }
          ?>
          <!--<td><input type="submit" value="Gioca!" name="gioca"/></td>
          <td><input type="submit" value="Gioca!" name="gioca"/></td>
          <td><input type="submit" value="Gioca!" name="gioca"/></td>
        </tr>
        <tr>
          <td><input type="submit" value="Gioca!" name="gioca"/></td>
          <td><input type="submit" value="Gioca!" name="gioca"/></td>
          <td><input type="submit" value="Gioca!" name="gioca"/></td>
        </tr>
        <tr>
          <td><input type="submit" value="Gioca!" name="gioca"/></td>
          <td><input type="submit" value="Gioca!" name="gioca"/></td>
          <td><input type="submit" value="Gioca!" name="gioca"/></td>
        </tr>
      </table>
  </body>
</html>
