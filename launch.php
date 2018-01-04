<?php
  session_start();
?>
<?php
  if($_POST['scelta'] == 'tris'){
    $_SESSION['tasti'] = [
      [0, 0, 0],
      [0, 0, 0],
      [0, 0, 0]
    ];
  }
  if($_POST['scelta'] == 'quatris'){
    $_SESSION['tasti'] = [
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0],
        [0, 0, 0, 0]
    ];
  }

  $_SESSION['player1'] = $_POST["nome1"];
  $_SESSION['player2'] = $_POST["nome2"];
  $_SESSION['turni'] = 1;
  $_SESSION['choice'] = $_POST['scelta'];
  
  header("Location: ./gioco.php");

  $_SESSION["vincitore"] = 0;
?>
