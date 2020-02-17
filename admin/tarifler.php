
<?php include 'header.php'; 
$tarifsor="SELECT * FROM tarif order by tarif_id DESC";
$sorgu=mysqli_query($db,$tarifsor);
?>	
  	<h2>Tarif Listeleme</h2>
  	<div align="right">
              <a href="tarif-ekle.php"><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>

            </div>
<table id="datatable-responsive" class="table  table-bordered " cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>T.No</th>
                  <th>Tarif Ad</th>
                  <th>Tarif Resim</th>
                  <th>Tarif Sıra</th>
                  
                                
                 
                  <th>Durum</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>
              	  <?php
                $say=0;
                
                 while($tarifcek=mysqli_fetch_assoc($sorgu)) { $say++?>


                <tr>
                 <td width="20"><?php echo $say ?></td>
                 <td><?php echo $tarifcek["tarif_ad"] ?></td>
                <td><img width="200px" src="<?php echo $tarifcek['tarif_resimyol'] ?>"></td>
                 <td><?php echo $tarifcek['tarif_sira'] ?></td>

             
                
                                             
                    <td><center><?php 

                  if ($tarifcek["tarif_durum"]==1) {?>

                  <button class="btn btn-success btn-xs">Aktif</button>


                <?php } else {?>

                <button class="btn btn-danger btn-xs">Pasif</button>


                <?php } ?>
              </center>


            </td>


       <td><center><a href="tarif-duzenle.php?tarif_id=<?php echo $tarifcek["tarif_id"]; ?>"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
         

         <td><center><a href="islemler/islem.php?tarif_id=<?php echo $tarifcek["tarif_id"]; ?>&tarifsil=ok"><button name="tarifsil" class="btn btn-danger btn-xs">Sil</button></a></center></td>
          </tr>
 <?php } ?>
        </tbody>
      </table>

<?php include 'footer.php'; ?>