<div role="main" class="main">
  <div class="container">
    <div class="row pt-xl">
      <div class="col-sm-9">
        <div class="row mt-xl mb-xl">
          <div class="col-md-12 center">
            <?php
                include_once("data/baglanti.php");

                $sql="SELECT * FROM `etkinlikler` WHERE id=".$_GET['id'];
                $sorgu=mysqli_query($baglan,$sql);
                
                $sonuc=mysqli_fetch_row($sorgu);
 
                ?>

            <img
              style="width: 800px;height: 500px;" src="<?php echo $sonuc[10];?>"
              class="img-responsive mb-xl"
              alt=""
            />
          </div>
          <div class="col-md-12">
            <h1 class="mt-none mb-none"><?php echo $sonuc[1];?></h1>
            <p class="lead">Tarih: <?php $date = new DateTime($sonuc[2]); 
                    echo $date->format('d.m.Y'); echo " | Saat: "; echo substr($sonuc[3], 0, 5) ; ?>  </p>
            <span class="thumb-info-social-icons p-none mt-lg pt-lg">
              <a href="<?php echo $sonuc[11];?>" target="_blank"
                ><i class="fa fa-facebook"></i><span>Facebook</span></a
              >
              <a href="<?php echo $sonuc[12];?>"
                ><i class="fa fa-twitter"></i><span>Twitter</span></a
              >
              <a href="<?php echo $sonuc[13];?>"
                ><i class="fa fa-instagram"></i><span>Instagram</span></a
              >
            </span>        
            <div class="divider divider-primary divider-small mb-xl">
              <hr />
            </div>

            <div class="row mt-xl">
          <div class="col-sm-8">
            <p class="lead pb-xl" style="word-wrap:break-word;">
              <?php echo $sonuc[8];?>
            </p>
          </div>       
            <ul class="list list-icons">
            <li>
                <span><i class="fa fa-bookmark" style="color: #341c6c"></i> <strong>Yer: </strong><?php echo $sonuc[4];echo" "; echo mb_convert_case($sonuc[6], MB_CASE_TITLE, "UTF-8");echo"/"; echo mb_convert_case($sonuc[5], MB_CASE_TITLE, "UTF-8");?></span>
              </li>
                       <?php
            $sql="SELECT telefon,email FROM `kullanicilar` WHERE id=" .$sonuc[7];
            $sorgu=mysqli_query($baglan,$sql);
            $sonuc=mysqli_fetch_row($sorgu);

          ?>
              <li>
                <span><i class="fa fa-phone" style="color: #341c6c"></i> <strong>Telefon: </strong><?php echo $sonuc[0];?></span>
              </li>
              <li>
                <span><i class="fa fa-envelope" style="color: #341c6c"></i> <strong>Mail: </strong>
                <a href="mailto:<?php echo $sonuc[1];?>"><?php echo $sonuc[1];?></a></span>
              </li>
            </ul>
            

           
          </div>
        </div>
        </div>
      </div>
      <div class="col-md-3">
      <?php include "sidebar.php";?>
      </div>
    </div>
  </div>
</div>
