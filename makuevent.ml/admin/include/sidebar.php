<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php?sayfa=home" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">MAKU&E Admin Paneli</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        
          <a class="d-block"><?php echo $_SESSION['admin'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php?sayfa=home" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Anasayfa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?sayfa=hakkimizda" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Hakkımızda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?sayfa=mesajlar" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mesaj Kutusu
                <?php 

                include_once("data/baglanti.php");
                $sql="SELECT COUNT(*)  AS count FROM contactmesaj WHERE durum=0;";
                $result = mysqli_query($baglan, $sql);
                $data=mysqli_fetch_assoc($result);
                
                
                if ($data['count'] != 0) { ?>
                   <span class="badge badge-info right"><?php echo $data['count']; ?></span>
                 <?php } ?>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?sayfa=etkinlikler" class="nav-link">
              <i class="nav-icon fa fa-bookmark"></i>
              <p>
                Etkinlikler
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?sayfa=etkinlikhaberler" class="nav-link">
              <i class="nav-icon fa fa-copy"></i>
              <p>
                Etkinlik Haber
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?sayfa=slider" class="nav-link">
              <i class="nav-icon fas fa-sliders-h"></i>
              <p>
                Slider
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?sayfa=yorumlar" class="nav-link">
              <i class="nav-icon fas fa-comment"></i>
              <p>
                Yorumlar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?sayfa=homeyorumlar" class="nav-link">
              <i class="nav-icon fas fa-comment"></i>
              <p>
                Home Yorumlar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?sayfa=kullanicilar" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Kullanıcılar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?sayfa=ayarlar" class="nav-link">
              <i class="nav-icon fa fa-cog"></i>
              <p>
                Ayarlar
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>