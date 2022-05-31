<?php

include_once("baglanti.php");

$sql="SELECT kullanici_id FROM etkinlikler WHERE id=" .$_GET['etkid'];
echo $_GET['etkid'];
$sorgu=mysqli_query($baglan,$sql);
$id=mysqli_fetch_row($sorgu);

$sql="DELETE FROM `etkinlikler` WHERE id=" .$_GET['etkid']  ;
$sorgu=mysqli_query($baglan,$sql);


header("Location: ../index.php?sayfa=kullaniciekrani&id=".$id[0]);

?>