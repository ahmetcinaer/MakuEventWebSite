<div class="container" style="padding: 10% 15% 2% 15%;margin-top: -8%;">
	<div class="row" style=" background-size: 100% 100% ;width: 100%;padding:5%;height: 100%; margin-top: 5%; border-radius: 15px; padding box-shadow: 10px 10px 10px #000; background-color: #361c6c;text-align:center ;" >
			<div class="col-md-8" style="width: 100%;height: 30%; margin-top: 4%;  padding: 10%";">
              <div class="card mb-3">
                <div class="card-body">
                  <?php
                  if (isset($_GET['success'])) { ?>

                  <p style="color: #fff;text-align: center;margin-top: -10%;font-weight: bold;">Başarı ile etkinlik oluşturuldu...</p>
            
                  <?php } 
                  if (isset($_GET['fotohata'])) { ?>

                  <p style="color: #fff;text-align: center; margin-top: -10%;font-weight: bold;">Fotoğraf Yüklenmesi Gerek..</p>
                <?php}
                  if (isset($_GET['adhata'])) { ?>

                  <p style="color: #fff;text-align: center; margin-top: -10%;font-weight: bold;">Aynı İsimde Etkinlik Sistemde Zaten Kayıtlı..</p>

                <?php } 
                  if (isset($_GET['tarihhata'])) { ?>

                  <p style="color: #fff;text-align: center; margin-top: -10%;font-weight: bold;">Etkinlik Tarihi Bugünün Tarihinden Küçük Olamaz..</p>

                <?php } ?>

                  <h1 style="color:#fff">Etkinlik Ekle</h1>
