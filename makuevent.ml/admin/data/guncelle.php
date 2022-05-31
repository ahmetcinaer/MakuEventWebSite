<?php
include_once("baglanti.php");

if(isset($_GET['hakkimizda'])){

    $hakkimizda=$_POST['hakkimizda'];
    $misyon=$_POST['misyon'];
    $vizyon=$_POST['vizyon'];
    
    $sql = "UPDATE hakkimizda SET hakkimizda='".$hakkimizda ."', misyon='".$misyon."', vizyon='".$vizyon."' WHERE id='1'";

    mysqli_query($baglan,$sql);

    header('Location: ../index.php?sayfa=hakkimizda&success');
}
elseif(isset($_GET['tarihce'])){

    $yil=$_POST['yil'];
    $aciklama=$_POST['aciklama'];
    $sql="INSERT INTO tarihce( yıl, aciklama) VALUES ('$yil','$aciklama')";

    mysqli_query($baglan,$sql);

    header('Location: ../index.php?sayfa=hakkimizda&tarihcesuccess');
    
}
elseif(isset($_GET['ayarlar'])){

$logo=$_POST['logo'];
$title=$_POST['title'];
$keywords=$_POST['keywords'];
$author=$_POST['author'];
$telefon=$_POST['telefon'];
$adres=addslashes($_POST['adres']);
$mail=$_POST['mail'];
$aciklama=addslashes($_POST['aciklama']);
$copyright=$_POST['copyright'];
$facebook=$_POST['facebook'];
$twitter=$_POST['twitter'];
$instagram=$_POST['instagram'];
$url=$_POST['url'];

    $sql="UPDATE site_ayarlar SET logo='$logo',title='$title',keywords='$keywords',author='$author',telefon='$telefon',adres='$adres',mail='$mail',footeraciklama='$aciklama',copyright='$copyright',facebooklink='$facebook',twitterlink='$twitter',instagramlink='$instagram',url='$url' WHERE id='1'";

    mysqli_query($baglan,$sql);

    header('Location: ../index.php?sayfa=ayarlar&success');
    
}
elseif(isset($_GET['okundu'])){

$id=$_GET['id'];

$sql="UPDATE contactmesaj SET durum='1' WHERE id=" .$id;

    mysqli_query($baglan,$sql);

header('Location: ../index.php?sayfa=mesajlar');
    
}
elseif(isset($_GET['mesajsil'])){

$id=$_GET['id'];

$sql="DELETE FROM contactmesaj WHERE id=" .$id;

    mysqli_query($baglan,$sql);

header('Location: ../index.php?sayfa=mesajlar');
    
}
elseif(isset($_GET['etkinliksil'])){

$id=$_GET['id'];

$sql="DELETE FROM etkinlikler WHERE id=" .$id;

    mysqli_query($baglan,$sql);

header('Location: ../index.php?sayfa=etkinlikler');
    
}
elseif(isset($_GET['etkinlikhabersil'])){

$id=$_GET['id'];

$sql="DELETE FROM haberler WHERE id=" .$id;

    mysqli_query($baglan,$sql);

header('Location: ../index.php?sayfa=etkinlikhaberler');
    
}
elseif(isset($_GET['etkinlikhaberguncelle'])){

$id=$_GET['id'];
$ad=addslashes($_POST['ad']);
$tarih=$_POST['tarih'];
$saat=$_POST['saat'];
$aciklama=addslashes($_POST['aciklama']);
$foto=$_POST['foto'];
$mekan=addslashes($_POST['mekan']);
$adres=addslashes($_POST['adres']);


    $sql="UPDATE haberler SET etkinlikad='$ad',tarih='$tarih',saat='$saat',aciklama='$aciklama',foto='$foto',mekan='$mekan',adres='$adres' WHERE id='$id'";

    mysqli_query($baglan,$sql);

    header('Location: ../index.php?sayfa=etkinlikhaberler');  
}
elseif(isset($_GET['etkinlikguncelle'])){

$id=$_GET['id'];
$ad=addslashes($_POST['ad']);
$tarih=$_POST['tarih'];
$saat=$_POST['saat'];
$adres=addslashes($_POST['adres']);
$aciklama=addslashes($_POST['aciklama']);
$kategori=$_POST['kategori'];
$foto=$_POST['foto'];
$facebook=$_POST['facebook'];
$twitter=$_POST['twitter'];
$instagram=$_POST['instagram'];

    $sql="UPDATE etkinlikler SET ad='$ad',tarih='$tarih',saat='$saat',adres='$adres',aciklama='$aciklama',kategori='$kategori',foto='$foto',facebooklink='$facebook',twitterlink='$twitter',instagramlink='$instagram' WHERE id='$id'";

    mysqli_query($baglan,$sql);

    header('Location: ../index.php?sayfa=etkinlikler');

}
elseif(isset($_GET['kullanici'])){

$id=$_GET['id'];
$ad=$_POST['ad'];
$mail=$_POST['email'];
$sifre=$_POST['sifre'];
$okul=$_POST['okul'];
$telefon=$_POST['telefon'];
$foto=$_POST['foto'];

    $sql="UPDATE kullanicilar SET ad='$ad',email='$mail',sifre='$sifre',okul='$okul',telefon='$telefon',foto='$foto' WHERE id='$id'";

    mysqli_query($baglan,$sql);

    header('Location: ../index.php?sayfa=kullanicilar');

}
elseif(isset($_GET['kullanicisil'])){

$id=$_GET['id'];

$sql="DELETE FROM kullanicilar WHERE id=" .$id;
 
    mysqli_query($baglan,$sql);

header('Location: ../index.php?sayfa=kullanicilar');
    
}
elseif(isset($_GET['yorumsil'])){

$id=$_GET['id'];

$sql="DELETE FROM yorum WHERE id=" .$id;
 
    mysqli_query($baglan,$sql);

header('Location: ../index.php?sayfa=yorumlar');
    
}
elseif(isset($_GET['homeyorumsil'])){

$id=$_GET['id'];

$sql="DELETE FROM homeyorum WHERE id=" .$id;
 
    mysqli_query($baglan,$sql);

header('Location: ../index.php?sayfa=homeyorumlar');
    
}
elseif(isset($_GET['slidersil'])){

$id=$_GET['id'];

$sql="DELETE FROM slider WHERE id=" .$id;
 
    mysqli_query($baglan,$sql);

header('Location: ../index.php?sayfa=slider');
    
}
?>