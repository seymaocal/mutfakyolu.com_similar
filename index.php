<?php include 'header.php';

$tarifsor="SELECT * FROM tarif order by tarif_id DESC";
$sorgu=mysqli_query($db,$tarifsor);

 ?>
 
 <?php
  while($tarifcek=mysqli_fetch_assoc($sorgu)) { ?>
      <div id="main">
        <div id="wrap">
          <div id="main-row">
            <div id="primary" class="site-content">
              <div id="primary-row">
                <div id="content" role="main">
                  <div class="grid-row">
                    <article class="entry-grid entry-card">
                      <div class="card-wrap">
                        <div class="post-thumb">
                          <a href="tarifler.php?tarif_id=<?php echo $tarifcek["tarif_id"]; ?>&tarifgonder=ok" title=""class=""> 
                            <img style="visibility: visible;opacity: 1;" src="admin/<?php echo $tarifcek["tarif_resimyol"] ?>" class="attachment">
                          </a>
                        </div>
                        <div class="card-content">
                          <h2 class="entry-title">
                            <a  class="entry-title-hover" href="" title="Yoğurtlu Salata Kabak Tarifi"><?php echo $tarifcek["tarif_ad"] ?></a>
                          </h2>
                          <p class="post-excerpt"><?php 

                           $detay =$tarifcek["tarif_detay"];
                           $uzunluk=strlen($detay);
                           $limit=178;
                           if($uzunluk>$limit){
                            $detay = substr($detay,0,$limit);

                           } 
                           echo $detay ;echo "...";



                          ?></p>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       
<?php }  ?>

<?php include 'sagkategori.php';?> 
<?php include 'footer.php' ?>
</div>