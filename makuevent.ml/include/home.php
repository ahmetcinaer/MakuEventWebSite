<?php include_once("include/slider.php"); ?>
				<div class="container" id="practice-areas">
					<div class="row">
						<div class="col-md-16 center">
							<h2 class="mt-xl mb-none">Kategoriler</h2>
							<div class="divider divider-primary divider-small divider-small-center mb-xl">
								<hr>
							</div>
						</div>
					</div>

                <div class="row mt-lg" >
						<div class="col-md-4">
							<div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
								
								<div class="feature-box-info ml-md">
									<h4 class="mb-sm">Spor</h4>
									<p>Çeşitli spor aktiviteleri için takım arkadaşı bulmak, bu takımların içinde bulunmak ya da bu etkinlikleri takip etmek için göz atabilirsiniz.</p>
									<a class="mt-md" href="index.php?sayfa=etkinlikler">Daha Fazlası..<i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
								
								<div class="feature-box-info ml-md">
									<h4 class="mb-sm">Konser</h4>
									<p>Konsere yalnız gitmek istemiyorsanız veya yakın zamanda hangi konserlerin düzenlendiğinden haberdar olmak ve bu konserlere katılmak istiyorsanız göz atabilirsiniz.</p>
									<a class="mt-md" href="index.php?sayfa=etkinlikler">Daha Fazlası..<i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
								
								<div class="feature-box-info ml-md">
									<h4 class="mb-sm">Buluşma</h4>
									<p>Alanında uzman ve bilgili kişilerin düzenlediği söyleşi, konferans ve açık oturum gibi etkinlikleri takip etmek ve katılmak için göz atabilirsiniz.</p>
									<a class="mt-md" href="index.php?sayfa=etkinlikler">Daha Fazlası..<i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
						<div class="col-md-4">
							<div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
								
								<div class="feature-box-info ml-md">
									<h4 class="mb-sm">Sohbet</h4>
									<p>Yeni insanlar tanımak, tanışmak ve arkadaş edinip samimi bir ortam yakalamak için düzenenlenen mekan etkinlikleri hakkında bilgi almak ve katılmak için göz atabilirsiniz.</p>
									<a class="mt-md" href="index.php?sayfa=etkinlikler">Daha Fazlası..<i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
								
								<div class="feature-box-info ml-md">
									<h4 class="mb-sm">Topluluk</h4>
									<p>Yeni bir topluluk kulübüne katılmak ya da hangi topluluklar için etkinliklerin olduğunu takip etmek ve bu etkinliklere katılmak istiyorsanız göz atabilirsiniz.</p>
									<a class="mt-md" href="index.php?sayfa=etkinlikler">Daha Fazlası..<i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
								
								<div class="feature-box-info ml-md">
									<h4 class="mb-sm">Gezi</h4>
									<p>Doğada bulunmayı, tarihi yerleri görmeyi ve kamp yapmak gibi birçok gezi aktivitelerini seviyorsanız göz atabilirsiniz.</p>
									<a class="mt-md" href="index.php?sayfa=etkinlikler">Daha Fazlası..<i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
						</div>
				
				</div>

				<div class="container-fluid">
					<div class="row">
						<div class="col-md-16 p-none">
							<section class="section section-primary match-height mt-xl" style=" background-size:100% 100% ;background-image: url(img/home/bg.jpg); ">
								<div class="row">
									<div class="col-half-section col-half-section-left" style="margin-left: 10%; margin-top: 5%;">
										<h2 class="mb-none">Yorumlar</h2>
										<div class="divider divider-light divider-small mb-xl">
											<hr style="color:white; width: 150px;">
										</div>
										<div class="owl-carousel owl-theme" data-plugin-options='{"items": 1, "margin": 10, "loop": true, "nav": true, "dots": true}'>

												<?php 

												$sql1="SELECT ad,yorum FROM `homeyorum`ORDER BY id DESC LIMIT 5";
												$sorgu1=mysqli_query($baglan,$sql1);

												while($sonuc2=mysqli_fetch_row($sorgu1)){ ?>

											<div>
												<div class="testimonial testimonial-style-3 testimonial-trasnparent-background testimonial-alternarive-font">
													<blockquote>
														<p class="text-light"><?php echo $sonuc2[1];?></p>
													</blockquote>
													<div class="testimonial-author">
														<div class="testimonial-author-thumbnail">
															<img src="img/clients/client-1.jpg" class="img-responsive img-circle" alt="">
														</div>
														<p class="text-light"><strong style="color:#fff"><?php echo $sonuc2[0];?></strong></p>
													</div>
												</div>
											</div>

											<?php }?>		
										</div>
									</div>
									<div class="col-half-section col-half-section-right" style="margin-right: 10%;">

											<h4 class="mt-xl mb-none">Yorum Yaz</h4>
											<div class="divider divider-primary divider-small mb-xl">
												<hr style="width: 110px; background:white;">
											</div>

											<form action='data/yorumekle.php?home' method="POST">
												<div class="row">
													<div class="form-group">
														<div class="col-md-6">
															<label style="color:#fff">Adınız *</label>
															<input type="text" value="" maxlength="100" class="form-control" name="name" id="name">
														</div>
			
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<label style="color:#fff">Yorum *</label>
															<textarea maxlength="5000" rows="10" class="form-control" name="comment" id="comment"></textarea>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<input type="submit" value="Yorum Paylaş" class="btn btn-primary btn-lg" data-loading-text="Loading...">
													</div>
												</div>
											</form>
										</div>

								</div>
							</section>

						</div>
					</div>

					<div class="container">
						<div class="row">
							<div class="col-md-12 center">
								<h2 class="mt-xl mb-none">Son Eklenen Etkinlikler</h2>
								<div class="divider divider-primary divider-small divider-small-center mb-xl">
									<hr>
								</div>
							</div>
						</div>
						<div class="row mt-lg">
							<div class="owl-carousel owl-theme owl-team-custom show-nav-title" data-plugin-options='{"items": 4, "margin": 10, "loop": false, "nav": true, "dots": false}'>
								<?php

										include_once("data/baglanti.php");

										$sql="SELECT * FROM `etkinlikler` ORDER BY id DESC LIMIT 10 ";
									$sorgu=mysqli_query($baglan,$sql);
									
									while( $sonuc=mysqli_fetch_row($sorgu) ){
									
								?>
								<div class="center mb-lg">
									<a href="<?=adres?>index.php?sayfa=etkinlikdetay&id=<?php echo $sonuc[0];?>">
										<img style="border-radius: 90px;width: 400px; height: 250px;"  src="<?php echo $sonuc[10];?>" class="img-responsive" alt="">
									</a>
									<a href="<?=adres?>index.php?sayfa=etkinlikdetay&id=<?php echo $sonuc[0];?>"><h4 class="mt-md mb-none"><?php echo $sonuc[1];?></h4></a>
									<p class="mb-none"><?php echo $sonuc[2];?></p>
									<span class="thumb-info-social-icons mt-sm pb-none">
										<a href="<?php echo $sonuc[11];?>" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a>
										<a href="<?php echo $sonuc[12];?>"><i class="fa fa-twitter"></i><span>Twitter</span></a>
										<a href="<?php echo $sonuc[13];?>"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
									</p>
								</div>
							<?php } ?>
							</div>
						</div>
					</div>

				</div>

				<section class="parallax section section-text-light section-parallax section-center mt-xl" data-plugin-parallax data-plugin-options='{"speed": 1.5}' data-image-src="img/home/bg.jpg">
					<div class="container">
						<div class="row">
							<div class="counters counters-text-light">
								<div class="col-md-3 col-sm-6">
									<div class="counter mb-lg mt-lg">
										<i class="icon-user-following icons"></i>
										<strong data-to="1000" data-append="+">0</strong>
										<label>Kullanıcı</label>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="counter mb-lg mt-lg">
										<i class="icon-diamond icons"></i>
										<strong data-to="500">0</strong>
										<label>Toplam Etkinlik Sayısı</label>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="counter mb-lg mt-lg">
										<i class="icon-badge icons"></i>
										<strong data-to="10">0</strong>
										<label>Ödüller</label>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="counter mb-lg mt-lg">
										<i class="icon-paper-plane icons"></i>
										<strong data-to="10">0</strong>
										<label>Başarılar</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row">
						<div class="col-md-12 center">
							<h2 class="mt-xl mb-none">Son Eklenen Etkinlik Haberleri</h2>
							<div class="divider divider-primary divider-small divider-small-center mb-xl">
								<hr>
							</div>
						</div>
					</div>
					<div class="row mt-xl">
							<?php

											include_once("data/baglanti.php");

												$sql="SELECT * FROM `haberler` ORDER BY id DESC LIMIT 2";
											$sorgu=mysqli_query($baglan,$sql);
											
											while( $sonuc=mysqli_fetch_row($sorgu) ){
		 
							?>
								<div class="col-md-6">

									<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mb-xl">
										<span class="thumb-info-side-image-wrapper p-none hidden-xs">
											<a title="" href="index.php?sayfa=etkinlikhaberleri_detay&id=<?php echo $sonuc[0];?>">
												<img src="<?php echo $sonuc[5];?>" class="" alt="" style="width: 230px; height: 330px;">
											</a>
										</span>
										<span class="thumb-info-caption">
											<span class="thumb-info-caption-text">
												<h2 class="mb-md mt-xs"><a title="" class="text-dark" href="index.php?sayfa=etkinlikhaberleri_detay&id=<?php echo $sonuc[0];?>"><?php echo $sonuc[1];?></a></h2>
												<span class="post-meta">
													<span>Tarih: <?php $date = new DateTime($sonuc[2]);
									  							echo $date->format('d.m.Y');?> </span>
												</span>
												<p class="font-size-md">Saat: <?php echo substr($sonuc[3], 0, 5) ;?></p>
												<a class="mt-md" href="index.php?sayfa=etkinlikhaberleri_detay&id=<?php echo $sonuc[0];?>">Read More <i class="fa fa-long-arrow-right"></i></a>
											</span>
										</span>
									</span>
								</div>
						<?php } ?>
					</div>
				</div>

				<section class="section section-background section-footer" style="background-image: url(img/home/bg.jpg); background-position: 50% 100%;">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-md-offset-6">
								<h2 class="mt-xl mb-none" style="color: #fff;">Bizimle iletişime geçin</h2>
								<p style="color: #fff;">Görüşlerinizi buradan iletebilirsiniz.</p>
								<div class="divider divider-primary divider-small mb-xl">
									<hr>
								</div>
								<form  action="data/yorumekle.php?contact" method="POST">
									<div class="row">
										<div class="form-group">
											<div class="col-sm-6">
												<input type="text" value="" placeholder="İsminiz" data-msg-required="Lütfen İsminizi Giriniz" maxlength="100" class="form-control" name="name" id="name" required>
											</div>
											<div class="col-sm-6">
												<input type="email" value="" placeholder="Mail Adresiniz" data-msg-required="Lütfen Mail adresi giriniz." data-msg-email="Lütfen Geçerli Bir Mail adresi giriniz." maxlength="100" class="form-control" name="email" id="email" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<input type="text" value="" placeholder="Konu" data-msg-required="Lütfen Konu Yazınız" maxlength="100" class="form-control" name="konu" id="subject" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<textarea maxlength="5000" placeholder="Mesajınız" data-msg-required="Lütfen Mesaj Yazınız" rows="3" class="form-control" name="mesaj" id="mesaj" required></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<input type="submit" value="Mesaj Gönder" class="btn btn-primary mb-xl" >
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
				</section>
			</div>