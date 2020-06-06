<?php
	session_start();
	// mengecek  keberadaan cookie nama
	if (isset($_COOKIE['nama'])){
		$status = true;
	} else {
		$status = false;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>FUNNY MATH !!</title>
	<link rel ="stylesheet" href="style.css">
	<style type="text/css">
		h2{
			color: yellow;
		}
	</style>
</head>
<body>
	<div id="body" style="width:500px; height:100px;">
	<div id="head"><h2>WELCOME TO FUNNY MATH !!</h2>
	</div>
	<table class="tabel" border="1" width=500 align=center>
		<tr align=center>
		</br>
			<td align="center">
				<form method="post" action="soal.php">
				</br>
				<?php
					if ($status == false){
				?>
					Nama : <input type="text" name="nama"></br></br>
					Email : <input type="Email" name="email"></br></br>
					<input type="submit" name="submitnama" value="LOGIN">
				</br>
				</br>
				<?php		
					} else {
					
					echo "<p>Hallo ".$_COOKIE['nama']."!, Selamat Datang kembali di Permainan FUNNY MATH !!!</p>";

					echo "<button type=submit name=submitgame>Start Game !!</button><br><br>";
					echo "Bukan anda? <button type=submit name=loginulang>Klik Disini</button>";
					}
					
				?>
			</form>
				<?php
					// nilai awal live = 5 dan score awal = 0
					$_SESSION['lives'] = 5;
					$_SESSION['score'] = 0;
				?>
			</td>
		</tr>
	</table>
	</div>
</body>
</html>

<h1></h1>
	