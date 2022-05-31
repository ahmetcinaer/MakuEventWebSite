<div class="container">
	<div class="row" style="background-color: #361c6c; background-size: 100% 100% ;width: 70%;height: 70%;margin-left: 15%; margin-top: 5%; border-radius: 15px; padding: 18%; display: inline-block; box-shadow: 10px 10px 10px #000;">
		<div class="col-md-12" id="alt" style="width: 120%;height: 70%; margin-top: -5%;margin-left: -7%;">
      <form action="data/giris.php" method="POST">
			   <h2 style="text-align: center; color: #fff;">Üye Girişi</h2>
			   <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mail Adresi" style="margin-top: 15%; border-radius: 15px;">
         <hr>
			   <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Şifre" style="margin-top: 5%; border-radius: 15px;">
         <input type="submit" name="btngonder" value="Giriş Yap" style="float: right; margin-top: 4%; border-radius: 20px; inline-block; box-shadow: 10px 10px 10px #000; width: 100px; height: 40px;color:#fff;background-color: #000;">
         
      </form>
         <button id="btnkayitol" onclick="gizleGoster()" value="" style="float: left; margin-top: 4%; border-radius: 20px; inline-block; box-shadow: 10px 10px 10px #000; width: 100px ;height: 40px; color:#fff;background-color: #000;"   ><a style="color: #fff; display:inline-flex">Kayıt Ol</a></button>
         <?php
         if (!empty($_SESSION['hata'])) { ?>
           <p style="color: #fff;text-align: center; margin-top: 30%;font-weight: bold;">Kullanıcı Adı/Şifre Yanlış</p>
            <?php
         }
         if (!empty($_SESSION['hata1'])) { ?>
           <p style="color: #fff;text-align: center; margin-top: 30%;font-weight: bold;">Kullanıcı adı veya şifre alanı boş!</p>
          <?php
        }
          if (isset($_GET['success'])) {
            ?>
            <p style="color: #fff;text-align: center; margin-top: 30%;font-weight: bold;">Başarı ile kayıt oldunuz.</p>
            <?php
          }
          if (isset($_GET['mailhata'])) {
            ?>
            <p style="color: #fff;text-align: center; margin-top: 30%;font-weight: bold;">Mail Adresi Sistemde Zaten Kayıtlı..</p>
            <?php
          }
          if (isset($_GET['okulnohata'])) {
            ?>
            <p style="color: #fff;text-align: center; margin-top: 30%;font-weight: bold;">Okul Numarası Sistemde Zaten Kayıtlı..</p>
            <?php
          }
          if (isset($_GET['telefonhata'])) {
            ?>
            <p style="color: #fff;text-align: center; margin-top: 30%;font-weight: bold;">Telefon Numarası Sistemde Zaten Kayıtlı..</p>
            <?php
          }
         /*if (isset($_GET['fotohata'])) {
            ?>
            <p style="color: #fff;text-align: center; margin-top: 30%;font-weight: bold;">Lütfen Fotoğraf Yükleyiniz!!</p>
            <?php
          }*/
  
          unset($_SESSION['ad']);
          unset($_SESSION['hata']);
          unset($_SESSION['hata1']);
          unset($_SESSION['fotohata']);
      ?>

        
			  
			</div>
		
    
      <div class="col-md-12" id="alt1" style="width: 120%;height: 70%; margin-top: 20%;margin-left: -7%;;float:left; display: none">
          <form action="img/kayit.php" method="POST" enctype="multipart/form-data">
			   <h2 style=" margin-top:-45%;text-align: center; color: #fff;">Kayıt Ol</h2>
			   <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mail Adresi" style="margin-top: 5%; border-radius: 15px;" required>

                  <hr style="">

			   <input type="password" name="password" class="form-control" placeholder="Şifre" style="margin-top: 5%; border-radius: 15px;" required>

                  <hr style="">

			   <input type="text" name="ad" class="form-control"  placeholder="Ad Soyad" style="margin-top: 5%; border-radius: 15px;" required>

                  <hr style="">

			   <input type="text" maxlength="10" name="ogrno" class="form-control"  placeholder="Öğrenci Numarası" style="margin-top: 5%; border-radius: 15px;" required>

                  <hr style="">

         <input type="text" maxlength="11" name="telno"  placeholder="05555555555" class="form-control"  placeholder="Telefon Numarası" style="margin-top: 5%; border-radius: 15px;" required>

                  <hr style="">

        <a style="color:#fff;margin-top: 4%;">Yüklenecek Fotoğraf dosyasını seçin:</a>
        <input style=" margin-top: 4%;color:#fff;" type="file" name="foto" >
        <input type="submit" name="btngonder" value="Kayıt ol" style="float: right; margin-top: 4%; border-radius: 20px; inline-block; box-shadow: 10px 10px 10px #000; width: 100px ;height: 40px; color:#fff;background-color: #000;">
        </form>
        <button id="btngiris" onclick="gizleGoster()" value="" style="float: left; margin-top: 4%; border-radius: 20px; inline-block; box-shadow: 10px 10px 10px #000; width: 100px ;height: 40px;;background-color: #000;"><a style="color: #fff; display: inline-flex;">Giriş Yap</a></button>
        <?php if (isset($_GET['mailhata'])) {
            ?>
            <p style="color: #fff;text-align: center; margin-top: 20%;font-weight: bold;">Mail Adresi Sistemde Zaten Kayıtlı..</p>
            <?php
          }
          if (isset($_GET['okulnohata'])) {
            ?>
            <p style="color: #fff;text-align: center; margin-top: 20%;font-weight: bold;">Okul Numarası Sistemde Zaten Kayıtlı..</p>
            <?php
          }
          if (isset($_GET['telefonhata'])) {
            ?>
            <p style="color: #fff;text-align: center; margin-top: 20%;font-weight: bold;">Telefon Numarası Sistemde Zaten Kayıtlı..</p>
            <?php
          }
          if (isset($_GET['fotohata'])) {
            ?>
            <p style="color: #fff;text-align: center; margin-top: 20%;font-weight: bold;">Lütfen Fotoğraf Yükleyiniz!!</p>
            <?php
          }
          ?>
    </div>
  </div>
</div>
<script>

function gizleGoster() {
  var x = document.getElementById("alt");
  var y = document.getElementById("alt1");
  if (y.style.display === "none") {
    y.style.display = "block";
    x.style.display = "none";
  } else {
    x.style.display = "block";
     y.style.display = "none";
  }

  var x = document.getElementById("btngiris");
  var y = document.getElementById("btnkayitol");
  if (y.style.display === "none") {
    y.style.display = "block";
    x.style.display = "none";
  } else {
    x.style.display = "block";
     y.style.display = "none";
  }
}

</script>

