<?php 
include 'islemler/baglan.php';
//include '../kontrol.php';
//include 'login-session.php';
ob_start();
session_start();

$kullanicisor="SELECT * FROM kullanici order by kullanici_id DESC";
$sorgu=mysqli_query($db,$kullanicisor);

//$say=$sorgu->rowCount();
$kullanicicek=mysqli_fetch_assoc($sorgu);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/stylesheet2.css">
  </head>
  <body class="login">

  	<form action="islemler/islem.php" method="post">
      
      <input type="email" name="kullanici_mail">
      <input type="password" name="kullanici_password">
      <input type="submit" name="admingiris" value="giriş yap">
    </form>
  </body>
  </html>