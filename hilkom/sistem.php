<?php
ob_start();
session_start();
require 'baglan.php';

if(isset($_POST['giris'])){
	$kullaniciAdi=$_POST['user'];
	$sifre=$_POST['password'];
	
		$kullanici_sor=$db->prepare("select * from kullanici where kullaniciAdi=? and sifre=?");
		$kullanici_sor->execute([$kullaniciAdi,$sifre]);
		$say=$kullanici_sor->rowCount();

		if($say==1) {
			$_SESSION['kullaniciAdi']=$kullaniciAdi;
			header('Refresh:1;home.php');
 			# code...
		}
       		
		else
			echo "Kullanıcı adı ya da şifre hatalı";
	}



?>