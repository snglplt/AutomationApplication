<?php
 
include "baglan.php";
 include "sistem.php";
session_start();
if (!isset($_SESSION["kullaniciAdi"])) {
    echo "Giriş yapınız...";
    header('Location:index.php');
    # code...
}
$sql ="SELECT * FROM data WHERE id = ?";
$sorgu = $db->prepare($sql);
$sorgu->execute([
    $_GET['id']
]);
$satir = $sorgu->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hilkom Yazılım Data Otomasyonu</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="images/hilkom.jpeg" type="image/x-icon" />
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    
  <header>
        <div class="container">
            
        <h1>Hilkom Yazılım Data Otomasyonu</h1>
    
          
        </div>
    
    </header>
      <div class="container" style="margin-left:-25%;margin-top: 2% ">
                <div >
                    <div class="btn-group">
                        <a href="home2.php" class="btn btn-outline-primary" >Tüm Datalar</a>
                        <a href="kaydet2.php" class="btn btn-outline-success">Data Ekle</a>
                    </div>
                </div>
            </div>
    
    <main>    
    <div class="container">
        <div class="row">
            <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                    Firma Adı:    <?=$satir["firmaAdi"]?><br>
                    Yetkili Kişi: <?=$satir["yetkili"]?>
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">Dahili Numara:<?=$satir["dahili"]?><br>Cep: ( <?=$satir["cep"]?>)</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Web Sitesi:<?=$satir["web"]?></h6>
                     <p class="card-text">Adres: <?=$satir["adres"]?></p>
                    <p class="card-text">Aranma Tarihi: <?=$satir["tarih"]?></p>
                    <p class="card-text">Aranma Durumu: <?=$satir["arama"]?></p>

                    <p class="card-text">Detay: <?=$satir["detay"]?></p>
 
                </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    <footer></footer>
</body>
</html>
 