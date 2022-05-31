

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 1419.25px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kullanıcılar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?sayfa=home">Anasayfa</a></li>
              <li class="breadcrumb-item active">Kullanıcılar</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="card">
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 15%">
                          Adı-Soyadı
                      </th>
                      <th style="width: 15%">
                          Email 
                      </th>
                      <th style="width: 15%">
                          Şifre
                      </th>
                      <th style="width: 15%">
                         Okul
                      </th>
                      <th style="width: 15%">
                          Telefon
                      </th>
                      <th style="width: 20%">
                          Foto
                      </th>
                      <th style="width: 20%">
                          Ayarlar
                      </th>
                  </tr>
              </thead>
              <?php 

                include_once("data/baglanti.php");
                $sql="SELECT * FROM `kullanicilar`";
                $sorgu=mysqli_query($baglan,$sql);
                $id=1;    
            while($sonuc=mysqli_fetch_row($sorgu)){ 

                $tanima="edit".$sonuc[0];

              ?>

              <tbody>
                <form action="data/guncelle.php?kullanici&id=<?php echo $sonuc[0]; ?>" method="POST" >
                  <tr>
                      <td>
                          <?php echo $sonuc[0]; ?>
                      </td>
                      <td>
                          <a>
                            <?php 
                              if (isset($_GET[$tanima]) && $_GET['id']==$sonuc[0]) { ?>
                               <input type="text" name="ad" value="<?php echo $sonuc[1]; ?>">
                              <?php }else{
                                echo $sonuc[1];
                              } ?>
                          </a>
                      </td>
                      <td>
                        <?php 
                              if (isset($_GET[$tanima]) && $_GET['id']==$sonuc[0]) { ?>
                               <input type="email" name="email" value="<?php echo $sonuc[2]; ?>"> 
                              <?php }else{ 

                               
                                echo $sonuc[2];

                               } ?>
                      </td>
                      <td>
                        <?php 
                              if (isset($_GET[$tanima]) && $_GET['id']==$sonuc[0]) { ?>
                               <input type="password" name="sifre" value="<?php echo $sonuc[3]; ?>"> 
                              <?php }else{ 

                               
                                echo $sonuc[3];

                               } ?>
                      </td>
                      <td>
                        <?php 
                              if (isset($_GET[$tanima]) && $_GET['id']==$sonuc[0]) { ?>
                               <input type="number" name="okul" maxlength="11"  value="<?php echo $sonuc[4]; ?>"> 
                              <?php }else{ 

                               
                                echo $sonuc[4];


                               } ?>
                      </td>
                      <td>
                        <?php 
                              if (isset($_GET[$tanima]) && $_GET['id']==$sonuc[0]) { ?>
                               <input type="tel" name="telefon" maxlength="11"  value="<?php echo $sonuc[5]; ?>">
                              <?php }else{
                                echo $sonuc[5];
                              } ?>
                         
                      </td>
                      <td>
                        <?php 
                              if (isset($_GET[$tanima]) && $_GET['id']==$sonuc[0]) { ?>
                               <textarea name="foto"><?php echo $sonuc[6]; ?></textarea>
                              <?php }else{
                                echo $sonuc[6];
                              } ?>
                        
                      </td>
                      <td class="project-actions text-right">
                          <?php 
                            if (isset($_GET[$tanima])) {?>
                              <button class="btn btn-info btn-sm">
                                <i class="fa fa-pencil-alt">
                              </i>
                              Kaydet
                            </button>
                            <?php }else{ ?>
                               <a class="btn btn-info btn-sm" href="<?=adres?>index.php?sayfa=kullanicilar&edit<?php echo $sonuc[0];?>&id=<?php echo $sonuc[0];?>">
                              <i class="fa fa-pencil-alt">
                              </i>
                              Düzenle
                          </a>
                      <?php } ?>
                          <a class="btn btn-danger btn-sm" href="<?=adres?>data/guncelle.php?kullanicisil&id=<?php echo $sonuc[0];?>">
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
