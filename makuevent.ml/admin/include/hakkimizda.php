<div class="content-wrapper" style="min-height: 1419.25px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hakkımızda Ayarlar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?sayfa=home">Anasayfa</a></li>
              <li class="breadcrumb-item active">Hakkımızda Ayarlar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Hakkımızda</h3>
              <?php 
              include_once("data/baglanti.php");

                $sql="SELECT * FROM `hakkimizda`";
                $sorgu=mysqli_query($baglan,$sql);

                $sonuc=mysqli_fetch_row($sorgu)
?>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
<form action ="data/guncelle.php?hakkimizda" method="Post">
            <div class="card-body" style="display: block;">
              <div class="form-group">
                <label for="inputDescription">Hakkımızda Açıklama</label>
                <textarea id="inputDescription" name="hakkimizda" class="form-control" rows="4"><?php echo $sonuc[1] ?></textarea>
              </div>
              <div class="form-group">
                <label for="inputDescription">Misyon Açıklama</label>
                <textarea id="inputDescription"  name="misyon" class="form-control" rows="4"><?php echo $sonuc[2] ?></textarea>
              </div>
              <div class="form-group">
                <label for="inputDescription">Vizyon Açıklama</label>
                <textarea id="inputDescription" name="vizyon" class="form-control" rows="4"><?php echo $sonuc[3] ?></textarea>
              </div>
              <div class="row">
                <div class="col-12">
                  <input type="submit" value="Hakkımızda Kaydet" class="btn btn-success float-right">
                </div>
              </div>            
</form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Tarihçe </h3>
            </div>

<form action ="data/guncelle.php?tarihce" method="Post">
            <div class="card-body">
              <div class="form-group">
                <label for="inputSpentBudget">Tarihçe Yılı</label>
                <input type="number" name=" yil"   id="inputSpentBudget" class="form-control" min="2012" max="2099" step="1" value="2021" />
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Tarihçe Açıklama</label>
                <input type="text" name="aciklama" id="inputEstimatedDuration" class="form-control">
              </div>
              <div class="row">
              <div class="col-12">
                <input type="submit" value="Tarihçe Kaydet" class="btn btn-success float-right">
              </div>
      </div>
            </div>
</form>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>