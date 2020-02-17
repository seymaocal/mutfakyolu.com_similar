<?php 
$tarifsor="SELECT * FROM tarif order by RAND() LIMIT 5 ";
$sorgu=mysqli_query($db,$tarifsor);
?>


<div id="widget" style=" width: 287px !important;
       float: right !important;margin-top:-110%;    margin-right: 40px;">
	<h3 >
		<span>Önerilen Yemek Tarifleri</span>
	</h3>
	<?php
  while($tarifcek=mysqli_fetch_assoc($sorgu)) { ?>
	<div class="yuzo_related_post_widge style" style="margin-bottom: 50px;">
		<div class=""relatedthumb yuzo-list">
			<a href="external" style="float: left; margin-right: 15px;">
			
<div class="yuzo-img-wrap" style="width: 138px;height:78px;"> 

	<div class="yuzo-img">
		<img style="width: 138px;height:78px;margin-bottom: 5px;background-size: cover;" src="admin/<?php echo $tarifcek['tarif_resimyol'] ?>">
	</div>
</div>

			</a>

<a class="link-list" href="" style="font-size:16px;font-weight:bold;line-height:24px;color: #757575"> <?php echo $tarifcek['tarif_ad'] ?> </a>

		</div>
	

		</div>
	<?php } ?>
	</div>
