

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 1419.25px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Home Yorumlar </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?sayfa=home">Anasayfa</a></li>
              <li class="breadcrumb-item active">Home Yorumlar</li>
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
                          Id
                      </th>
                      <th style="width: 20%">
                          Yorum Yapan Kişi
                      </th>
                      <th style="width: 75%">
                          Yorum
                      </th>
                  </tr>
              </thead>
              <tbody>
                 <?php 

                include_once("data/baglanti.php");
                $sql="SELECT * FROM `homeyorum`";
                $sorgu=mysqli_query($baglan,$sql);
                $id=1;
                while($sonuc=mysqli_fetch_row($sorgu)){ ?>
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
                      <td class="project-state">
                          <a href="<?=adres?>data/guncelle.php?homeyorumsil&id=<?php echo $sonuc[0];?>" class="btn btn-danger btn-sm">Sil</a>
                      </td>
                  </tr>
                <?php $id++ ; } ?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
