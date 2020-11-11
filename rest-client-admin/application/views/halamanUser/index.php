<div class="home">
	<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url()?>/images/index.jpg" data-speed="0.8"></div>
	<div class="home_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content text-center">
						<div class="home_title"><h1>Booking Your Ticket Now</h1></div>
						<div class="home_text">In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum.</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="intro">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title_container text-center">
					<div class="section_title"><h1>Ayo Ayo Wisata Rek</h1></div>
					<div class="section_text">In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum.</div>
				</div>
			</div>
		</div>
    </div>
</div>

<div class="facilities">
	<div class="container">
		<div class="row icon_box_row">
			<?php
                foreach($wisata as $u) { ?>
				<div class="col-lg-4">
					<div class="icon_box text-center">
						<div class="icon_box_icon"><img src="<?= base_url()?>/images/icon_1.svg" alt="https://www.flaticon.com/authors/monkik"></div>
						<div class="icon_box_title"><h2><?= $u['nama_wisata']; ?></h2></div>
						<div class="icon_box_text">
							<p><?= $u['deskripsi']; ?><br><br></p>
						</div>
						<div style="float:left; padding-left:250px;">
							<button class="newsletter_button">View Detail</button>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php
    foreach($wisata as $u) { ?>

						<!-- Blog Post -->
							<div class="blog_post">
								<div class="row">
									<div class="col-xl-7 col-lg-6">
										<div class="blog_post_image"><img src="<?= base_url()?>/images/blog_1.jpg" alt="https://unsplash.com/@nickkarvounis" style="padding-left:100px;"></div>
								</div>
								<div class="col-xl-5 col-lg-6">
									<div class="blog_post_content">
										<div class="bp_date trans_200"><a href="#">July 26, 2018</a></div>
										<div class="pb_title"><a href="#">How to organize the perfect holiday</a></div>
										<div class="pb_info">
											<ul class="d-flex flex-row align-items-center justify-content-start">
												<li><a href="#">By Admin</a></li>
												<li>
													<ul class="d-flex flex-row align-items-center justify-content-start">
														<li>in <a href="#">Hotels</a></li>
													</ul>
												</li>
												<li><a href="#">3 Comments</a></li>
											</ul>
										</div>
										<div class="pb_text">
											<p><?= $u['deskripsi'];?></p>
										</div>
										<div class="button blog_button"><a href="#">read more</a></div>
									</div>
								</div>
							</div><br><br><br><br>
						
<?php } ?>