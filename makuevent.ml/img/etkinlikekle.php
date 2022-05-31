<?php
if(isset($_GET['etkinlikekle'])){

    session_start();
    include_once("../data/baglanti.php");
    mysqli_set_charset($baglan, "utf8");
    $ad = addslashes(mb_convert_case($_POST['ad'], MB_CASE_TITLE, "UTF-8"));
    $saat = $_POST['saat'];
    $adres =addslashes($_POST['adres']);
    $tarih =$_POST['tarih'];
    $il= $_POST['il'];
    $ilce=$_POST['ilce'];
    $kullanici_id=$_POST['kullanici'];
    $aciklama=addslashes($_POST['aciklama']);
    $kategori=$_POST['kategori'];
    $facebook=$_POST['facebook'];
    $twitter=$_POST['twitter'];
    $instagram=$_POST['instagram'];
    $hata=0;
    $sql="SELECT ad FROM etkinlikler";
    $sorgu=mysqli_query($baglan,$sql);

    $simditarih=date("d.m.y");

    if(strtotime($tarih) > strtotime($simditarih)){

        while ( $sonuc=mysqli_fetch_row($sorgu)) {
            if ($ad==$sonuc[0]) {
                $hata=1;
            }
        }
            if ($hata==0) {

                 if(isset($_FILES["foto"])){
                                    $tmp_name = $_FILES["foto"]["tmp_name"];
                                    $name = $_FILES["foto"]["name"];
                                    $dizin = 'etkinlik/';
                                    $file_path = $dizin.basename($ad .'.jpeg'); 
                                    $veri="img/".$file_path;
                                    
                                    if(move_uploaded_file($tmp_name, $file_path)){

                                        $sql="INSERT INTO etkinlikler(ad,tarih,saat,adres, il, ilce, kullanici_id, aciklama,kategori,foto,facebooklink,twitterlink,instagramlink) VALUES ('$ad','$tarih','$saat','$adres','$il','$ilce','$kullanici_id','$aciklama','$kategori','$veri','$facebook','$twitter','$instagram')";
                                    
                                        mysqli_query($baglan,$sql);
                                        header('Location: ../admin/index.php?sayfa=etkinlikekle&success');
                                    }else{
                                       header('Location: ../admin/index.php?sayfa=etkinlikekle&fotohata');
                                    }
                                     
                }else{
                    header('Location: ../admin/index.php?sayfa=etkinlikekle&fotohata');
                }
            }
            else{
                    header('Location: ../admin/index.php?sayfa=etkinlikekle&adhata');
                }       

    }
    else{
       header('Location: ../admin/index.php?sayfa=etkinlikekle&tarihhata');
    }
}
elseif (isset($_GET['haberekle'])) {


    include_once("../data/baglanti.php");
    mysqli_set_charset($baglan, "utf8");
    $ad = mb_convert_case($_POST['ad'], MB_CASE_TITLE, "UTF-8");
    $saat = $_POST['saat'];
    $adres =addslashes($_POST['adres']);
    $tarih =$_POST['tarih'];
    $aciklama=addslashes($_POST['aciklama']);
    $mekan=addslashes($_POST['mekan']);
    $hata=0;
    
    $sql="SELECT etkinlikad FROM haberler";
    $sorgu=mysqli_query($baglan,$sql);

    $simditarih=date("d.m.y");

    if(strtotime($tarih) > strtotime($simditarih)){

        while ( $sonuc=mysqli_fetch_row($sorgu)) {
            if ($ad==$sonuc[0]) {
                $hata=1;
            }
        }
            if ($hata==0) {

                 if(isset($_FILES["foto"])){
                                    $tmp_name = $_FILES["foto"]["tmp_name"];
                                    $name = $_FILES["foto"]["name"];
                                    $dizin = 'etkinlikhaberleri/';
                                    $file_path = $dizin.basename($ad .'.jpeg'); 
                                    $veri="img/".$file_path;
                                
                                    if(move_uploaded_file($tmp_name, $file_path)){

                                        $sql="INSERT INTO haberler(etkinlikad,tarih,saat,aciklama,foto,mekan,adres) VALUES ('$ad','$tarih','$saat','$aciklama','$veri','$mekan','$adres')";
                                    
                                        mysqli_query($baglan,$sql);
                                        header('Location: ../admin/index.php?sayfa=etkinlikhaberlerekle&success');
                                    }else{
                                       header('Location: ../admin/index.php?sayfa=eetkinlikhaberlerekle&fotohata');
                                    }
                                     
                }else{
                    header('Location: ../admin/index.php?sayfa=etkinlikhaberlerekle&fotohata');
                }
            }
            else{
                    header('Location: ../admin/index.php?sayfa=etkinlikhaberlerekle&adhata');
                }       

    }
    else{
       header('Location: ../admin/index.php?sayfa=etkinlikhaberlerekle&tarihhata');
    }

}
elseif (isset($_GET['sliderekle'])) {

    include_once("../data/baglanti.php");
    mysqli_set_charset($baglan, "utf8");
    $ad = mb_convert_case($_POST['ad'], MB_CASE_TITLE, "UTF-8");
   
    if(isset($_FILES["foto"])){
        $tmp_name = $_FILES["foto"]["tmp_name"];
        $name = $_FILES["foto"]["name"];
        $dizin = 'slider/';
        $file_path = $dizin.basename($ad .'.jpeg'); 
        $veri="img/".$file_path;
                                
        if(move_uploaded_file($tmp_name, $file_path)){

            $sql="INSERT INTO slider(fotolink,aciklama) VALUES ('$veri','$ad')";
                                    
            mysqli_query($baglan,$sql);
                header('Location: ../admin/index.php?sayfa=sliderekle&success');
        }else{
            header('Location: ../admin/index.php?sayfa=sliderekle&fotohata');
        }
    }

}
else{

    session_start();
    include_once("../data/baglanti.php");
    mysqli_set_charset($baglan, "utf8");
    $ad = addslashes(mb_convert_case($_POST['ad'], MB_CASE_TITLE, "UTF-8"));
    $saat = $_POST['saat'];
    $adres = addslashes($_POST['adres']);
    $tarih =$_POST['tarih'];
    $il= $_POST['il'];
    $ilce=$_POST['ilce'];;
    $kullanici_id=$_SESSION['id'];
    $aciklama=addslashes($_POST['aciklama']);
    $kategori=$_POST['kategori'];;
    $facebook=$_POST['facebook'];;
    $twitter=$_POST['twitter'];;
    $instagram=$_POST['instagram'];;
    $hata=0;
    $sql="SELECT ad FROM etkinlikler";
    $sorgu=mysqli_query($baglan,$sql);

    $simditarih=date("d.m.y");

    if(strtotime($tarih) > strtotime($simditarih)){

        while ( $sonuc=mysqli_fetch_row($sorgu)) {
            if ($ad==$sonuc[0]) {
                $hata=1;
            }
        }
            if ($hata==0) {

                 if(isset($_FILES["foto"])){
                                    $tmp_name = $_FILES["foto"]["tmp_name"];
                                    $name = $_FILES["foto"]["name"];
                                    $dizin = 'etkinlik/';
                                    $file_path = $dizin.basename($ad .'.jpeg'); 
                                    $veri="img/".$file_path;
                                    if(move_uploaded_file($tmp_name, $file_path)){

                                        $sql="INSERT INTO etkinlikler(ad,tarih,saat,adres, il, ilce, kullanici_id, aciklama,kategori,foto,facebooklink,twitterlink,instagramlink) VALUES ('$ad','$tarih','$saat','$adres','$il','$ilce','$kullanici_id','$aciklama','$kategori','$veri','$facebook','$twitter','$instagram')";
                                    
                                        mysqli_query($baglan,$sql);
                                        header('Location: ../index.php?sayfa=etkinlikeklepage&success');
                                    }else{
                                       header('Location: ../index.php?sayfa=etkinlikeklepage&fotohata');
                                    }
                                     
                }else{
                    header('Location: ../index.php?sayfa=etkinlikeklepage&fotohata');
                }
            }
            else{
                    header('Location: ../index.php?sayfa=etkinlikeklepage&adhata');
                }       

    }
    else{
        header('Location: ../index.php?sayfa=etkinlikeklepage&tarihhata');
    }
}





?>