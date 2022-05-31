

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Anasayfa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?sayfa=home">Anasayfa</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php 

                include_once("data/baglanti.php");
                $sql="SELECT COUNT(*)  AS count FROM etkinlikler";
                $result = mysqli_query($baglan, $sql);
                $data=mysqli_fetch_assoc($result);
                
                
                if ($data['count'] != 0) {
                    echo $data['count'];
               

                } ?></h3>

                <h5>Toplam Etkinlik</h5>
              </div>
              <div class="icon">
                <i class="ion ion-bookmark"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php 

                include_once("data/baglanti.php");
                $sql="SELECT COUNT(*)  AS count FROM haberler";
                $result = mysqli_query($baglan, $sql);
                $data=mysqli_fetch_assoc($result);
                
                
                if ($data['count'] != 0) {
                    echo $data['count'];
               

                } ?></h3>
                <h5>Toplam Etkinlik Haber</h5>
              </div>
              <div class="icon">
                <i class="ion ion-clipboard"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php 

                include_once("data/baglanti.php");
                $sql="SELECT COUNT(*)  AS count FROM kullanicilar";
                $result = mysqli_query($baglan, $sql);
                $data=mysqli_fetch_assoc($result);
                
                
                if ($data['count'] != 0) {
                    echo $data['count'];
               

                } ?></h3>

                <h5>Toplam Kullanıcılar</h5>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php 

                include_once("data/baglanti.php");
                $sql="SELECT COUNT(*)  AS count FROM homeyorum";
                $result = mysqli_query($baglan, $sql);
                $data=mysqli_fetch_assoc($result);
                
                
                if ($data['count'] != 0) {
                    echo $data['count'];
               

                } ?></h3>

                <h5>Yorumlar</h5>
              </div>
              <div class="icon">
                <i class="ion ion-ios-chatbubble"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
       
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
