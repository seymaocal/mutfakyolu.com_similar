<?php 
$db=@mysqli_connect('localhost','root','','mutfakyolu');

/*
try{
$db=@mysqli_connect('localhost','root','','mutfakyolu');
echo "Yerel Mysql'e Bağlandı";
}
catch(PDOExpception $e ){
echo $e->getMessage();
}
*/

if (mysqli_connect_errno())
  {
  echo "Bağlantı Yapılamadı. Hata :" . mysqli_connect_error();
  }
  
//Türkçe Karakter Sorunu Çözümü
$db->set_charset("utf8");
$db->query('SET NAMES utf8');
 ?>