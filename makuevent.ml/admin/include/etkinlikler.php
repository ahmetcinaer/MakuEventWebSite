

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 1419.25px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Etkinlikler</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?sayfa=home">Anasayfa</a></li>
              <li class="breadcrumb-item active">Etkinlikler</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="row">
        <div class="col-12">
        <a style="margin:1%;" href="index.php?sayfa=etkinlikekle" class="btn btn-success float-right">Etkinlik  Ekle </a>
        </div>
      </div>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 5%">
                          Etkinlik Adı
                      </th>
                      <th style="width: 5%">
                          Tarih
                      </th>
                      <th style="width: 5%">
                          Saat
                      </th>
                      <th style="width: 15%">
                          Adres
                      </th>
                      <th style="width: 5%">
                          İl
                      </th>
                      <th style="width: 5%">
                          İlçe
                      </th>
                      <th style="width: 10%">
                          Etkinlik Sahibi
                      </th>
                      <th style="width: 15%">
                          Açıklama
                      </th>
                      <th style="width: 5%">
                          Kategori
                      </th>
                      <th style="width: 10%">
                          Görsel
                      </th>
                      <th style="width: 10%">
                        Facebook Link
                      </th>
                      <th style="width: 10%">
                        Twitter Link
                      </th>
                      <th style="width: 10%">
                        İnstagram Link
                      </th>
                      <th style="width: 5%">
                          Durum
                      </th> 
                  </tr>
              </thead>

              <?php 

                include_once("data/baglanti.php");
                $sql="SELECT * FROM `etkinlikler`";
                $sorgu=mysqli_query($baglan,$sql);
                $id=1;    
            while($sonuc=mysqli_fetch_row($sorgu)){ 
                $tanima="edit".$sonuc[0];
                ?>
              
              <tbody>
                <form action="data/guncelle.php?etkinlikguncelle&id=<?php echo $sonuc[0]; ?>" method="POST">
                  <tr>
                      <td>
                          <?php echo $id; ?>
                      </td>
                      <td>
                          <?php 
                              if (isset($_GET[$tanima]) && $_GET['id']==$sonuc[0]) { ?>
                               <input type="text" name="ad" value="<?php echo $sonuc[1]; ?>">
                              <?php }else{
                                echo $sonuc[1];
                              } ?>
                      </td>
                      <td>
                          <?php 
                              if (isset($_GET[$tanima]) && $_GET['id']==$sonuc[0]) { ?>
                               <input type="date" name="tarih" value="<?php $date = new DateTime($sonuc[2]); 
                                  echo $date->format('Y') ."-" .$date->format('m') ."-" .$date->format('d');
                                   ?>"> 
                              <?php }else{ 

                                $date = new DateTime($sonuc[2]); 
                                echo $date->format('d.m.Y');

                          } ?>
                      </td>
                      <td>
                            <?php 
                              if (isset($_GET[$tanima]) && $_GET['id']==$sonuc[0]) { ?>
                               <input type="time" name="saat" value="<?php echo substr($sonuc[3], 0, 5);  ?>">
                              <?php }else{
                                echo substr($sonuc[3], 0, 5);
                              } ?>
                      </td>
                      <td>
                        <?php
                            if (isset($_GET[$tanima]) && $_GET['id']==$sonuc[0]) { ?>
                               <textarea name="adres"><?php echo $sonuc[4]; ?></textarea>
                              <?php }else{
                                echo $sonuc[4];
                              } ?>
                      </td>
                      <td>
                            <?php echo $sonuc[5]; ?>
                      </td>
                      <td>
                            <?php echo $sonuc[6]; ?>
                      </td>
                      <td>
                        <?php $sql1="SELECT ad FROM `kullanicilar` WHERE id=" .$sonuc[7];
                              $sorgu2=mysqli_query($baglan,$sql1);   
                              $sonuc2=mysqli_fetch_row($sorgu2);

                            echo $sonuc2[0];
                        ?>
                      </td>
                      <td>
                        <?php
                           if (isset($_GET[$tanima]) && $_GET['id']==$sonuc[0]) { ?>
                               <textarea name="aciklama"><?php echo $sonuc[8]; ?></textarea>
                              <?php }else{
                                echo $sonuc[8];
                              } ?>
                      </td>
                      <td>
                            <?php
                           if (isset($_GET[$tanima]) && $_GET['id']==$sonuc[0]) { ?>
                               <input name="kategori" value="<?php echo $sonuc[8]; ?>">
                              <?php }else{
                                echo $sonuc[9];
                              } ?>
                      </td>
                      <td>
                           <?php
                           if (isset($_GET[$tanima]) && $_GET['id']==$sonuc[0]) { ?>
                               <textarea name="foto"><?php echo $sonuc[10]; ?></textarea>
                              <?php }else{
                                echo $sonuc[10];
                              } ?>
                      </td>
                      <td>
                            <?php
                           if (isset($_GET[$tanima]) && $_GET['id']==$sonuc[0]) { ?>
                               <textarea name="facebook"><?php echo $sonuc[11]; ?></textarea>
                              <?php }else{
                                echo $sonuc[11];
                              } ?>
                      </td>
                      <td>
                            <?php
                           if (isset($_GET[$tanima]) && $_GET['id']==$sonuc[0]) { ?>
                               <textarea name="twitter"><?php echo $sonuc[12]; ?></textarea>
                              <?php }else{
                                echo $sonuc[12];
                              } ?>
                      </td>
                      <td>
                            <?php
                           if (isset($_GET[$tanima]) && $_GET['id']==$sonuc[0]) { ?>
                               <textarea name="instagram"><?php echo $sonuc[13]; ?></textarea>
                              <?php }else{
                                echo $sonuc[13];
                              } ?>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success">Yayında</span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" target="_blank" href="<?=siteadres?>index.php?sayfa=etkinlikdetay&id=<?php echo $sonuc[0];?>">
                              <i class="fas fa-folder">
                              </i>
                              Görüntüle
                          </a>
                          <?php 
                            if (isset($_GET[$tanima])) {?>
                              <button class="btn btn-info btn-sm">
                                <i class="fa fa-pencil-alt">
                              </i>
                              Kaydet
                            </button>
                            <?php }else{ ?>
                               <a class="btn btn-info btn-sm" href="<?=adres?>index.php?sayfa=etkinlikler&edit<?php echo $sonuc[0];?>&id=<?php echo $sonuc[0];?>">
                              <i class="fa fa-pencil-alt">
                              </i>
                              Düzenle
                          </a>
                        <?php } ?>
                          <a class="btn btn-danger btn-sm" href="<?=adres?>data/guncelle.php?etkinliksil&id=<?php echo $sonuc[0];?>">
                              <i class="fas fa-trash">
                              </i>
                              Sil
                          </a>
                      </td>
                  </tr>
                </form>
              </tbody>
            <?php $id++; } ?>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
