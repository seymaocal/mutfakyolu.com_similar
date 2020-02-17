<?php 
include 'admin/islemler/baglan.php';
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
  <link rel="stylesheet" href="css/stylesheet2.css">
  </head>
  <body id="login" class="login">

  
  		<h1>
      <a href="index.php" title="Resimli, Pratik ve Lezzetli Yemek Tarifleri ~ Mutfak Yolu">
        
      </a>  
      </h1>

  		<form  id="loginform" action="admin/islemler/islem.php" method="POST">
      <p>
      <label >Kullanıcı adı ya da e-posta adresi </br>
  		<input type="text" name="kullanici_mail"<?php if(isset($_COOKIE["kullanici_mail"])){?>
        value="<?php echo $_COOKIE["kullanici_mail"] ?>"

     <?php } else{?>
      placeholder="kullanıcı adınızı girin">

    <?php } ?>

     
      </label></p>

      <p>
      <label>Parola </br>
      <input type="password" name="kullanici_password" value="">
      </label></p>
      <p class="forgetme">
        <label class="rememberme">
          <input type="checkbox"  name="beni_hatirla">Beni Hatırla
        </label>
      </p>

<p class="submit">
      <input type="submit" id="submitbtn" class="submit_" name="kullanicigiris" value="giriş yap" >
</p>
  		</form>

  		<p id="nav">
  			<a rel="nofollow" href="uyeol.php">Kayıt ol</a> |
  			<a href="">Parolanızı mı unuttunuz?</a>
  		</p>

  		<div class="privacy-policy-page-link">
  			<a class="privacy-policy-link" href="https://www.mutfakyolu.com/gizlilik-politikasi">Gizlilik Politikalarımız</a>
  		</div>
  
  </body>
  </html>