<?php
session_start();
ob_start();
session_destroy();
echo "Çıkış Yaptınız.Ana Sayfaya Yönlendiriliyorsunuz";
header("Location: login.php?durum=cikisyaptiniz.");

?>