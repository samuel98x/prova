<?php
  session_start();
?>
<?php

  $_SESSION["tasti"]= [
      [0, 0, 0],
      [0, 0, 0],
      [0, 0, 0]
  ];

  $_SESSION["player1"]= $_POST["nome1"];
  $_SESSION["player2"]= $_POST["nome2"];

  header("Location: /gioco.php");

?>
