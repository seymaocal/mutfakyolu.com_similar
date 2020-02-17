<?php

include 'baglan.php';
ob_start();
session_start();
//include '../fonksiyon.php';

if (isset($_POST['kullanicikaydet'])) {
 $kullanici_kadi = htmlspecialchars($_POST['kullanici_kadi']); 
 $kullanici_ad = htmlspecialchars($_POST['kullanici_ad']); 
 $kullanici_hakkimizda = htmlspecialchars($_POST['kullanici_hakkimizda']); 
 $kullanici_soyad = htmlspecialchars($_POST['kullanici_soyad']);
 $kullanici_mail = ($_POST['kullanici_mail']);
 $kullanici_passwordone = $_POST['kullanici_passwordone'];
 $kullanici_passwordtwo = $_POST['kullanici_passwordtwo'];

if($kullanici_passwordone==$kullanici_passwordtwo){
if($kullanici_passwordone>=4){
/*
$kullanicisor = "SELECT * from kullanici where kullanici_mail=mail";
$sorgu=mysqli_query($db,$kullanicisor);
*/

//kullanici kayıt işlemine geçiş
$password = md5($kullanici_passwordone);
$kullanici_yetki = 1;

$kullanicikaydet= "INSERT INTO kullanici (kullanici_ad,kullanici_soyad,kullanici_mail,kullanici_kadi,kullanici_hakkimizda,kullanici_yetki,kullanici_password) values('$kullanici_ad','$kullanici_soyad','$kullanici_mail','$kullanici_kadi','$kullanici_hakkimizda','$kullanici_yetki','$password')";
 $sonuc=mysqli_query($db,$kullanicikaydet);


if($sonuc){
 header("Location:../../index.php");

}
else{
	header("Location:../../uyeol.php?durum=kayıtolmadı");
}

}

else{
	header("Location:../../uyeol.php?durum=eksiksifre");
}

}
else{

header("Location:../../uyeol.php?durum=sifrefarkli");
}

}




/***************************************************************************************/
//kullanıcı giriş işlemi
if (isset($_POST['kullanicigiris'])) {

	 $kullanici_mail=htmlspecialchars($_POST['kullanici_mail']); 
	 $kullanici_kadi=htmlspecialchars($_POST['kullanici_kadi']); 
     $kullanici_password=md5($_POST['kullanici_password']); 
     $kullanici_yetki=1;
$kullanicisor="SELECT * from kullanici where kullanici_mail='$kullanici_mail' or kullanici_kadi='$kullanici_kadi'and kullanici_password='$kullanici_password' and kullanici_yetki='$kullanici_yetki'";
$sonuc=mysqli_query($db,$kullanicisor);
$row=mysqli_fetch_array($sonuc,MYSQLI_ASSOC);

if(mysqli_num_rows($sonuc) == 1){
$_SESSION['kullanici_mail'] = $kullanici_mail;
$_SESSION['kullanici_kadi'] = $kullanici_kadi;

if(isset($_POST['beni_hatirla'])){
//cookie atama işlemleri 
	setcookie("kullanici_mail","$kullanici_mail",strtotime("+1 day"));
	setcookie("kullanici_password",$kullanici_password,strtotime("+1 day"));
}else{
	//cookie sil..
	setcookie("kullanici_mail","$kullanici_mail",strtotime("-1 day"));
	setcookie("kullanici_password",$kullanici_password,strtotime("-1 day"));
}


header("Location:../../index.php?");

}
else{
	header("Location:../../login.php?durum=girisyapilamadi");
}
}


/******************///ADMİN GİRİŞ İŞLEMİİİ
if (isset($_POST['admingiris'])) {

	 echo $kullanici_mail=htmlspecialchars($_POST['kullanici_mail']); 
     echo $kullanici_password=$_POST['kullanici_password']; 
     echo $kullanici_yetki=2;

$kullanicisor="SELECT * from kullanici where kullanici_mail='$kullanici_mail' and kullanici_yetki='$kullanici_yetki' and kullanici_password='$kullanici_password'";
$sonuc=mysqli_query($db,$kullanicisor);
$row=mysqli_fetch_array($sonuc,MYSQLI_ASSOC);

if(mysqli_num_rows($sonuc) == 1){
$_SESSION['kullanici_mail'] = $kullanici_mail;
$_SESSION['kullanici_password'] = $kullanici_password;
header("Location:../index.php");
}
else{
	header("Location:../login.php?durum=girisyapilamadi");
}

}




   if (isset($_POST['tarifekle'])){
        
$uploads_dir = '../tarifimg/tarif';
	@$tmp_name = $_FILES['tarif_resimyol']["tmp_name"];
	@$name = $_FILES['tarif_resimyol']["name"];
	//resmin isminin benzersiz olması
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);	
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
 $refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;


	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");




		$tarif_ad=$_POST["tarif_ad"];
		$tarif_detay=$_POST["tarif_detay"];
		$kategori_id=$_POST["kategori_id"];
		$tarif_video=$_POST["tarif_video"];
		$tarif_keyword=$_POST["tarif_keyword"];
		$tarif_durum=$_POST["tarif_durum"];
		$tarif_resimyol=$refimgyol;
		
		
		//$tarif_seourl=$_POST["tarif_seourl"];
           
         $insert ="INSERT INTO tarif (kategori_id,tarif_ad,tarif_detay,tarif_video,tarif_keyword,tarif_durum,tarif_resimyol) values ('$kategori_id','$tarif_ad','$tarif_detay','$tarif_video','$tarif_keyword','$tarif_durum','$tarif_resimyol')";

            $sonuc=mysqli_query($db,$insert);
          
            if ($sonuc) {

		Header("Location:../tarifler.php?durum=ok");

	} else {

		Header("Location:../tarifler.php?durum=no");
	}
        }



