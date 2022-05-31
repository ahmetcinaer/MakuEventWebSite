<div class="content-wrapper" style="min-height: 1419.25px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Etkinlik Haber Ekle</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?sayfa=home">Anasayfa</a></li>
              <li class="breadcrumb-item active">Etkinlik Haber Ekle</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="">
        <form action="../img/etkinlikekle.php?haberekle" method="POST" enctype="multipart/form-data">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Etkinlik Haber Ekle</h3>
              <?php 
                  $yil=date("20y");
                  $ay=date("m");
                  $gun=date("d");

                  ?>
            </div>
            <div class="card-body" style="display: block;">
              <div class="form-group">
                <label for="inputDescription">Etkinlik Adı</label>
                <input type="text" id="inputDescription" name="ad" class="form-control">
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
                <label for="inputDescription">Etkinlik Haber Açıklama</label>
                <textarea id="inputDescription" name="aciklama" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputDescription">Fotoğraf (500x700)</label>
                <input type="file" name="foto" id="inputProjectLeader" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Mekan</label>
                <input type="text" name="mekan" id="inputProjectLeader" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">Adres</label>
                <textarea id="inputDescription" name="adres" class="form-control" rows="4"></textarea>
              </div>
              <div class="row">
                <div class="col-12">
                  <button class="btn btn-primary float-right" style="margin: 1%;"> Yayınla </button>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </form>
      </div>
    </section>
    <!-- /.content -->
  </div>