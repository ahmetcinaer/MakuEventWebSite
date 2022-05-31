<div class="content-wrapper" style="min-height: 1419.25px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Etkinlik Ekle</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?sayfa=home#">Anasayfa</a></li>
              <li class="breadcrumb-item active">Etkinlik Ekle</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="">
        <form action="../img/etkinlikekle.php?etkinlikekle" method="POST" enctype="multipart/form-data">
          <div class="col-md-12" style="width: 100%;">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Etkinlik Ekle</h3>
                <?php 
                  $yil=date("20y");
                  $ay=date("m");
                  $gun=date("d");

                  ?>
              </div>
              <div class="card-body" style="display: block;">
                <div class="form-group">
                  <label for="inputDescription">Etkinlik Adı</label>
                  <input type="text" name="ad" id="inputProjectLeader" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputDescription">Tarih</label>
                  <input type="date" name="tarih" id="inputProjectLeader" value="<?php echo $yil ."-" .$ay ."-" .$gun;?>" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputDescription">Saat</label>
                  <input type="time" name="saat" id="inputProjectLeader" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputDescription">Adres</label>
                  <input type="text" name="adres" id="inputProjectLeader" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputStatus">İl</label>
                  <select name="il" class="form-control custom-select">
                    <option selected="" disabled="">İl Seçiniz</option>
                    <?php 
                            $sql="SELECT * FROM `iller`";
                            $sorgu=mysqli_query($baglan,$sql);
                            while ($sonuc=mysqli_fetch_row($sorgu)) {?>
                              <option value="<?php echo mb_convert_case($sonuc[1],MB_CASE_LOWER,"UTF-8");?>"><?php echo $sonuc[1];?></option>
                            
                            <?php }

                          ?>
                  </select> 
                  <div class="form-group">
                  <label for="inputStatus">İlçe</label>
                  <select name="ilce" class="form-control custom-select">
                    <option >İlçe Seçiniz</option>
                    <?php 
                            $sql="SELECT * FROM `ilce`";
                            $sorgu=mysqli_query($baglan,$sql);
                            while ($sonuc=mysqli_fetch_row($sorgu)) {
                              ?>
                              
                              <option value="<?php echo mb_convert_case($sonuc[1],MB_CASE_LOWER,"UTF-8");?>"><?php echo $sonuc[1];?></option>
                            
                            <?php }

                          ?>
                  </select>
                <div class="form-group">
                  <label for="inputDescription">Kullanıcı Adı / ID</label>
                  <input type="text" name="kullanici" id="inputProjectLeader" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputDescription">Etkinlik Açıklama</label>
                  <textarea id="inputDescription" name="aciklama" class="form-control" rows="4"></textarea>
                </div>
                <label for="inputStatus">Kategori</label>
                  <select name="kategori" class="form-control custom-select">
                    <option selected="" disabled="">Kategori Seçiniz</option>
                    <option value="">Seçiniz..</option>
                          <option value="spor">Spor</option>
                          <option value="topluluk">Topluluk</option>
                          <option value="bulusma">Buluşma</option>
                          <option value="sohbet">Sohbet</option>
                          <option value="konser">Konser</option>
                          <option value="gezi">Gezi</option>
                  </select>
                <div class="form-group">
                  <label for="inputDescription">Fotoğraf Ekle(800x500)</label>
                  <input type="file" name="foto" id="inputProjectLeader" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="inputDescription">Facebook Link</label>
                  <input type="text" name="facebook" id="inputProjectLeader" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputDescription">Twitter Link</label>
                  <input type="text" name="twitter" id="inputProjectLeader" class="form-control">
                </div>
                <div class="form-group">
                  <label for="inputDescription">Instagram Link</label>
                  <input type="text" name="instagram" id="inputProjectLeader" class="form-control">
                  </div>
              <!-- /.card-body -->
                    </div>
                <!-- /.card -->
                  </div>
                 </div>
                <div class="row">
                  <div class="col-12">
                  <button class="btn btn-success float-right" style="margin: 1%;">Yayınla </button>
                  </div>
                </div>
          </div> 
        </div>
      </form>
    </div>
  </section>
</div>