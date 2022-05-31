<?php
				include_once("include/baglanti.php");

                $sql="SELECT * FROM `kullanicilar` WHERE id=".$_GET['id'];
                $sorgu=mysqli_query($baglan,$sql);
                $id=$_GET['id'];
                $sonuc=mysqli_fetch_row($sorgu);

?>

<div class="container" style="padding: 2% 0% 2% 10%;margin-top: -8%;">
	<div class="row" style=" background-size: 800px 800px ;width: 800px;height: 700px; margin-top: 10%; border-radius: 15px; padding: 5%; display: inline-block; box-shadow: 10px 10px 10px #000; background-color: #361c6c;text-align:center ;" >
			<div class="col-md-8" style="width: 300px;height: 300px; margin-top: 5%;">
              <div class="card mb-3">
                <div class="card-body">
                	<form <?php if (isset($_GET['edit'])){echo 'action="include/bilgiguncelle.php?id=';echo $id ;echo'" method="POST"';}
                    		else{echo 'action="" method="GET"';}
                	 ?> >
                	<div class="d-flex flex-column align-items-center text-center">
                    <img src="<?php echo $sonuc[6];?>" alt="Admin" class="rounded-circle" style="width:150px;border-style: solid;border-width: 5px;border-color: #000;border-radius: 20px;">
                  </div>
                  <div class="row" style="margin-top: 7%;" > 
                    <div class="col-sm-3">
                      <h6 style="color:#fff;" class="mb-0"><a style="color:#fff;">Ad Soyad</a></h6>
                    </div>
                    <div style="color:#fff; text-align:center;float: left;" class="col-sm-9 ">
                    	<?php if (isset($_GET['edit'])){echo "<input type='text' class='form-control' name='ad' value='" .$sonuc[1] ."'>";}
                    		else{echo $sonuc[1];}
                     	?>
                    </div>
                  </div>

                  <hr style="">

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 style="color:#fff;float: left;"  class="mb-"><a style="color:#fff;">Email</a></h6>
                    </div>
                    <div style="color:#fff" class="col-sm-9 text-secondary">
                      <?php if (isset($_GET['edit'])){echo "<input type='text' name='email' class='form-control' value='" .$sonuc[2] ."'>";}
                    		else{echo $sonuc[2];}
                     	?>
                    </div>
                  </div>

                  <hr style="">

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 style="color:#fff;float: left;"  class="mb-"><a style="color:#fff;">Telefon</a></h6>
                    </div>
                    <div style="color:#fff" class="col-sm-9 text-secondary">
                      <?php if (isset($_GET['edit'])){echo "<input type='text' name='telefon' class='form-control' value='" .$sonuc[5] ."'>";}
                    		else{echo $sonuc[5];}
                     	?>
                    </div>
                  </div>

                  <hr style=""> 

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 style="color:#fff;float: left;" class="mb-0"><a style="color:#fff;">Okul No</a></h6>
                    </div>
                    <div style="color:#fff" class="col-sm-9 text-secondary">
                      <?php if (isset($_GET['edit'])){echo "<input type='text' name='okulno' class='form-control' value='" .$sonuc[4] ."''>";}
                    		else{echo $sonuc[4];}
                     	?>
                    </div>
                  </div>

                  <hr style="margin-top: -2%">

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 style="color:#fff;" class="mb-0">Şifre</h6>
                    </div>
                    <div style="color:#fff" class="col-sm-9 text-secondary">
                      <?php if (isset($_GET['edit'])){echo "<input type='password' name='sifre' class='form-control' value='" .$sonuc[3] ."''>";}
                    		else{$i=0; while ($i<strlen($sonuc[3])) {
                    			echo "*";
                    			$i=$i+1;
                    		};}
                     	?>
                    </div>
                  </div>
                  <hr style="margin-top: -2%">
                  <?php if (isset($_GET['edit'])){echo ' <div class="row">
                    <div class="col-sm-12">
                      <button class="btn btn-info">Güncelle</button>
                    </div>
                  </div>
                  </form>'
                  ;}else{
                  	echo '
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info "  href="index.php?sayfa=kullaniciekrani&id=';echo $id ;echo'&edit" >Edit</a>
                    </div>
                  </div>';
                  }

                  if (isset($_GET['guncelle'])) {?>
                    <span style="color:#FFF">Güncelleme Başarılı</span>
                  <?php } ?>
                   
                  
              </form>
                </div>
              </div>
 		</div>
    <div class="col-md-8">

<style>
#personel {
border-collapse: collapse;
width: 90%;
float: left;
position: absolute;
margin: -70% 0% 0% 60%;
}
 
#personel td, #personel th {
border: 1px solid #ddd;
padding: 8px;
color: black;
}
 
#personel tr{background-color: #f2f2f2;}
 
 
#personel th {
padding-top: 8px;
padding-bottom: 8px;
text-align: left;
background-color: #2c3e50;
color: white;
}
</style>
 
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300" rel="stylesheet">

<table id="personel">
<tr>
<th>Etkinlik Adı</th>
<th>Ayarlar</th>
<?php include_once("baglanti.php");

$sql="SELECT id,ad FROM etkinlikler WHERE kullanici_id=".$_GET['id'];
$sorgu=mysqli_query($baglan,$sql);
while ( $sonuc=mysqli_fetch_row($sorgu)) {
?>
<tr>
<td><?php echo $sonuc[1];?></td>
<td style="width: 80px;"><span style="background: gray ;width: 50px;height: 25px;float: right; margin-left: -50%;"><a style="color:#fff" href="include/etkinliksil.php?etkid=<?php echo $sonuc[0]; ?>">Sil</a></span></td>
</tr>
<?php }?>


</table>

      
    </div>
	</div>
</div>

