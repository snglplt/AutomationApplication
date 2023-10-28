<?php 
require 'baglan.php';
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hilkom Yazılım</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="images/hilkom.jpeg" type="image/x-icon" />
</head>
<body>
	<header>
		<h1>Hilkom Yazılım Data Otomasyonu</h1>
	</header>
	<div class="tableOuter">
		<h1> Giriş Yap</h1>
		<form action="sistem.php" method="post">
			<div class="user">
				<input type="text" name="user" placeholder="Kullanıcı Adı">
			</div>
			<div class="pass">
				<input type="password" name="password" placeholder="Şifre">
			</div>
			<button href="index.php" type="submit" class="sub" id="giris" name="giris">Giriş Yap	</button>
			<br>
		</form>
		
	</div>
</body>
</html>