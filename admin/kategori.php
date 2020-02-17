<?php  

//Belirli veriyi seçme işlemi
include 'header.php';
$kategorisor="SELECT * FROM kategori order by kategori_sira ASC";
$sorgu=mysqli_query($db,$kategorisor);
?>

  	<h2>Kategori Listeleme</h2>
  	<div align="right">
              <a href=""><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>

            </div>
<table id="datatable-responsive" class="table  table-bordered " cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Kategori Ad</th>
                  <th>Kategori Sira</th>                                                     
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>
                <?php
                $say=0;
                  while($kategoricek=mysqli_fetch_assoc($sorgu)) { $say++?>

                <tr>
                 <td width="20"><?php echo $say ?></td>
                 <td><?php echo $kategoricek["kategori_ad"] ?></td>                
                 <td><?php echo $kategoricek["kategori_sira"] ?></td>
                 
                 


            <td><center><a href=""><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
            <td><center><a href=""><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
          </tr>

          <?php  } ?>
        </tbody>
      </table>
   
<?php include 'footer.php'; ?>