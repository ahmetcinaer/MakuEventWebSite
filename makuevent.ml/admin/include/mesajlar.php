

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 1419.25px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mesaj Kutusu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?sayfa=home">Anasayfa</a></li>
              <li class="breadcrumb-item active">Mesaj Kutusu</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

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
                      <th style="width: 20%">
                          Ad
                      </th>
                      <th style="width: 8%">
                          Mail
                      </th>
                      <th>
                         Konu
                      </th>
                      <th style="width: 25%">
                         Mesaj
                      </th>
                      <th style="width: 5%">
                         Durum
                      </th>
                      <th style="width: 30%">
                      </th>
                  </tr>
              </thead>
                <?php 

                include_once("data/baglanti.php");
        $sql="SELECT * FROM `contactmesaj`";
        $sorgu=mysqli_query($baglan,$sql);
        $id=1;
        while($sonuc=mysqli_fetch_row($sorgu)){ ?>
              
              <tbody>
                  <tr>
                      <td>
                          <?php echo $id;?>
                      </td>
                      <td>
                          <a>
                            <?php echo $sonuc[1];?>
                          </a>
                      </td>
                      <td>
                            <?php echo $sonuc[2];?>
                      </td>
                      <td>
                            <?php echo $sonuc[3];?>
                      </td>
                      <td>
                            <?php echo $sonuc[4];?>
                      </td>
                      <td class="project-state">
                          <?php
                          if($sonuc[5]==0){ ?>
                              <span style="height:30px; text-align:center;font-size:15px;" class="badge badge-danger">Okunmadı</span>
                          <?php }
                          else{ ?>
                              <span style="height:30px; text-align:center;font-size:15px;" class="badge badge-success">Okundu</span>
                        <?php  }  ?>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="data/guncelle.php?okundu&id=<?php echo $sonuc[0];?>" >
                              <i class="fas fa-folder">
                              </i>
                              Okundu
                          </a>
                          <br>
                          <a class="btn btn-danger btn-sm" href="data/guncelle.php?mesajsil&id=<?php echo $sonuc[0];?>">
                              <i class="fas fa-trash">
                              </i>
                              Sil &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          </a>
                      </td>
                  </tr>
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
