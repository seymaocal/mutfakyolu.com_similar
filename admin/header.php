<?php 
include 'islemler/baglan.php'; 
include '../kontrol.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/stylesheet.css">
  <!-- Ck Editör -->
  <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>


  </head>
  <body>
<div id="page">
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="index.php" role="tab" aria-controls="nav-home" aria-selected="true">Anasayfa</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="tarifler.php" role="tab" aria-controls="nav-profile" aria-selected="false">Tarifler</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="kategori.php" role="tab" aria-controls="nav-contact" aria-selected="false">Kategoriler</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="yorum.php" role="tab" aria-controls="nav-contact" aria-selected="false">Yorumlar</a>

  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="logout.php" role="tab" aria-controls="nav-contact" aria-selected="false">
  	<button type="button" class="btn btn-info">Çıkış Yap</button>
  </a>
  </div>
</nav>
