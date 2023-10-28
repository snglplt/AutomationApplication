<?php
 
include "baglan.php";
 include "sistem.php";
session_start();
if (!isset($_SESSION["kullaniciAdi"])) {
    echo "Giriş yapınız...";
    header('Location:index.php');
    # code...
}
if(isset($_GET['sil'])){
    $sqlsil="DELETE FROM `data` WHERE `data`.`id` = ?";
    $sorgusil=$db->prepare($sqlsil);
    $sorgusil->execute([
        $_GET['sil']
    ]);
 
    header('Location:home2.php');
 
}
 
$sql ="SELECT * FROM data";
$sorgu = $db->prepare($sql);
$sorgu->execute();
 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hilkom Yazılım Data Otomasyonu</title>
    <link rel="shortcut icon" href="images/hilkom.jpeg" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="style.css">
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
            <div class="row mt-4">
                <div class="col">
                    <table class="table table-hover table-dark table-striped">
                        <thead>
                            <tr>
                                <th>Firma Adı</th>
                                <th>Yetkili Kişi</th>
                                <th>Dahili No</th>
                                <th>Cep No</th>
                                <th>Adres</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($satir = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                                <td><?=$satir['firmaAdi']?></td>
                                <td><?=$satir['yetkili']?></td>
                                <td><?=$satir['dahili']?></td>
                                <td><?=$satir['cep']?></td>
                                <td><?=$satir['adres']?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="detay2.php?id=<?=$satir['id']?>" class="btn btn-success">Detay</a>
                                        <a href="guncelle2.php?id=<?=$satir['id']?>" class="btn btn-secondary">Güncelle</a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <a href="index.php" style="margin-left: 78%" class="btn btn-danger">Çıkış Yap</a>
    </main>
    <footer></footer>
</body>
</html>