if (isset($_POST['tarifduzenle'])) {

	
	$tarif_id=$_POST["tarif_id"];
	/*
	$tarif_ad=$_POST["tarif_ad"];
	$tarif_detay=$_POST["tarif_detay"];		
	$tarif_video=$_POST["tarif_video"];
		
	$tarif_keyword=$_POST["tarif_keyword"];
	$tarif_durum=$_POST["tarif_durum"];	*/
	
$kaydet = "UPDATE tarif (kategori_id,tarif_ad,tarif_detay,tarif_video,tarif_keyword,tarif_durum)  values ('$kategori_id','$tarif_ad','$tarif_detay','$tarif_video','$tarif_keyword','$tarif_durum') where tarif_id= '$tarif_id'";
$update = mysqli_query($db,$kaydet);
		
	if ($update) {

		Header("Location:../tarif-duzenle.php?durum=ok&tarif_id=$tarif_id");

	} else {

		Header("Location:../tarif-duzenle.php?durum=no&tarif_id=$tarif_id");
	}

}




/***************************************************YORUM KAYDET */
if (isset($_POST['yorumkaydet'])) {

echo $yorum_detay=$_POST['yorum_detay'];
$yorum_ad=$_POST['yorum_ad'];
$yorum_email=$_POST['yorum_email'];
echo $tarif_id=$_POST['tarif_id'];
$yorum_onay=$_POST['yorum_onay'];
$yorumekle="INSERT INTO yorumlar (tarif_id,yorum_detay, yorum_ad,yorum_email,yorum_onay) values ('$tarif_id','$yorum_detay','$yorum_ad', '$yorum_email','$yorum_onay')";

$yoruminsert = mysqli_query($db, $yorumekle);
	
	if ($yoruminsert) {

		Header("Location:../../tarifler.php?durum=ok&tarif_id=$tarif_id");
		

	} else {
		Header("Location:islem.php?durum=no");

	}

}

/*
if ($_GET['tarifsil']=="ok") {
	
$tarif_id=$_GET['tarif_id'];
$sil="DELETE from tarif where tarif_id='$tarif_id'";
$kontrol=mysqli_query($db,$sil);

	if ($kontrol) {

		Header("Location:../tarifler.php?durum=ok");

	} else {

		Header("Location:../tarifler.php?durum=no");
	}

}*/

if (isset($_POST['yorumayorum'])){

echo $yoruma_yorum=$_POST["yoruma_yorum"];
echo $yorum_id=$_POST["yorum_id"];
echo $tarif_id=$_POST["tarif_id"];
echo $kullanici_mail=$_POST["kullanici_mail"];
$sorgu ="INSERT INTO yorumlar (yoruma_yorum,yoruma_yorum_id,tarif_id,yorum_email) values ('$yoruma_yorum','$yorum_id','$tarif_id','$kullanici_mail')";
$insert=mysqli_query($db,$sorgu);
if($insert){
	Header("Location:../../tarifler.php?durum=ok&tarif_id=$tarif_id");
}
else 
Header("Location:islem.php?durum=no&tarif_id=$tarif_id");
}


if ($_GET['yorum_onay']=="ok") {
$yorum_id=$_GET['yorum_id'];
$yorum_one=$_GET["yorum_one"];

$sorgu="UPDATE yorumlar SET yorum_onay=$yorum_one WHERE yorum_id=$yorum_id";
$update=mysqli_query($db,$sorgu);
	
	if ($update) {
		Header("Location:../yorum.php?durum=ok&yorum_onay=$yorum_one");

	} else {

		Header("Location:../yorum.php?durum=no");
	}

}

