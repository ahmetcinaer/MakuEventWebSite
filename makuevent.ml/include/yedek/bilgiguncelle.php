<?php 
include_once("baglanti.php");
$ad=mb_convert_case($_POST['ad'], MB_CASE_TITLE, "UTF-8");
$email=$_POST['email'];
$sifre=$_POST['sifre'];
$okul=$_POST['okulno'];
$telefon=$_POST['telefon'];
$id=$_GET['id'];
$sql = "UPDATE kullanicilar SET ad='".$ad ."', email='".$email."', sifre='".$sifre."', okul='".$okul."', telefon='".$telefon."'   WHERE id='".$id."'";

mysqli_query($baglan,$sql);

header('Location: ../index.php?sayfa=kullaniciekrani&id=4&guncelle=1');

?>