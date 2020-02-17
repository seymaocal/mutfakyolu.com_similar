<?php
session_start();
//include 'baglan.php';
 
//girisisle.php de oluşturulan username mi burada $user_check değişkenine atıyoruz
$kullanici_mail=$_SESSION['kullanici_mail'];
 
//$user_check değişkenini burada uye tablosundan kullaniciadi hücresinde sorguluyoruz
$sql = mysqli_query($db,"SELECT * FROM kullanici WHERE kullanici_mail='$kullanici_mail' ");
 
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
 
$login_user=$row['kullanici_mail'];
 
/* eğer $user_check değikeni tanımlı ise home.php sayfamız
açık kalıcak eğer tanımlı değilse giris.php ye yönlendirecek */
if(!isset($kullanici_mail))
{
header("Location: login.php");
}
?>