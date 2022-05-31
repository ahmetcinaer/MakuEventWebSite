<?php 
include_once("data/baglanti.php");
session_start();
$sql="SELECT * FROM `site_ayarlar`";
$sorgu = mysqli_query($baglan,$sql);
$sonuc = mysqli_fetch_row($sorgu);
?>
<header id="header" class="header-no-border-bottom" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 115, "stickySetTop": "-115px", "stickyChangeLogo": false}'>
				<div class="header-body">
					<div class="header-container container" style="width:90%;">
						<div class="header-row" >
							<div class="header-column" style="padding-left:20%">
								<div class="header-logo">
									<a href="index.php?sayfa=home">
										<img alt="Porto" width="120" height="120" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="<?php echo $sonuc[0]; ?>">
									</a>
								</div>
							</div>
							<div class="header-column" style=";margin-top:1%">
								<ul class="header-extra-info">
									<li>
										<div class="feature-box feature-box-call feature-box-style-2">
											<div class="feature-box-icon">
												<i class="icon-call-end icons"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-none"><?php echo $sonuc[4]; ?></h4>
											</div>
										</div>
									</li>
                                    <li class="hidden-xs">
										<div class="feature-box feature-box-mail feature-box-style-2">
											<div class="feature-box-icon">
												<i class="icon-envelope icons"></i>
											</div>
											<div class="feature-box-info">
                                            <h4 class="mb-none"><a href="mailto:<?php echo $sonuc[6]; ?>"><?php echo $sonuc[6]; ?></a></h4>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="header-column">
								<ul class="header-extra-info">
									<li class="hidden-s">
										<div class="feature-box feature-box-mail feature-box-style-2" bac>
											<div class="feature-box-icon" style="display:inline-flex ; backgraund-color:#341c6c;">
												<i class="icon-user icons"></i>
											</div>

											<?php 
												if (!empty($_SESSION['id'])) {
													?>
											<div class="feature-box-info">
												<div class="dropdown">
													<span class="dropbtn">
														<?php
                                            	
                                            					$sql="SELECT ad FROM `kullanicilar` WHERE id=" .$_SESSION['id'];

																$sorgu = mysqli_query($baglan, $sql);
																$sonuc=mysqli_fetch_row($sorgu);
																echo $sonuc[0];
														?>		
													</span>
													<div class="dropdown-content">
														<a href="<?=adres?>index.php?sayfa=kullaniciekrani&id=<?php echo $_SESSION['id']; ?>">Profil</a>
														<a href="index.php?sayfa=etkinlikeklepage">Etkinlik Ekle</a>
														<a href="#">Mesaj Kutusu</a>
														<a href="<?=adres?>data/cikis.php">Çıkış Yap</a>
														
													</div>
												</div>               
											</div>
											<?php
												}else{ ?>
													<div class="feature-box-info">
                                            		<h4 class="mb-none"> <a href="<?=adres?>index.php?sayfa=login">Giriş Yap / Kayıt Ol</a></h4>
													</div>
											<?php
												}
											?>
											
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="header-container header-nav header-nav-bar header-nav-bar-primary">
						<div class="container" style="width:75%;" >
							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
								Menu <i class="fa fa-bars"></i>
							</button>
														
							<div class="header-search visible-lg" style="margin-right:5%;" >
								<form id="searchForm" action="index.php?sayfa=etkinlikler" method="POST">
									<div class="input-group">
										<input type="text" class="form-control" name="search" id="q" placeholder="Search..." required>
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit"><i class="icon-magnifier icons"></i></button>
										</span>
									</div>
								</form>

							</div>


							<div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse" style="margin-left: 20%;">
								<nav>
									<ul class="nav nav-pills" id="mainNav">
										<li class="ana" >
											<a  href="index.php?sayfa=home">
												ANASAYFA
											</a>
										</li>
										<li class="hak" >
											<a  href="index.php?sayfa=hakkimizda">
												HAKKIMIZDA
											</a>
										</li>
										<li class="etk">
											<a href="index.php?sayfa=etkinlikler">
												ETKİNLİKLER
											</a>
										</li>
																	
										<li class="etkhaber">
											<a  href="index.php?sayfa=etkinlikhaberleri">
                                                ETKİNLİKLER HABERLERİ
											</a>
										</li>
										<li class="ilet">
											<a  href="index.php?sayfa=iletisim">
												İLETİŞİM
											</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>
<style>
.dropbtn {
  color: #7e8588;
  font-size: 20px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #fff;
  border-style:solid;
  border-color:#361c6c;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>