<?php
 
if(isset($_POST["kaydet"]))
{
    include "baglan.php";
    $sql = "INSERT INTO `data` (`id`, `firmaAdi`, `yetkili`, `dahili`, `cep`, `web`, `arama`, `detay`, `tarih`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?);";
    $dizi =[
        $_POST["firmaAdi"],
        $_POST["yetkili"],
        $_POST["dahili"],
        $_POST["cep"],
        $_POST["web"],
        $_POST["arama"],
        $_POST["detay"],
        $_POST["dtarih"]
    ];
 
    $sth = $baglan->prepare($sql);
   $sonuc = $sth->execute($dizi);
   header("Location:index.php");
}
 
?>