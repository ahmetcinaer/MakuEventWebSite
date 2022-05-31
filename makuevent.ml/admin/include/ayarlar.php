<div class="content-wrapper" style="min-height: 1419.25px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Site Ayarlar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?sayfa=home">Anasayfa</a></li>
              <li class="breadcrumb-item active">Site Ayarlar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
  <form action="data/guncelle.php?ayarlar" method="POST">
    <?php 

          include_once("data/baglanti.php");
          $sql="SELECT * FROM `site_ayarlar`";
          $sorgu=mysqli_query($baglan,$sql);   
          $sonuc=mysqli_fetch_row($sorgu) ?>

    <section class="content">
      <div class="row">
        <div class="col-md-6"> 
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Genel Site Ayarları</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body" style="display: block; ">
              <div class="form-group">
                <label for="inputDescription">Logo Adresi</label>
                <input id="inputDescription" name="logo" class="form-control" value="<?php echo $sonuc[0];?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Site URL</label>
                <input id="inputDescription" name="url" class="form-control" value="<?php echo $sonuc[13];?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Title</label>
                <input id="inputDescription" name="title" class="form-control" value="<?php echo $sonuc[1];?>">
                <label for="inputDescription3">Author</label>
                <input id="inputDescription3" name="author" class="form-control" value="<?php echo $sonuc[3];?>">
                <label for="inputDescription2">Keywords</label>
                <textarea id="inputDescription2"  name="keywords" class="form-control" rows="5"><?php echo $sonuc[2];?></textarea>
              </div>
          </div>
        </div>
      </div>
      <div class="col-md-6" >
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">İletişim </h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputSpentBudget">Telefon Numarası</label>
                <input type="text" name="telefon"   id="inputSpentBudget" class="form-control" value="<?php echo $sonuc[4];?>" >
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Mail Adresi</label>
                <input type="text" name="mail" id="inputEstimatedDuration" class="form-control" value="<?php echo $sonuc[6];?>" >
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Adres</label>
                <input type="text" name="adres" id="inputEstimatedDuration" class="form-control" value="<?php echo $sonuc[5];?>">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Facebook Link</label>
                <input type="text" name="facebook" id="inputEstimatedDuration" class="form-control" value="<?php echo $sonuc[10];?>">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Twitter Link</label>
                <input type="text" name="twitter" id="inputEstimatedDuration" class="form-control" value="<?php echo $sonuc[11];?>">
              </div>
                <label for="inputEstimatedDuration">İnstagram Link</label>
              <div class="form-group">
                <input type="text" name="instagram" id="inputEstimatedDuration" class="form-control" value="<?php echo $sonuc[12];?>">
              </div>             
            </div>
          </div>
      </div>
      <div class="col-md-12" >
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Footer</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputSpentBudget">Footer Açıklama</label>
                <input type="text" name="aciklama"   id="inputSpentBudget" class="form-control" value="<?php echo $sonuc[7];?>" >
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Copyright</label>
                <input type="text" name="copyright" id="inputEstimatedDuration" class="form-control" value="<?php echo $sonuc[8];?>" >
              </div>
            </div>

          </div>
          <div class="row" style="margin:1%;">
             <div class="col-12">
                 <input type="submit" value="Kaydet" class="btn btn-success float-right" style="width: 120px;">
              </div>
          </div> 
        </div>
      </div>
    </section>
  </form>
</div>