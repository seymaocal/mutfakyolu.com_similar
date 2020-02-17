<?php 

include 'header.php'; 
include 'islemler/baglan.php';
//Belirli veriyi seçme işlemi
$yorumsor_ = "SELECT * FROM yorumlar order by yorum_onay ASC";
$yorumsor=mysqli_query($db,$yorumsor_);


?>



<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Yorum Listeleme </h2>

            
            
          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Yorum</th>
                  <th>Kullanıcı</th>
                  <th>Tarif</th>
                  <th>Durum</th>

                  <th></th>

                </tr>
              </thead>

              <tbody>

                <?php 

                $say=0;

                

                while($yorumcek=mysqli_fetch_assoc($yorumsor)) { $say++?>


                <tr>
                 <td width="20"><?php echo $say ?></td>
                 <td><?php echo $yorumcek['yorum_detay'] ?></td>
                 <td><?php 

                   echo $yorumcek['yorum_ad']; ?></td>
                   <td><?php 

                     $tarif_id=$yorumcek['tarif_id'];

                     $tarifsor_ = "SELECT * FROM tarif where tarif_id=$tarif_id";
                     $tarifsor = mysqli_query($db,$tarifsor_);
/*
                     $urunsor=$db->prepare("SELECT * FROM urun where urun_id=:id");
                     $urunsor->execute(array(
                      'id' =>  $urun_id
                      ));*/

                     $tarifcek=mysqli_fetch_assoc($tarifsor);


                     echo $tarifcek['tarif_ad'];



                     ?></td>

                     <td><?php 

                       if ($yorumcek['yorum_onay']==1) {?>

                       <a href="islemler/islem.php?yorum_id=<?php echo $yorumcek['yorum_id'] ?>&yorum_one=2&yorum_onay=ok"><button class="btn btn-success btn-xs">Onayla</button></a>


                      <?php } elseif ($yorumcek['yorum_onay']==2) {?>


                       <a href="islemler/islem.php?yorum_id=<?php echo $yorumcek['yorum_id'] ?>&yorum_one=0&yorum_onay=ok"><button class="btn btn-warning btn-xs">Kaldır</button></a>

                       <?php } ?>


                     </td>


                     


           
            <td><center><a href="islemler/islem.php?yorum_id=<?php echo $yorumcek['yorum_id']; ?>&yorumsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
          </tr>



          <?php  }

          ?>


        </tbody>
      </table>

      <!-- Div İçerik Bitişi -->


    </div>
  </div>
</div>
</div>




</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
