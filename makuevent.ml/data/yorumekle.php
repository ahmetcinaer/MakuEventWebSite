<?php

include_once("baglanti.php");

if (isset($_GET['home'])) {

$ad=mb_convert_case($_POST['name'], MB_CASE_TITLE, "UTF-8");
$yorum=$_POST['comment'];
$sql="INSERT INTO homeyorum( ad, yorum) VALUES ('$ad','$yorum')";
mysqli_query($baglan,$sql);
header("Location: ../index.php?sayfa=home");

}elseif (isset($_GET['contact'])) {
    
$ad=mb_convert_case($_POST['name'], MB_CASE_TITLE, "UTF-8");
$email=$_POST['email'];
$konu=$_POST['konu'];
$mesaj=$_POST['mesaj'];
$sql="INSERT INTO contactmesaj( ad,email,konu, mesaj,durum) VALUES ('$ad','$email','$konu','$mesaj','0')";
mysqli_query($baglan,$sql);
header("Location: ../index.php?sayfa=home");
}
elseif (isset($_GET['etkinlikid'])){

$ad=mb_convert_case($_POST['name'], MB_CASE_TITLE, "UTF-8");
$yorum=$_POST['comment'];
$etkinlikid=$_GET['etkinlikid'];
$sql="INSERT INTO yorum( ad, yorum, etkinlikid) VALUES ('$ad','$yorum','$etkinlikid')";
mysqli_query($baglan,$sql);
header("Location: ../index.php?sayfa=etkinlikhaberleri_detay&id=".$etkinlikid);

}




?>