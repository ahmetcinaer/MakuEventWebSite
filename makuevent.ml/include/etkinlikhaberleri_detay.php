<?php
include_once("data/baglanti.php");
$sql="SELECT * FROM `haberler` WHERE id=".$_GET['id'];
$sorgu=mysqli_query($baglan,$sql);	
$etkinlikid=$_GET['id'];
?>
			<div role="main" class="main">
				<div class="container">
					<div class="row pt-xl">

						<div class="col-md-12">

							<div class="blog-posts single-post mt-xl">

								<article class="post post-large blog-single-post">

									
									<div class="post-content">
										<?php
																		
									while( $sonuc=mysqli_fetch_row($sorgu)){?>

										<img src="<?php echo $sonuc[5];?>" class="img-responsive pull-left mb-xs mr-xl" alt="" style="width: 500px; height: 700px;">

										<h1 style="font-weight: bold ;font-size: 30px; "><?php echo $sonuc[1];?></h1>

										<p class="post-block"></p>

										<ul>
											<li style="font-size: 20px;list-style-type:none">
							                	<i class="fa fa-calendar"></i> <strong>Tarih / Saat:</strong> <?php $date = new DateTime($sonuc[2]); 
									  echo $date->format('d.m.Y'); echo " | "; echo substr($sonuc[3], 0, 5) ; ?>
							                </li>
							                <br>
							            	<li style="font-size: 20px;list-style-type:none">
							               		<i class="fa fa-bookmark"></i> <strong>Yer:</strong> <?php echo $sonuc[6]; echo " / "; echo $sonuc[7]; ?> 
							             	</li>

							            </ul>

										<p class="post-block"></p>

										<p style="font-size: 20px; "><?php echo $sonuc[4];?></p>

										<div class="post-meta">
											<span><i class="fa fa-user"></i> Oluşturuldu: MakuEvent </span>
										</div>

										<?php }?>

										

										
										<div class="pt-sm pb-xs">
											
											<div class="addthis_toolbox addthis_default_style">
												
												
											</div>
											<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
											<!-- AddThis Button END -->
										</div>

										<div class="post-block post-comments clearfix">
											<h4 class="mt-xl mb-none">Yorumlar</h4>
											<div class="divider divider-primary divider-small mb-xl">
												<hr style="width: 90px;">
											</div>

											<ul class="comments">
													<?php 

												$sql1="SELECT ad,yorum,etkinlikid FROM `yorum` ORDER BY id DESC LIMIT 5";
												$sorgu1=mysqli_query($baglan,$sql1);

												while($sonuc2=mysqli_fetch_row($sorgu1)){ 

													if ($sonuc2[2]==$_GET['id']) { ?>

												<li>
													<div class="comment" >
														<div class="comment-block">
															<div class="comment-arrow"></div>
															<span class="comment-by">
																<strong><?php echo $sonuc2[0]; ?></strong>
															</span>
															<p><?php echo $sonuc2[1]; ?></p>
														</div>
													</div>
												</li>																										<?php }
											}?>															
											</ul>

										</div>

										<div class="post-block post-leave-comment pb-none">
											<h4 class="mt-xl mb-none">Yorum Yaz</h4>
											<div class="divider divider-primary divider-small mb-xl">
												<hr style="width: 110px;">
											</div>

											<form action='data/yorumekle.php?etkinlikid=<?php echo $etkinlikid;?>' method="POST">
												<div class="row">
													<div class="form-group">
														<div class="col-md-6">
															<label>Adınız *</label>
															<input type="text" value="" maxlength="100" class="form-control" name="name" id="name">
														</div>
			
													</div>
												</div>
												<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<label>Yorum *</label>
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
								</article>

							</div>

						</div>

					</div>

				</div>
			</div>
		</div>
