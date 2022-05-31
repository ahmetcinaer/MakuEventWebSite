<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 850px;">
					<div id="revolutionSlider" class="slider rev_slider manual">
						<ul>
							<?php 

								include_once('data/baglanti.php');
								$sql="SELECT * FROM `slider`";
								$sorgu = mysqli_query($baglan, $sql);
								while( $sonuc=mysqli_fetch_row($sorgu) ){ ?>

								<li data-transition="fade" data-title="<?php echo $sonuc[2] ?>" data-thumb="<?php echo $sonuc[1] ?>">

								<img src="<?php echo $sonuc[1] ?>"  
									alt="" height="850px"
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat"
									class="rev-slidebg">
								
							</li>
							<?php
								}

							?>
						</ul>
					</div>
				</div>