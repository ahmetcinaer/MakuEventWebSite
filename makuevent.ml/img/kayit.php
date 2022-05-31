<?php



include_once("../data/baglanti.php");
mysqli_set_charset($baglan, "utf8");
$ad = mb_convert_case($_POST['ad'], MB_CASE_TITLE, "UTF-8");
$email = $_POST['email'];
$sifre = $_POST['password'];
$okul = $_POST['ogrno'];
$telefon= $_POST['telno'];
$hata=0;
$hata1=0;
$hata2=0;
$sql="SELECT * FROM kullanicilar";
$sorgu=mysqli_query($baglan,$sql);
while ( $sonuc=mysqli_fetch_row($sorgu)) {
    if ($email==$sonuc[3]) {
        $hata=1;
    }
    if ($okul==$sonuc[5]) {
        $hata1=1;
    }
    if ($telefon==$sonuc[6]) {
        $hata2=2;
    }


}

if ($hata==0) {
    if ($hata1==0) {
        if ($hata2==0) {
                if(isset($_FILES["foto"])){
                    $tmp_name = $_FILES["foto"]["tmp_name"];
                    $name = $_FILES["foto"]["name"];
                    $dizin = 'kullanicilar/';
                    $file_path = $dizin.basename($ad ." " .$okul .'.jpeg'); 
                    $veri="img/".$file_path;
                    if(move_uploaded_file($tmp_name, $file_path)){
                        $sql="INSERT INTO kullanicilar( ad, email, sifre, okul,telefon,foto) VALUES ('$ad','$email','$sifre','$okul','$telefon','$veri')";
                    
                        mysqli_query($baglan,$sql);
                        header('Location: ../index.php?sayfa=login&success');
                    }else{
                        header('Location: ../index.php?sayfa=login&fotohata');}
                }
        }else{
            header('Location: ../index.php?sayfa=login&telefonhata');}
    }
    else{
        header('Location: ../index.php?sayfa=login&okulnohata');}
}else{
    header('Location: ../index.php?sayfa=login&mailhata');
}


        	

?>