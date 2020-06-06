<?php
	ob_start();
	session_start();
	if (isset($_POST['submit'])){
		if ($_POST['x'] + $_POST['y'] == $_POST['jawab']){
			$_SESSION['score'] += 10;
			$status = true;
		} else {
			$_SESSION['score'] -= 2;
			$_SESSION['lives'] -= 1;
			$status = false;
		}
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
					if (isset($status)){
						
						if ($status == true){
							echo "<p>Hello ".$_COOKIE['nama']."!, selamat jawaban Anda Benar !!!</p>";
							echo "<p>Lives: ".$_SESSION['lives']." | Score: ".$_SESSION['score']."</p>";
						} else {
							echo "<p>Hello ".$_COOKIE['nama'].", sayang jawaban anda salah... tetap semangat ya !!!</p>";
							echo "<p>Lives: ".$_SESSION['lives']." | Score: ".$_SESSION['score']."</p>";
						}
					}
				?>
				<?php
					// jika lives sudah 0, maka game over
					if ($_SESSION['lives'] == 0){
						header("Location: gameover.php");
					} else {
							echo "<a href=soal.php>Soal Selanjutnya</a>";
					}
				?>
			</td>
		</tr>
	</table>
</div>
</body>
</html>