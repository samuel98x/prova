<style>
form, input {
	display: inline;
}
</style>
<?php 

	session_start();
	$_SESSION['tasti'] = [
		[0, 0, 0],
		[2, 0, 1],
		[0, 2, 0]
	];
	foreach ($_SESSION["tasti"] as $j => $righe) {
		foreach ($_SESSION["tasti"][$j] as $i => $button) {
			if (!$button) : ?>
			<form method="POST" action="/gioco.php">
				<input type="hidden" name="riga" value="<?=$j?>"/>
				<input type="hidden" name="bottone" value="<?=$i?>"/>
				<input type="submit"/>
			</form>
			<?php else: ?>
			<b><?=$button == 1 ? "O" : "X"?></b>
			<?php endif;
		}
	}
	
	?>