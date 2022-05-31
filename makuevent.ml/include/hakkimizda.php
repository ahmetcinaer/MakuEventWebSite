
			<div role="main" class="main">
				<div class="container">
					<div class="row pt-xl">
						<div class="col-md-7">
							<h1 class="mt-xl mb-none">Hakkımızda</h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>
							<?php 
							include_once("data/baglanti.php");

							$sql="SELECT * FROM `hakkimizda`";
							$sorgu=mysqli_query($baglan,$sql);
									
							$sonuc=mysqli_fetch_row($sorgu);


							 ?>
							<p class="lead mb-xl mt-lg"><?php echo $sonuc[1]; ?></p>

							<h1 class="mt-xl mb-none">Misyon</h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>
							<p class="lead mb-xl mt-lg"><?php echo $sonuc[2]; ?></p>

							<h1 class="mt-xl mb-none">Vizyon</h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>
							<p class="lead mb-xl mt-lg"><?php echo $sonuc[3]; ?></p>
						</div>
						<div class="col-md-4 col-md-offset-1">

							<h4 class="mt-xlg">Tarihçe</h4>

							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<ul class="list list-unstyled list-primary list-borders">
								<?php 
								$sql="SELECT * FROM `tarihce` ORDER BY yıl DESC ";
								$sorgu=mysqli_query($baglan,$sql);
									
								while ($sonuc=mysqli_fetch_row($sorgu)) {?>
									<li class="pt-sm pb-sm"><strong class="text-color-primary font-size-xl"><?php echo $sonuc[1] ?> - </strong><?php echo $sonuc[2] ?></li>

								<?php }; ?>
								
							</ul>

						</div>
					</div>
				</div>
			</div>
