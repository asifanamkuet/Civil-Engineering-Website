<?php
require('inc/header.php');
?>
  
  		<!-- Intro Section -->
 <section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="Contact"><span>Contact</span></h1>
      		<div class="page-breadcrumb">
							<a>Home</a>/ <span>Contact</span>
						</div>
      		
      	</div>
        
      </div>
    </div>
  </section>
 <!-- Intro Section End-->
  
			<!-- CONTENT -->
		
			<!-- Contact Section -->
			<section class="padding pt-xs-40">
				<div class="container">

					<div class="row">

						<div class="col-md-8 col-lg-8">

							<div class="headeing pb-30">
								<h2>Get in Touch</h2>
								<span class="b-line l-left line-h"></span>
							</div>
							<!-- Contact FORM -->
							<form class="contact-form " id="contact">
								<!-- IF MAIL SENT SUCCESSFULLY -->
								<div id="success">
									<div role="alert" class="alert alert-success">
										<strong>Thanks</strong> for using our template. Your message has been sent.
									</div>
								</div>
								<!-- END IF MAIL SENT SUCCESSFULLY -->
								<div class="row">
									<div class="col-md-6 col-lg-6">
										<div class="form-field">
											<input class="input-sm form-full" id="name" type="text" name="form-name" placeholder="Your Name">
										</div>
										<div class="form-field">
											<input class="input-sm form-full" id="email" type="text" name="form-email" placeholder="Email" >
										</div>
										<div class="form-field">
											<input class="input-sm form-full" id="sub" type="text" name="form-subject" placeholder="Subject">
										</div>
									</div>
									<div class="col-md-6 col-lg-6">
										<div class="form-field">
											<textarea class="form-full" id="message" rows="7" name="form-message" placeholder="Your Message" ></textarea>
										</div>
									</div>
									<div class="col-md-12 col-lg-12 mt-30">
										<button class="btn-text" type="button" id="submit" name="button">
											Send Message
										</button>
									</div>
								</div>
							</form>
							<!-- END Contact FORM -->
						</div>

						<div class="col-md-4 col-lg-4 contact mt-xs-30">
							<div class="headeing pb-20">
								<h2>Contact Info</h2>
								<span class="b-line l-left line-h"></span>
							</div>
							<div class="contact-info">

								<ul class="info">
									<li>
										<div class="icon ion-ios-location"></div>
										<div class="content">
											<p>
												<?php echo get_data_site_info('address','site_info'); ?>
											</p>
										</div>
									</li>

									<li>
										<div class="icon ion-android-call"></div>
										<div class="content">
											<p>
												<?php echo get_data_site_info('phone','site_info'); ?>
											</p>
											<p>
												<?php echo get_data_site_info('phone_2','site_info'); ?>
											</p>
										</div>
									</li>
									<li>
										<div class="icon ion-ios-email"></div>
										<div class="content">
											<p>
												<?php echo get_data_site_info('email','site_info'); ?>
											</p>
											<p>
												<?php echo get_data_site_info('email_2','site_info'); ?>
											</p>
										</div>
									</li>
								</ul>
								<ul class="event-social">
									<li>
										<a href="<?php echo get_data_site_info('facebook','site_info'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="<?php echo get_data_site_info('youtube','site_info'); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="<?php echo get_data_site_info('linkedin','site_info'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
									</li>
									<li>
										<a href="<?php echo get_data_site_info('instagram','site_info'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
				<!-- Map Section -->

			</section>
			<!-- Map -->
			<section class="map-box">
				<div class="map">
					<div id="map"></div>
				</div>
			</section>
			<!-- Contact Section -->
			<!--End Contact-->
			
			<!-- footer -->
<?php
require('inc/footer.php');
?>