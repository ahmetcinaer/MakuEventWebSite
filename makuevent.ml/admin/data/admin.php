<?php

session_start();
ob_start();
include_once("baglanti.php");


if (isset($_GET['giris'])) {
	

	$kadi=$_POST['kadi'];
	$sifre=$_POST['sifre'];
	$sql="SELECT * FROM admin";
	$sorgu=mysqli_query($baglan,$sql);
    $durum=0;
	if (!empty($kadi) && !empty($sifre)) {
		while( $sonuc=mysqli_fetch_row($sorgu) ){

			if ($kadi=$sonuc[1] && $sifre==$sonuc[2]) {

                $durum=1;
				$_SESSION['adminid']=$sonuc[0];
                $_SESSION['admin']=$sonuc[3];
				header('Location: ../index.php?sayfa=home');

			}
            
        }
        if($durum==0){					
            
            $_SESSION['hata']="Kullanıcıadışifreyanlış";
			header('Location: ../login.php');
	
		}
	}
	else{
		$_SESSION['hata1']="kutularboş";
		header('Location: ../login.php');
		
	}
}
elseif (isset($_GET['cikis'])) {
	session_destroy();
    header('Location: ../login.php');
}



?>