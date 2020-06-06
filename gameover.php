<?php
	ob_start();
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>FUNNY MATH !!</title>
	<link rel ="stylesheet" href="style.css">
	<style type="text/css">
		h1{
			color: maroon;
		}
	</style>
</head>
<body>
	<div id="body" style="width:100%; height:100px;">
	<div id="head"><h2>Game Over !!</h2></div>
	<table class="tabel" border="1" align=center>
		<tr align=center>
		</br>
			<td>
				<?php
					echo "<p>Hello ".$_COOKIE['nama'].", Sayang permainan sudah selesai. Semoga lain kali bisa lebih baik lagi :)</p>";
				?>
			
				<p><a href='index.php'>Ulangi Lagi</a></p>
				<?php
				// menyimpan score ke dalam cookie
				setcookie('score', $_SESSION['score']);

				// menambah data pemain ke database
				include 'koneksi.php';
				$query=mysqli_query($conn, "insert into score set nama='".$_COOKIE['nama']."', email='".$_COOKIE['email']."', score='".$_SESSION['score']."'");
				?>
				<br>
				<h1>HALL OF GAME</h1>
				<div class="score">
				<table width="500px" align="center" border="3">
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Score</th>
				</tr>
				<?php
					$result=mysqli_query($conn, "SELECT * FROM score ORDER BY score DESC");
					$no=1;
					foreach ($result as $row) {
					  	echo "<tr align=center>
					  	<td>" .$no. "</td>
					  	<td>" .$row['nama'] . "</td>
					  	<td>" .$row['score']. "</td>
					  	</tr>";
					  	$no++;
					  	if ($no>10){
					  		break;
					  	}
					}
				?>
				</div>
				</table>
			</td>
		</tr>
	</table>
</div>
</body>
</html>
	
	
