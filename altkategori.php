<?php 
$tarifsor="SELECT * FROM tarif order by RAND() LIMIT 4 ";
$sorgu=mysqli_query($db,$tarifsor);
?>


<div id="widget" style="margin-bottom: 250px;">
	<h3 >
		<span>Önerilen Yemek Tarifleri</span>
	</h3>
	<?php
  while($tarifcek=mysqli_fetch_assoc($sorgu)) { ?>
	<div class="yuzo_related_post_widge style" style="width: 138px;margin-bottom: 50px;float: left;margin-left: 20px;">
		<div class=""relatedthumb yuzo-list">
			<a href="external" style="margin-right: 15px;">
			
<div class="yuzo-img-wrap" style="width: 138px;height:78px;"> 

	<div class="yuzo-img">
		<img style="width: 138px;height:78px;margin-bottom: 5px;background-size: cover;" src="admin/<?php echo $tarifcek['tarif_resimyol'] ?>"><a class="link-list" href="" style="font-size:16px;line-height:24px;color: black"> <?php echo $tarifcek['tarif_ad'] ?> </a>
	</div>
</div>

			</a>



		</div>
	

		</div>
	<?php } ?>
	</div>
