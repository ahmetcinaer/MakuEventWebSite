<?php 
include_once("include/baglanti.php");
$sql="SELECT * FROM `site_ayarlar`";
$sorgu = mysqli_query($baglan,$sql);
$sonuc = mysqli_fetch_row($sorgu);
?>

<div role="main" class="main">
				<div class="container">
					<div class="row pt-xl">
						<div class="col-md-7">
							<h1 class="mt-xl mb-none">Bizimle iletişime geçin</h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>
							<p class="lead mb-xl mt-lg">Görüşlerinizi buradan iletebilirsiniz.</p>


							<form  action="include/yorumekle.php?contact" method="POST">
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input type="text" placeholder="İsminiz" value="" data-msg-required="Lütfen adınızı giriniz." maxlength="100" class="form-control input-lg" name="ad" id="name" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input type="email" placeholder="E-mail" value="" data-msg-required="Lütfen e-mail adresinizi giriniz." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control input-lg" name="email" id="email" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input type="text" placeholder="Konu" value="" data-msg-required="Lütfen konuyu giriniz." maxlength="100" class="form-control input-lg" name="konu" id="subject" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<textarea maxlength="5000" placeholder="Mesajınız" data-msg-required="Lütfen mesajınızı girin." rows="5" class="form-control input-lg" name="mesaj" id="message" required></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Mesajı gönder" class="btn btn-primary btn-lg mb-xlg" >
									</div>
								</div>
							</form>

						</div>
						<div class="col-md-4 col-md-offset-1">

							<h4 class="mt-xl mb-none">Ofisimiz</h4>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<ul class="list list-icons list-icons-style-3 mt-xlg mb-xlg">
								<li><i class="fa fa-map-marker"></i> <strong>Adres:</strong> <?php echo $sonuc[5];?></li>
								<li><i class="fa fa-phone"></i> <strong>Telefon:</strong> <?php echo $sonuc[4];?></li>
								<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto: <?php echo $sonuc[6];?>"> <?php echo $sonuc[6];?></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div id="googlemaps" class="google-map google-map-footer"></div>
			</div>