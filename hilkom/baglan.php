<?php
try{
	$db=new PDO("mysql:host=localhost; dbname=otomasyon; charset=utf8",'root', 'Html5css36');
	//echo "veritabanı başarılı";
}
catch(Exception $e){
	echo $e->getMessage();


}
?>