if (isset($_POST['anket'])) {

echo $secenek_id=$_POST["secenek_id"];
$soru_id=$_GET["soru_id"];

$oy="SELECT oy_sayisi, secenek_id FROM anket where  secenek_id=$secenek_id";
$oysorgu=mysqli_query($db,$oy);
$oycek=mysqli_fetch_assoc($oysorgu);
$oy_sayisi= $oycek["oy_sayisi"] +1;


$sorgu="UPDATE anket SET oy_sayisi=$oy_sayisi WHERE secenek_id=$secenek_id";
$sonuc=mysqli_query($db,$sorgu);


if($sonuc){
	Header("Location:../../anketphp?<?php echo($soru_id) ?>durum=ok");
	echo $secenek_id;
}
else {
	Header("Location:../../anketphp?durum=no");
}

}


if($_GET['begen']=="ok"){
$yorum_id=$_GET["yorum_id"];
$tarif_id=$_GET["tarif_id"];
$kullanici_id=$_GET["kullanici_id"];
$yorum_email=$_GET["yorum_email"];
$begen="SELECT begen, yorum_id FROM yorumlar where  yorum_id=$yorum_id";
$begensorgu=mysqli_query($db,$begen);
$begencek=mysqli_fetch_assoc($begensorgu);
$begenme_sayisi= $begencek["begen"] +1;



$sorgu="UPDATE yorumlar SET begen=$begenme_sayisi WHERE yorum_id=$yorum_id";
$sonuc=mysqli_query($db,$sorgu);

$islem="INSERT INTO yorumlar (kullanici_id,begenilen_yorum_id,tarif_id,yorum_email) values ('$kullanici_id','$yorum_id','$tarif_id', '$yorum_email')";
$dene=mysqli_query($db,$islem);
if($dene){
	Header("Location:../../tarifler.php?durum=ok&tarif_id=$tarif_id");
	echo $secenek_id;
}
else {
	Header("Location:../../tarifler.php?durum=no");
}

}

if($_GET['icbegen']=="ok"){
$yorum_id=$_GET["yorum_id"];
$tarif_id=$_GET["tarif_id"];
$kullanici_id=$_GET["kullanici_id"];
$yorum_email=$_GET["yorum_email"];
$begen="SELECT begen, yorum_id FROM yorumlar where  yorum_id=$yorum_id";
$begensorgu=mysqli_query($db,$begen);
$begencek=mysqli_fetch_assoc($begensorgu);
$begenme_sayisi= $begencek["begen"] +1;



$sorgu="UPDATE yorumlar SET begen=$begenme_sayisi WHERE yorum_id=$yorum_id";
$sonuc=mysqli_query($db,$sorgu);

$islem="INSERT INTO yorumlar (kullanici_id,begenilen_yorum_id,tarif_id,yorum_email) values ('$kullanici_id','$yorum_id','$tarif_id', '$yorum_email')";
$dene=mysqli_query($db,$islem);
if($dene){
	Header("Location:../../tarifler.php?durum=ok&tarif_id=$tarif_id");
	echo $secenek_id;
}
else {
	Header("Location:../../tarifler.php?durum=no");
}

}


if($_GET['begenmektenvazgec']=="ok"){
$yorum_id=$_GET["yorum_id"];
$tarif_id=$_GET["tarif_id"];
$begen="SELECT begen, yorum_id FROM yorumlar where  yorum_id=$yorum_id";
$begensorgu=mysqli_query($db,$begen);
$begencek=mysqli_fetch_assoc($begensorgu);
$begenme_sayisi= $begencek["begen"] -1;



$sorgu="UPDATE yorumlar SET begen=$begenme_sayisi WHERE yorum_id=$yorum_id";
$sonuc=mysqli_query($db,$sorgu);


if($sonuc){
	Header("Location:../../tarifler.php?durum=ok&tarif_id=$tarif_id");
	echo $secenek_id;
}
else {
	Header("Location:../../tarifler.php?durum=no");
}

}

if($_GET['icbegenmektenvazgec']=="ok"){
$yorum_id=$_GET["yorum_id"];
$tarif_id=$_GET["tarif_id"];
$begen="SELECT begen, yorum_id FROM yorumlar where  yorum_id=$yorum_id";
$begensorgu=mysqli_query($db,$begen);
$begencek=mysqli_fetch_assoc($begensorgu);
$begenme_sayisi= $begencek["begen"] -1;



$sorgu="UPDATE yorumlar SET begen=$begenme_sayisi WHERE yorum_id=$yorum_id";
$sonuc=mysqli_query($db,$sorgu);


if($sonuc){
	Header("Location:../../tarifler.php?durum=ok&tarif_id=$tarif_id");
	echo $secenek_id;
}
else {
	Header("Location:../../tarifler.php?durum=no");
}

}


/*if ($_GET['yorumsil']=="ok") {
	
	$sil=$db->prepare("DELETE from yorumlar where yorum_id=:yorum_id");
	$kontrol=mysqli_query($db,$sil);

	if ($kontrol) {

		
		Header("Location:../yorum.php?durum=ok");

	} else {

		Header("Location:../yorum.php?durum=no");
	}

}*/

?>