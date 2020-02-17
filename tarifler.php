<?php 
include 'header.php';
$gelen_id=$_GET['tarif_id'];
$_SESSION['tarif_id']=$_GET['tarif_id'];
$tarif_id=$_SESSION['tarif_id'];
//$kullanici=$_SESSION['kullanici_mail'];
echo $tarif_id;


$kullanicisor="SELECT kullanici_id  FROM kullanici  order by kullanici_id DESC";
$kullanici_sorgu=mysqli_query($db,$kullanicisor);
$kullanicicek=mysqli_fetch_assoc($kullanici_sorgu);
echo $kullanicicek["kullanici_id"];

$tarifsor="SELECT * FROM tarif where tarif_id= $tarif_id";
$sorgu=mysqli_query($db,$tarifsor);
$tarifcek=mysqli_fetch_assoc($sorgu);

$yorumsor="SELECT * FROM yorumlar where tarif_id=$tarif_id and yorum_onay=2 and yoruma_yorum_id=0";
$sor=mysqli_query($db,$yorumsor);

$yorumsor_="SELECT * FROM yorumlar where tarif_id=$tarif_id and yorum_onay=2 and yoruma_yorum_id!=0";
$sor_=mysqli_query($db,$yorumsor_);
$yorumayorum=mysqli_fetch_assoc($sor_);

$begenilenyorum="SELECT * FROM yorumlar where begenilen_yorum_id!=0";
$begenilenyorum_sorgu=mysqli_query($db,$begenilenyorum);
$begenilenyorumcek=mysqli_fetch_assoc($begenilenyorum_sorgu);
?>


<div id="main">
	<div class="wrap">
		<div class="main-row">
			<div id="primary" class="site-content2">
				<article id="post">
					<header class="entry-header">
						<p id="breadcrumbs" style=" color: #a31e21;font-family: sans-serif;">
							<?php  

$kategori_id=$tarifcek["kategori_id"] ;
$kategorisor="SELECT * FROM kategori where kategori_id= $kategori_id";
$sorgu=mysqli_query($db,$kategorisor);
$kategoricek=mysqli_fetch_assoc($sorgu);
							echo $kategoricek["kategori_ad"];?><b style="color: #424242"> > </b><?php echo $tarifcek["tarif_ad"]; 
							?>
						</p>
						<h1 class="entry-title">
								<?php echo $tarifcek["tarif_ad"]; ?>					
						</h1>
						<div class="post-single">
							<img src="admin/<?php echo $tarifcek["tarif_resimyol"] ?>" alt="" title="" />
						</div>
					</header>
					<div class="yenialan">

						<div id="yenialan-title" style="background: #ffffff;color: #a31e21;border-bottom: 1px solid #dbdbdb;">Detaylar
							<span class="puan">Puan Ver</span>
							<span class="puanver">
								<div class="star-blocks">
									<form style="margin: 0 0 0px;" name="rating" method="post" action="" id="bsf-rating" onsubmit="return false;">
									<span class="star-rating-control">
										<div class="rating-cancel"><a title="Cancel Rating"></a></div>
										<div role="text" aria-label="" class="star-rating rater-0 star star-1 star-rating-applied star-rating-live"><a title="1">1</a></div>
										<div role="text" aria-label="" class="star-rating rater-0 star star-2 star-rating-applied star-rating-live"><a title="2">2</a></div>
										<div role="text" aria-label="" class="star-rating rater-0 star star-3 star-rating-applied star-rating-live"><a title="3">3</a></div>
										<div role="text" aria-label="" class="star-rating rater-0 star star-4 star-rating-applied star-rating-live"><a title="4">4</a></div>
										<div role="text" aria-label="" class="star-rating rater-0 star star-5 star-rating-applied star-rating-live"><a title="5">5</a></div>
									</span>

									<input type="radio" name="star" class="star star-1 " value="1" style="display: none;">
									<input type="radio" name="star" class="star star-2 " value="2" style="display: none;">
									<input type="radio" name="star" class="star star-3 " value="3" style="display: none;">
									<input type="radio" name="star" class="star star-4 " value="4" style="display: none;">
									<input type="radio" name="star" class="star star-5 " value="5" style="display: none;">
									<input type="hidden" name="post_id" value="15840"><input type="hidden" name="ip" value="134.209.87.251">

								</form>
							</div></span>
						</div>

						<div class="yenialan-icerik">

							<div id="kackisilik">
							<div id="icerik">Kaç Kişilik:</div>
							<span class="icerik"><?php echo $tarifcek["kac_kisilik"] ?></span>
						    </div>

						    <div id="hazirliksüresi">
							<div id="icerik">Hazırlık Süresi:</div>
							<span class="icerik"><?php echo $tarifcek["hazirlik_süresi"] ?></span>
						    </div>

						    <div class="pisirmesüresi">
							<div id="icerik">Pişirme Süresi:</div>
							<span class="icerik"><?php echo $tarifcek["pisme_suresi"] ?></span>
						    </div>

						     <div class="toplamsüre">
							<div id="icerik">Toplam Süre:</div>
							<span class="icerik"><?php echo $tarifcek["hazirlik_süresi"] + $tarifcek["pisme_suresi"]   ?></span>
						    </div>

						</div>
					</div>
					<div id="post-content">
						<p><?php echo $tarifcek["tarif_detay"]; ?></p>
						<h2><?php echo $tarifcek["tarif_ad"]; ?></h2>
						
						<ul>

							<li><?php echo $tarifcek["tarif_malzeme"]?></li>
						</ul>

						<p><img class="post-content-img" src="" alt="" title="" width="601px" height="421px"></p>
						<h2><?php echo $tarifcek["tarif_ad"]; ?> Nasıl Yapılır?</h2>

						<p >

							 <?php echo $tarifcek["tarif_nasil_yapilir"]?>
								
							
						</p>
					</div>
				</article>
