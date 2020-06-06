<?php
	session_start();
	// merandom 2 bilangan untuk soal
	$x = rand(0, 20);
	$y = rand(0, 20);

	if (isset($_POST['submitnama'])){
	 	setcookie('nama', $_POST['nama']);
	 	setcookie('email', $_POST['email']);
	 	header("Location: soal.php");
	}

	if (isset($_POST['loginulang'])){
		setcookie('nama', '');
		setcookie('email', '');
		header("Location: index.php");
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>FUNNY MATH !!</title>
	<link rel ="stylesheet" href="style.css">
</head>
<body>
	<div id="body" style="width:100%; height:100px;">
	<div id="head"><h2>FUNNY MATH !!</h2></div>
	<table class="tabel" width=750 align=center>
		<tr align=center>
		</br>
			<td>
				<?php

					echo "<p>Hello ".$_COOKIE['nama']."!, tetap Semangat ya.. You can do the Best!</p>";

					echo "<p>Lives: ".$_SESSION['lives']." | Score: ".$_SESSION['score']."</p>";
				?>

	
				<form method="post" action="result.php">
					<?php
						
						echo "$x + $y = ";
					?>
					<input type="hidden" name="x" value="<?php echo $x;?>">
					<input type="hidden" name="y" value="<?php echo $y;?>">
					<input type="text" name="jawab">
					<input type="submit" name="submit" value="Jawab !">
				</br>
				</br>
				</form>
			</td>
		</tr>
	</table>
</div>

</body>
</html>
