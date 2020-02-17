
<?php
ob_start();
session_start();
include 'admin/islemler/baglan.php';



$kullanicisor="SELECT * FROM kullanici order by kullanici_id DESC";
$sorgu=mysqli_query($db,$kullanicisor);

$kullanicicek=mysqli_fetch_assoc($sorgu);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/stylesheet.css">
  <link rel="stylesheet" href="css/stylesheet3.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
  </head>
  <body>
  	<div id="page">


  		<div  id="utility-top" class="top-nav">
      <div class="wrap">
        <nav class="secondary-nav">
          <ul id="menu-menu-1" class="sec-menu">

            <li style="color: #757575;padding: 0 12px;
    margin: 8px 0;;float: left; list-style-type: none;"><a style="color: #757575"  title="Sizde beğendiğiniz tarifleri sitemize yollayın" >Tarif Gönder</a></li>


     <li style="color: #757575;padding: 0 12px;
    margin: 8px 0;;float: left; list-style-type: none;"><a style="color: #757575" href="anket.php" title="Mutfakyolu ailesine katılın">Anket</a></li>


            <li style="color: #757575;padding: 0 12px;
    margin: 8px 0;;float: left; list-style-type: none;"><a style="color: #757575" href="uyeol.php" title="Mutfakyolu ailesine katılın">Üye Ol</a></li>


             <?php 

             if (!isset($_SESSION['kullanici_mail'])) {?>
            <li style="color: #757575;padding: 0 12px;
    margin: 8px 0;;float: left; list-style-type: none;"><a style="color: #757575" class="girisyap" href="login.php" title="Mutfakyolu'na giriş yapın">Giriş Yap</a></li>
          <?php } ?>

            <?php

            if(isset($_SESSION['kullanici_mail'])) { ?>

            
            <li style="color: #757575;padding: 0 12px;
    margin: 8px 0;;float: left; list-style-type: none;"><a  style="color: #757575" class="cikisyap" href="logout.php" title="Mutfakyolu'na giriş yapın" style="">Çıkış Yap</a></li>
          <?php } ?>

            

          </ul>
        </nav>
        <div id="callout-bar" role="complementary">
          <div class="callout-inner">
            <div class="newp">
              <h1 class="newh1">Mutfak Yolu</h1> ustalarından yemek tarifleri
            </div>
          </div>
        </div>
      </div>
      </div>

      <header id="header" class="site-header">
        <div class="wrap full-width">

          <div class="brand column one-fourth">
            <div class="site-title">
              <a itemprop="url" href="index.php" title="Resimli, Pratik ve Lezzetli Yemek Tarifleri ~ Mutfak Yolu">
                <img src="image/logo.png" alt="Resimli, Pratik ve Lezzetli Yemek Tarifleri ~ Mutfak Yolu" />
              </a>
            </div>
          </div>


          <div class="column header-widget-area right last">
            <aside style=" margin-top: -40px;" id="custom_html-15" class="widget-text hwa-wrap widget-custom-html">
              <div class="textwidget custom_html-widget">
              <form style="border-style: dashed;" method="POST" action="arama.php">


<fieldset>


<input style="border-style: none;" type="text" name="search" placeholder="Ne Hazırlamak İstersiniz?" />


<input type="submit" value="Ara" />


</fieldset>


</form>
              
              </div>
            </aside>
          </div>
        </div>
      </header>


     <div id="menu">
   <nav class="menu">
   <ul>
   <li><a href="#">Yemek Tarifleri<i class="fa fa-user-plus fa-3x"></i></a>
<ul>
                        <li><a href="#">Pratik Yemekler</a></li>
                        <li><a href="#">Pilav Tarifleri</a></li>
                        <li><a href="#">Etli Yemek Tarifleri</a>  <ul>
                                <li><a href="#">Köfte Tarifleri</a></li>
                               
                                
                            </ul></li>
                        
                        <li><a href="#">Balık Tarifleri</a></li>
                        <li><a href="#">Deniz Ürünleri Tarifleri</a></li>
                        <li><a href="#">Kış Yemekleri Tarifleri</a></li>
                        <li><a href="#">Makarna Tarifleri</a></li>
                         <li><a href="#">Sebze Yemeği Tarifleri</a></li>
                          <li><a href="#">Aperatif Yemek Tarifleri</a></li>
                    </ul>
   </li>
   <li><a href="#">Çorba Tarifleri</a>
  </li>
     <li><a href="#">Diğer Tarifler</a>
                    <ul>
                        <li><a href="#">Yöresel Yemek Tarifleri</a></li>
                        <li><a href="#">Diyet Yemekleri</a>
                            <ul>
                                <li><a href="#">Dukan Diyet Tarifleri</a></li>
                               
                            </ul>
                        </li>
                        <li><a href="#">Dünya Mutfağı Tarifleri</a></li>
                         <li><a href="#">Kırmızı Et Tarifleri</a></li>
                    </ul>
                </li>
   
     <li><a href="#">Hamur İşi Tarifleri</a>
<ul>
                        <li><a href="#">Börek Tarifleri</a></li>
                        <li><a href="#">Çörek Tarifleri</a></li>
                        <li><a href="#">Poğaça Tarifleri</a></li>
                        
                        <li><a href="#">Kek Tarifleri</a></li>
                        <li><a href="#">Kurabiye Tarifleri</a></li>
                        <li><a href="#">Ekmek Tarifleri</a></li>
                        <li><a href="#">Pizza Tarifleri</a></li>
                         <li><a href="#">Makaron Tarifleri</a></li>
                          
                    </ul>
   </li>
       <li><a href="#">Tatlı Tarifleri</a>
<ul>
                        <li><a href="#">Pasta Tarifleri</a></li>
                        <li><a href="#">Dondurma Tarifleri</a></li>
                        <li><a href="#">Hamurlu Tatlı Tarifleri</a></li>
                        
                        <li><a href="#">Sütlü Tatlı Tarifleri</a></li>
                        <li><a href="#">Soğuk Tatlılar</a></li>
                        
                          
                    </ul>
   </li>

       <li><a href="#">Tarifler</a>
<ul>
                        <li><a href="#">Kahvaltılık Tarifler</a></li>
                        <li><a href="#">Salata Tarifleri</a></li>
                        <li><a href="#">Turşu Tarifleri</a></li>
                        
                        <li><a href="#">Sos Tarifleri</a></li>
                        <li><a href="#">Reçel Tarifleri</a></li>
                        <li><a href="#">İçeçek Tarifleri</a></li>
                        <li><a href="#">Meze Tarifleri</a></li>
                        
                          
                    </ul>
   </li>
              
                <li><a href="#">Mutfak Ölçüleri Tablosu</a></li>
   </ul>
   </nav>
   </div>  



