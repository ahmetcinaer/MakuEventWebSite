
								<h4 class="mt-xl mb-md">Bizimle İletişime Geçin</h4>
								<p>Nasıl yardımcı olabileceğimizi öğrenmek için bizimle iletişime geçin. </p>

								<div class="divider divider-primary divider-small mb-xl">
									<hr>
								</div>

                        <form  action="data/yorumekle.php?contact" method="POST">
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label>Adınız *</label>
												<input type="text"  data-msg-required="Lütfen adınızı giriniz." maxlength="100" class="form-control" name="name" id="name" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label>E-Postanız *</label>
												<input type="email" value="" data-msg-required="Lütfen E-postanızı giriniz." data-msg-email="Lütfen geçerli bir E-posta adresi giriniz" maxlength="100" class="form-control" name="email" id="email" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label>Konu *</label>
												<input type="text" value="" data-msg-required="Lütfen konuyu giriniz." maxlength="100" class="form-control" name="konu" id="subject" required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label>Mesajınız *</label>
												<textarea maxlength="5000" data-msg-required="Lütfen mesajınızı giriniz." rows="3" class="form-control" name="mesaj" id="message" required></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<input type="submit" value="Mesaji Gönder" class="btn btn-primary">

										</div>
									</div>
								</form>