<?php include 'altkategori.php'; ?>
				<div id="yorum">
					<h3>Bir Cevap Yazın</h3>
					 <?php 
 if (!isset($_SESSION['kullanici_mail'])) {?>
            <a  class="girisyap" href="login.php" title="Mutfakyolu'na giriş yapın">Giriş Yap</a>
          <?php } ?>
			<?php if(isset($_SESSION['kullanici_mail'])){?>


				<form style="margin-bottom: 50px;" action="admin/islemler/islem.php" method="POST">
					<P>Yorum</P>
						<textarea cols="80" rows="8" name="yorum_detay"></textarea>
						<p >Adınız</p>
						<input style="float: left" type="text" name="yorum_ad" placeholder="adınız..">
						<p style="float: left">E-Posta</p>
						<input type="text" name="yorum_email" value="<?php echo $_SESSION['kullanici_mail']; ?>" placeholder="<?php echo $_SESSION['kullanici_mail']; ?>">

						<input type="hidden" name="tarif_id" value="<?php echo $tarif_id; ?>">
						<input type="hidden" name="yorum_onay" value="<?php echo "1" ?>">
						  <a href="admin/islemler/islem.php&tarifgonder=ok" title="" class=""><button style="background: #dd0000;color: #fff;border: 0;    padding: 6px 16px;
    margin: 0 4px 0 0;
    min-width: 64px;    border-radius: 2px;" name="yorumkaydet">Yorum Gönder</button></a>
					</form>
<?php}?>


					<?php 
					
			}
?>
<form action="admin/islemler/islem.php" method="POST">
<?php while ($yorumcek=mysqli_fetch_assoc($sor)) {?>
	
	<div>
<?php 
	echo $yorumcek["yorum_ad"];?>

<p style="margin-bottom: 0px;"><?php  
	echo $yorumcek["yorum_detay"];?>&nbsp<?php echo $yorumcek["begen"]; echo "begenme!" ?></p>


	<?php if(isset($_SESSION['kullanici_mail'])){ ?>
		
			
	<a href="admin/islemler/islem.php?yorum_id=<?php echo $yorumcek["yorum_id"];?>&begen=ok&tarif_id=<?php echo $tarif_id; ?>&kullanici_id=<?php echo $kullanicicek["kullanici_id"] ?>&yorum_email=<?php echo $yorumcek["yorum_email"];?>">

		<?php //yorumu begenen kişilerin listesi
       echo $begenilenyorumcek["yorum_email"]; 


      $_SESSION['yorum_id'] =$yorumcek["yorum_id"];
	?>
		
	beğen</a> 

<a href="admin/islemler/islem.php?yorum_id=<?php echo $yorumcek["yorum_id"]; ?>&begenmektenvazgec=ok&tarif_id=<?php echo $tarif_id; ?>">beğenmekten vazgeç</a>

<?php  }?>
</div>

<input type="hidden" name="kullanici_mail" value="<?php echo $_SESSION['kullanici_mail'];  ?>">
<input type="hidden" name="yorum_id" value="<?php echo  $_SESSION['yorum_id']; ?>">
<input type="hidden" name="tarif_id" value="<?php echo $tarif_id; ?>">
	<textarea name="yoruma_yorum" class="t-area" placeholder="yoruma cevap ver" ></textarea>

<input  style="background: #dd0000;color: #fff;border: 0;    padding: 6px 16px;
    margin: 0 4px 0 0;
    min-width: 64px;    border-radius: 2px;" type="submit" name="yorumayorum">

<div style="margin-left: 100px;background-color: #fff;" id="yoruma_yorum">
	<?php 
	echo $yorumayorum["yoruma_yorum"];echo $yorumayorum["yorum_email"]?>
	<?php echo $yorumayorum["begen"]; echo "begenme!" ?>


	<?php if(isset($_SESSION['kullanici_mail'])){ ?>
		
			
	<a href="admin/islemler/islem.php?yorum_id=<?php echo $yorumayorum["yorum_id"];?>&icbegen=ok&tarif_id=<?php echo $tarif_id; ?>&kullanici_id=<?php echo $kullanicicek["kullanici_id"] ?>&yorum_email=<?php echo $yorumayorum["yorum_email"];?>">

		<?php 
        echo $yorumcek["yorum_email"]; 
      $_SESSION['yorum_id'] =$yorumcek["yorum_id"];
	?>
		
	beğen</a> 

<a href="admin/islemler/islem.php?yorum_id=<?php echo $yorumayorum["yorum_id"]; ?>&icbegenmektenvazgec=ok&tarif_id=<?php echo $tarif_id; ?>">beğenmekten vazgeç</a>
</div>
<?php  }?>
<input type="hidden" name="kullanici_mail" value="<?php echo $_SESSION['kullanici_mail'];  ?>">
<input type="hidden" name="yorum_id" value="<?php echo  $_SESSION['yorum_id']; ?>">
<input type="hidden" name="tarif_id" value="<?php echo $tarif_id; ?>">
	<textarea name="yoruma_yorum" class="t-area" placeholder="yoruma cevap ver" ></textarea>

<input  style="background: #dd0000;color: #fff;border: 0;    padding: 6px 16px;
    margin: 0 4px 0 0;
    min-width: 64px;    border-radius: 2px;" type="submit" name="yorumayorum">

</form>


<?php}?>
	<?php
} ?>
					
				</div>
			</div>
		</div>
	</div>

</div>

	


		
<?php
include 'footer.php';
?>