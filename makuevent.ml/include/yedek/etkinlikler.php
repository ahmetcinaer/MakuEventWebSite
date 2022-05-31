			<div role="main" class="main">
				<div class="container">
					<div class="row pt-xl">

						<div class="col-md-9">

							<h1 class="mt-xl mb-none">Etkinlikler</h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<div class="row">

								<ul class="team-list mt-xs">
									<?php

									

										include_once("include/baglanti.php");

										$sql="SELECT * FROM `etkinlikler`";
									$sorgu=mysqli_query($baglan,$sql);
									
									while( $sonuc=mysqli_fetch_row($sorgu) ){
 
											?>
											<li class="col-md-4 col-sm-6 mb-xl center isotope-item <?php echo $sonuc[9];?> <?php echo $sonuc[5];?> ">
										<a href="<?=adres?>index.php?sayfa=etkinlikdetay&id=<?php echo $sonuc[0];?>">
											<span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
												<span class="thumb-info-wrapper">
													<img style= "width: 585 ;height: 585;" src="<?php echo $sonuc[10]; ?>  " class="img-responsive" alt="">
													<span class="thumb-info-title">
														<span class="thumb-info-inner">daha fazla görüntüle...</span>
													</span>
												</span>
											</span>
										</a>
										<h4 class="mt-md mb-none"><a href="<?=adres?>index.php?sayfa=etkinlikdetay&id=<?php echo $sonuc[0];?>"> <?php echo $sonuc[1] ?></a></h4>
										<p class="mb-none">Tarih: <?php $date = new DateTime($sonuc[2]); 
																		echo $date->format('d.m.Y');?></p>
										<p class="mb-none"><?php echo "Saat: " .substr($sonuc[3], 0, 5); ?></p>

										<?php 

										$sql1="SELECT ad FROM `kullanicilar` WHERE id=".$sonuc[7];
										$sorgu1=mysqli_query($baglan,$sql1);
										$sonuc2=mysqli_fetch_row($sorgu1)
										?>
										<p class="mb-none"><?php echo $sonuc2[0] ?></p>
										
										<span class="thumb-info-social-icons mt-sm pb-none">
											<a href="<?php echo $sonuc[11];?>" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a>
											<a href="<?php echo $sonuc[12];?>"><i class="fa fa-twitter"></i><span>Twitter</span></a>
											<a href="<?php echo $sonuc[13];?>"><i class="fa fa-instagram"></i><span>Instagram</span></a>
										</p>
									</li>
										<?php }
									?>
									
									
								</ul>
							</div>

						</div>

						<div class="col-md-3">
							<aside class="sidebar">
								<div id="combinationFilters" class="filters">

									<h4 class="mt-xl mb-md">Kategori:</h4>
									<ul class="nav nav-list mb-xlg sort-source team-filter-group" data-filter-group="group1">
										<li data-option-value="" class="active"><a href="#">Hepsini Göster</a></li>
										<li data-option-value=".spor"><a href="#">Spor</a></li>
										<li data-option-value=".konser"><a href="#">Konser</a></li>
										<li data-option-value=".toplanti"><a href="#">Toplantı</a></li>
										<li data-option-value=".bulusma"><a href="#">Buluşma</a></li>
										<li data-option-value=".sohbet"><a href="#">Sohbet</a></li>
										<li data-option-value=".gezi"><a href="#">Gezi</a></li>
									</ul>
									<h4 class="mt-xl mb-md">Yer:</h4>
									<ul class="nav nav-list mb-xlg sort-source team-filter-group" data-filter-group="group2">
										<li data-option-value="" class="active"><a href="#">Hepsini Göster</a></li>
										<li data-option-value=".burdur"><a href="#">Burdur</a></li>
										<li data-option-value=".antalya"><a href="#">Antalya</a></li>
										<li data-option-value=".ısparta"><a href="#">Isparta</a></li>
									</ul>

								</div>
								<?php include "sidebar.php";?>

							</aside>
						</div>
					</div>

				</div>
			</div>
