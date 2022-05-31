<?php
session_start();

include_once("baglanti.php");


$sql="SELECT id,email, sifre FROM `kullanicilar`;";
$sorgu = mysqli_query($baglan, $sql);

if (!empty($_POST['email']) && !empty($_POST['password'])) {

	while( $sonuc=mysqli_fetch_row($sorgu) ){
		if ($_POST['email']==$sonuc[1] && $_POST['password']==$sonuc[2]) {
			$_SESSION['id']=$sonuc[0];
			header('Location: ../index.php?sayfa=home');


		}else{
				$_SESSION['hata']="Kullanıcıadışifreyanlış";
				header('Location: ../index.php?sayfa=login');
				
			}
	}
}
else{
	$_SESSION['hata1']="kutularboş";
	header('Location: ../index.php?sayfa=login');
	
}

?>