<form action="img/etkinlikekle.php" method="POST" enctype="multipart/form-data"> 
                  <div class="row" style="margin-top: 7%;" > 
                    <div class="col-sm-3">
                      <h6 style="color:#fff;" class="mb-0"><a style="color:#fff;">Etkinlik Adı</a></h6>
                    </div>
                    <div style="color:#fff; text-align:center;float: left;" class="col-sm-9 ">
                    	<input type="text" name="ad" data-msg-required="Lütfen Etkinlik Adı giriniz." class="form-control" required>
                    </div>
                  </div>

                  <hr style="">

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 style="color:#fff;float: left;"  class="mb-"><a style="color:#fff;">Tarih</a></h6>
                    </div>
                    <div style="color:#fff" class="col-sm-9 text-secondary">
                      <input type="date"  value="2021-01-01" min="2021-01-01" max="2050-01-01" name="tarih" data-msg-required="Lütfen Tarih giriniz." class="form-control" required>
                    </div>
                  </div>

                  <hr style="">

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 style="color:#fff;float: left;"  class="mb-"><a style="color:#fff;">Saat</a></h6>
                    </div>
                    <div style="color:#fff" class="col-sm-9 text-secondary">
                      <input type="time" name="saat" value="00:00" data-msg-required="Lütfen Saat giriniz." class="form-control" required>
                    </div>
                  </div>

                  <hr style=""> 

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 style="color:#fff;float: left;" class="mb-0"><a style="color:#fff;">Adres</a></h6>
                    </div>
                    <div style="color:#fff" class="col-sm-9 text-secondary">
                      <input type="text" name="adres" data-msg-required="Lütfen Adresi giriniz." class="form-control" required>
                    </div>
                  </div>    

                  <hr style=""> 

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 style="color:#fff;float: left;" class="mb-0"><a style="color:#fff;">İl</a></h6>
                    </div>
                    <div style="color:#fff" class="col-sm-9 text-secondary">
                      <select name="il" id="iller" style="color: #000; width: 100%;height: 34px;" data-msg-required="Lütfen İl giriniz." required >
                        <option value="">Seçiniz..</option>
                        <?php 
                          $sql="SELECT * FROM `iller`";
                          $sorgu=mysqli_query($baglan,$sql);
                          while ($sonuc=mysqli_fetch_row($sorgu)) {?>
                            <option value="<?php echo mb_convert_case($sonuc[1],MB_CASE_LOWER,"UTF-8");?>"><?php echo $sonuc[1];?></option>
                          
                          <?php }

                        ?>
                      </select>
                    </div>
                  </div>

                  <hr style=""> 

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 style="color:#fff;float: left;" class="mb-0"><a style="color:#fff;">İlçe</a></h6>
                    </div>
                    <div style="color:#fff" class="col-sm-9 text-secondary">
                      <select name="ilce" id="ilce" data-msg-required="Lütfen ilçe giriniz." style="color: #000; width: 100%;height: 34px;" required>
                        <option value="">Seçiniz..</option>
                        <?php 
                          $sql="SELECT * FROM `ilce`";
                          $sorgu=mysqli_query($baglan,$sql);
                          while ($sonuc=mysqli_fetch_row($sorgu)) {
                            ?>
                            
                            <option value="<?php echo mb_convert_case($sonuc[1],MB_CASE_LOWER,"UTF-8");?>"><?php echo $sonuc[1];?></option>
                          
                          <?php }

                        ?>
                      </select>
                    </div>
                  </div>  

                  <hr style="">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 style="color:#fff;" class="mb-0"><a style="color:#fff;">Açıklama</a></h6>
                    </div>
                    <div style="color:#fff; text-align:center;float: left;" class="col-sm-9 ">
                      <input type="text" name="aciklama" data-msg-required="Lütfen Açıklama giriniz." class="form-control" required>
                    </div>
                  </div>

                  <hr style="">

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 style="color:#fff;float: left;"  class="mb-"><a style="color:#fff;">Kategori</a></h6>
                    </div>
                    <div style="color:#fff" class="col-sm-9 text-secondary">
                      <select name="kategori" data-msg-required="Lütfen Kategori Seçiniz" style="color: #000; width: 100%;height: 34px;" required>
                        <option value="">Seçiniz..</option>
                        <option value="spor">Spor</option>
                        <option value="toplanti">Toplantı</option>
                        <option value="bulusma">Buluşma</option>
                        <option value="sohbet">Sohbet</option>
                        <option value="konser">Konser</option>
                        <option value="gezi">Gezi</option>
                      </select>
                    </div>
                  </div>

                  <hr style="">

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 style="color:#fff;float: left;"  class="mb-"><a style="color:#fff;">Etkinlik Fotoğrafı(800x500) </a></h6>
                    </div>
                    <div style="color:#fff;" class="col-sm-9 text-secondary">
                    <input style="margin-left: 20%;" type="file" data-msg-required="Lütfen Fotoğraf Yükleyiniz." name="foto" required>
                    </div>
                  </div>

                  <hr style=""> 

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 style="color:#fff;float: left;" class="mb-0"><a style="color:#fff;">Facebook Adres</a></h6>
                    </div>
                    <div style="color:#fff" class="col-sm-9 text-secondary">
                      <input type="text" name="facebook" class="form-control">
                    </div>
                  </div>

                  <hr style=""> 

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 style="color:#fff;float: left;" class="mb-0"><a style="color:#fff;">Twitter Adres</a></h6>
                    </div>
                    <div style="color:#fff" class="col-sm-9 text-secondary">
                      <input type="text" name="twitter" class="form-control">
                    </div>
                  </div>

                  <hr style=""> 

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 style="color:#fff;float: left;" class="mb-0"><a style="color:#fff;">İnstagram Adres</a></h6>
                    </div>
                    <div style="color:#fff" class="col-sm-9 text-secondary">
                      <input type="text" name="instagram" class="form-control">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                      <button class="btn btn-info" style="width:100px;height: 40px;float:right;margin-top: 5%;" >Ekle</button>
                    </div>
                  </div>
                  

</form>
        </div>
      </div>
    </div>
	</div>
</div>
