<?php 

include_once('include/baglanti.php');
$sql="SELECT * FROM `site_ayarlar`";
$sorgu = mysqli_query($baglan, $sql);
$sonuc=mysqli_fetch_row($sorgu) ?>



<footer class="short" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <a href="<?=adres?>index.php?sayfa=home" class="logo mb-md">
                    <img alt="Porto Website Template" class="img-responsive" width="97" height="32" src="<?php echo $sonuc[0]; ?>">
                </a>
                <p><?php echo $sonuc[7]; ?></p>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h5 class="mb-sm">Makuevent İletişim Adresleri</h5>
                <ul class="list list-icons mt-xl">
                    <li><i class="fa fa-map-marker"></i> <strong>Adres:</strong><?php echo $sonuc[5]; ?></li>
                    <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:<?php echo $sonuc[6]; ?>"><?php echo $sonuc[6]; ?></a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5 class="mb-sm">İletişim Numarası</h5>
                <span class="phone"><?php echo $sonuc[4]; ?></span>
                <ul class="social-icons mt-lg">
                    <li class="social-icons-facebook"><a href="<?php echo $sonuc[10]; ?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li class="social-icons-twitter"><a href="<?php echo $sonuc[11]; ?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li class="social-icons-instagram"><a href="<?php echo $sonuc[12]; ?>" target="_blank" title="İnstagram"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><?php echo $sonuc[8]; ?><a href="index.php?sayfa=iletisim">İletişim</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

