<?php
 
include "baglan.php";
 include "sistem.php";
session_start();
if (!isset($_SESSION["kullaniciAdi"])) {
    echo "Giriş yapınız...";
    header('Location:index.php');
    # code...
}
if(isset($_POST['guncelle'])){
 $islem = $_POST['taskOption'];
    $sql = "UPDATE `data` 
        SET `firmaAdi` = ?, 
            `yetkili` = ?, 
            `dahili` =?,
            `cep` =?,
            `web` =?,
            `arama` = ?, 
            `detay` = ?,
            `duzenleyen` = ?,
            `sonuc` = ?,
            `tarih` = ?,
            `adres`=? WHERE `data`.`id` = ?";
    $dizi =[
        $_POST["firmaAdi"],
        $_POST["yetkili"],
        $_POST["dahili"],
        $_POST["cep"],
        $_POST["web"],
        $_POST["arama"],
        $_POST["detay"],
         $_SESSION["kullaniciAdi"],
        $islem,
        $_POST["tarih"],
        $_POST["adres"],
        $_POST["id"]
    ];
    $sorgu = $db->prepare($sql);
    $sorgu->execute($dizi);
 
    header("Location:home.php");
}
 
$sql ="SELECT * FROM data WHERE id = ?";
$sorgu = $db->prepare($sql);
$sorgu->execute([
    $_GET['id']
]);
$satir = $sorgu->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
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
                        <a href="home.php" class="btn btn-outline-primary" >Tüm Datalar</a>
                        <a href="kaydet.php" class="btn btn-outline-success">Data Ekle</a>
                    </div>
                </div>
            </div>
    <main>
    <div class="container">
        <form action="" method="post" class="row mt-4 g-3">
            <input type="hidden" name="id" value="<?=$satir['id']?>">
            <div class="col-6">
                <label for="firmaAdi" class="form-label">Firma Adı</label>
                <input type="text" class="form-control" name="firmaAdi" value="<?=$satir['firmaAdi']?>">
            </div>
            <div class="col-6">
                <label for="yetkili" class="form-label">Yetkili</label>
                <input type="text" class="form-control" name="yetkili" value="<?=$satir['yetkili']?>">
            </div>
            <div class="col-6">
                <label for="dahili" class="form-label">Dahili Numara</label>
                <input type="text" class="form-control" name="dahili" value="<?=$satir['dahili']?>">
            </div>
            <div class="col-6">
                <label for="cep" class="form-label">Cep Telefonu</label>
                <input type="text" class="form-control" name="cep" value="<?=$satir['cep']?>">
            </div>
            <div class="col-6">
                <label for="web" class="form-label">Web Sitesi</label>
                <input type="text" class="form-control" name="web" value="<?=$satir['web']?>">
            </div>
            <div class="col-6">
                <label for="adres" class="form-label">Adres</label>
                <input type="text" class="form-control" name="adres"
                 value="<?=$satir['adres']?>">
            </div>
            <div class="col-6">
                <label for="arama" class="form-label">Aranma Durumu</label>
                <input type="text" class="form-control" name="arama" value="<?=$satir['arama']?>">
            </div>
            <div class="col-6">
                <label for="detay" class="form-label">Detay</label>
                <input type="text" class="form-control" name="detay" value="<?=$satir['detay']?>">
            </div>
            <div class="col-6">
                <label for="sonuc" class="form-label">Sonuç</label>
                <select class="form-control" name="taskOption">
                      <option value="Olumsuz">Olumsuz</option>
                      <option value="Randevu Alındı">Randevu Alındı</option>
                      <option value="Teyit Edildi">Teyit Edildi</option>
                      <option value="Satış Yapıldı">Satış Yapıldı</option>
                      <option value="Teslim Edildi">Teslim Edildi</option>
                      
                </select>
            </div>
            <div class="col-4">
                <label for="tarih" class="form-label">Aranma Tarihi</label>
                <input type="date" class="form-control" name="tarih" value="<?=$satir['tarih']?>">
            </div>
            <button type="submit" name="guncelle" class="btn btn-primary">Güncelle</button>
        </form>
    </div>
    </main>
    <footer></footer>
</body>
</html>