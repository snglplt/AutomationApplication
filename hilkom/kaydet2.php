<?php
include "sistem.php";
session_start();
if (!isset($_SESSION["kullaniciAdi"])) {
    echo "Giriş yapınız...";
    header('Location:index.php');
    # code...
}
if(isset($_POST["kaydet"]))
{
    ob_start();
session_start();
include "baglan.php";
    $sql = "INSERT INTO `data` (`id`, `firmaAdi`, `yetkili`, `dahili`, `cep`, `web`, `arama`, `detay`, `tarih`,`adres`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?,?)";
    $dizi =[
        $_POST["firmaAdi"],
        $_POST["yetkili"],
        $_POST["dahili"],
        $_POST["cep"],
        $_POST["web"],
        $_POST["arama"],
        $_POST["detay"],
        $_POST["tarih"],
        $_POST["adres"]
    ];
 
    $sth = $db->prepare($sql);
   $sonuc = $sth->execute($dizi);
   if (!$sonuc) {
       # code...

   echo "Başarıyla eklendi";
   header('Location:home2.php');
   }
}
 
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
      <div class="container" style="margin-left:-25%;margin-top: 2%">
                <div >
                    <div class="btn-group">
                        <a href="home2.php" class="btn btn-outline-primary" >Tüm Datalar</a>
                        <a href="kaydet2.php" class="btn btn-outline-success">Data Ekle</a>
                    </div>
                </div>
            </div>
    <main>
    <div class="container">

        <form action="" method="post" class="row mt-4 g-3">
            <div class="col-6">
                <label for="firmaAdi" class="form-label">Firma Adı</label>
                <input type="text" class="form-control" name="firmaAdi">
            </div>
            <div class="col-6">
                <label for="yetkili" class="form-label">Yetkili Kişi</label>
                <input type="text" class="form-control" name="yetkili">
            </div>
            <div class="col-6">
                <label for="dahili" class="form-label">Dahili Numara</label>
                <input type="text" class="form-control" name="dahili">
            </div>
            <div class="col-6">
                <label for="cep" class="form-label">Cep Numarası</label>
                <input type="text" class="form-control" name="cep">
            </div>
            <div class="col-6">
                <label for="web" class="form-label">Web Sitesi</label>
                <input type="text" class="form-control" name="web">
            </div>
            <div class="col-6">
                <label for="adres" class="form-label">Adres</label>
                <input type="text" class="form-control" name="adres">
            </div>
            <div class="col-6">
                <label for="arama" class="form-label">Aranma Durumu</label>
                <input type="text" class="form-control" name="arama">
            </div>
            <div class="col-6">
                <label for="detay" class="form-label">Detay</label>
                <input type="text" class="form-control" name="detay">
            </div>
            <div class="col-4">
                <label for="tarih" class="form-label">Aranma Tarihi</label>
                <input type="date" class="form-control" name="tarih">
            </div>
            
            <button type="submit" name="kaydet" class="btn btn-outline-success">Kaydet</button>
        </form>
    </div>
    </main>
    <footer style="width: 100%;height: 100px;background: #000">
        
    </footer>
</body>
</html>