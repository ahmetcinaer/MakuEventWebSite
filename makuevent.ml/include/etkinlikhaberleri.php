		<div role="main" class="main">
				<div class="container">
					<div class="row pt-xl mb-lg">

						<div class="col-md-12">

							<h1 class="mt-xl mb-none">Etkinlik Haberleri</h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>
							<?php

									include_once("data/baglanti.php");
									 
										$sql="SELECT * FROM `haberler`";
									$sorgu=mysqli_query($baglan,$sql);
									
									while( $sonuc=mysqli_fetch_row($sorgu) ){
 
							?>
							<div class="row mt-xl">
								<div class="col-md-12">

									<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mt-xl">
										<span class="thumb-info-side-image-wrapper p-none hidden-xs">
											<a href="index.php?sayfa=etkinlikhaberleri_detay&id=<?php echo $sonuc[0];?>">
												<img src="<?php echo $sonuc[5];?>" class="img-responsive" alt="" style="width: 195px;">
											</a>
										</span>
										<span class="thumb-info-caption">
											<span class="thumb-info-caption-text">
												<h2 class="mb-md mt-xs"><a title="" class="text-dark" href="index.php?sayfa=etkinlikhaberleri_detay&id=<?php echo $sonuc[0];?>"><?php echo $sonuc[1];?></a></h2>
												<span class="post-meta">
													<span><?php echo $sonuc[6];?>| <?php echo substr($sonuc[3], 0, 5) ; ?> | <?php $date = new DateTime($sonuc[2]);
									  echo $date->format('d.m.Y');?></span>
												</span>
												<p class="font-size-md"><?php echo $sonuc[4];?></p>

												<a class="mt-md" href="index.php?sayfa=etkinlikhaberleri_detay&id=<?php echo $sonuc[0];?>">Read More <i class="fa fa-long-arrow-right"></i></a>
											</span>
										</span>
									</span>

								</div>
							</div> 
							<?php } ?>
						</div>

					</div>

				</div>
			</div>

