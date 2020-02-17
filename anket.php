
<?php
include 'admin/islemler/baglan.php';

$anket="SELECT * FROM anket order by soru_id asc";
$sorgu=mysqli_query($db,$anket);

 ?>


<form action="admin/islemler/islem.php" method="post" name="anket" data-parsley-validate > 
  <table border="1" width="350" cellspacing="0" cellpadding="0" bordercolor="gray">
   <tbody>
   
 <?php
    while ($anketcek=mysqli_fetch_assoc($sorgu)) { ?>

    <tr>
     <td width="100%" colspan="2">
<p align="left"><b><?php echo $anketcek["soru"]; ?></b></p>
     </td>
    </tr>

    <tr>
     <td><input type="radio" name="secenek_id" value="<?php echo $anketcek["secenek_id"]; ?>">
        
     </td>
     <td width="96%"><?php echo  $anketcek["secenek"] ?></td>
    </tr>
   
<?php }?>
   <tr>
     <td colspan="2">



 <a href="index.php?soru_id=<?php echo $anketcek["soru_id"] ?>&seceneksil=ok"><button  style="background: #dd0000;color: #fff;border: 0;    padding: 6px 16px;
    margin: 0 4px 0 0;
    min-width: 64px;    border-radius: 2px;" name="anket" class="btn btn-danger btn-xs">GÖNDER</button></a>
  
  <input  style="background: #dd0000;color: #fff;border: 0;    padding: 6px 16px;
    margin: 0 4px 0 0;
    min-width: 64px;    border-radius: 2px;" type="reset" value="Temizle"></td>
    </tr>
    
   </tbody>
  </table>
</form>