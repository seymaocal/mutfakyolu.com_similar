<?php 
include 'baglan.php';

if ($_GET['yorum_onay']=="ok") {
$yorum_id=$_GET['yorum_id'];
$yorum_onay=$_GET["yorum_one"];

$sorgu="UPDATE yorumlar SET yorum_onay=$yorum_one WHERE yorum_id=$yorum_id";
$update=mysqli_query($db,$sorgu);
	
	if ($update) {
		Header("Location:../yorum.php?durum=ok&yorum_onay=$yorum_onay");

	} else {

		Header("Location:../yorum.php?durum=no&yorum_onay=$yorum_id");
	}

}
?>