<!-- FOOTER -->
		<footer class="footer pt-80 pt-xs-60">
			<div class="container">
				<!--Footer Info -->
				<div class="row footer-info mb-60">
					<div class="col-lg-3 col-md-4 col-xs-12 mb-sm-30">
						<h4 class="mb-30">CONTACT Us</h4>
						<address>
							<i class="ion-ios-location fa-icons"></i> <?php echo get_data_site_info('address', 'site_info'); ?>
						</address>
						<ul class="link-small">
							<li>
								<a href="mailto:<?php echo get_data_site_info('email', 'site_info'); ?>"><i class="ion-ios-email fa-icons"></i><?php echo get_data_site_info('email', 'site_info'); ?></a>
							</li>
							<li>
								<a href="mailto:<?php echo get_data_site_info('email_2', 'site_info'); ?>"><i class="ion-ios-email fa-icons"></i><?php echo get_data_site_info('email_2', 'site_info'); ?></a>
							</li>
							<li>
								<a><i class="ion-ios-telephone fa-icons"></i><?php echo get_data_site_info('phone', 'site_info'); ?></a>
							</li>
							<li>
								<a><i class="ion-ios-telephone fa-icons"></i><?php echo get_data_site_info('phone_2', 'site_info'); ?></a>
							</li>
						</ul>
						<div class="icons-hover-black">
							<a href="<?php echo get_data_site_info('facebook', 'site_info'); ?>"> <i class="fa fa-facebook"></i> </a><a href="<?php echo get_data_site_info('youtube', 'site_info'); ?>"> <i class="fa fa-youtube"></i> </a><a href="<?php echo get_data_site_info('linkedin', 'site_info'); ?>"> <i class="fa fa-linkedin"></i> </a><a href="<?php echo get_data_site_info('instagram', 'site_info'); ?>"> <i class="fa fa-instagram"></i> </a>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-xs-12 mb-sm-30">
						<h4 class="mb-30">Links</h4>
						<ul class="link blog-link">
							<li>
								<a href="javascript:avoid(0);"><i class="fa fa-angle-double-right"></i> About Us</a>
							</li>
							<li>
								<a href="javascript:avoid(0);"><i class="fa fa-angle-double-right"></i> Services</a>
							</li>
							<li>
								<a href="javascript:avoid(0);"><i class="fa fa-angle-double-right"></i> Privacy policy</a>
							</li>
							<li>
								<a href="javascript:avoid(0);"><i class="fa fa-angle-double-right"></i> Terms &amp; condition</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-5 col-xs-12 mb-sm-30">
						<h4 class="mb-30">Latest Blog</h4>
						<div class="widget-details link">
							<div class="post-type-post media">
								<div class="entry-thumbnail media-left">
									<img src="<?php echo $url.'/img/bg/'.get_item_details('blog_cover','0','blog'); ?>" alt="Image">
								</div>
								<!-- /.entry-thumbnail -->
								<div class="post-content media-body">
									<p class="entry-title">
										<a href="<?php echo $url.'/blog-single.php?id='.get_item_details('id','0','blog'); ?>"><?php echo get_item_details('title','0','blog'); ?></a>
									</p>
									<div class="post-meta">
										On
										<time datetime="2018-02-10">
											<?php echo get_item_details('date','0','blog'); ?>
										</time>
									</div>
									<!-- /.post-meta -->
								</div>
								<!-- /.post-content -->
							</div>
							<div class="post-type-post media">
								<div class="entry-thumbnail media-left">
									<img src="<?php echo $url.'/img/bg/'.get_item_details('blog_cover','1','blog'); ?>" alt="Image">
								</div>
								<!-- /.entry-thumbnail -->
								<div class="post-content media-body">
									<p class="entry-title">
										<a href="<?php echo $url.'/blog-single.php?id='.get_item_details('id','1','blog'); ?>"><?php echo get_item_details('title','1','blog'); ?></a>
									</p>
									<div class="post-meta">
										On
										<time datetime="2018-02-10">
											<?php echo get_item_details('date','1','blog'); ?>
										</time>
									</div>
									<!-- /.post-meta -->
								</div>
								<!-- /.post-content -->
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-xs-12 mt-sm-30 mt-xs-15">
						<div class="newsletter">
							<h4 class="mb-30">NEWSLETTER SIGNUP</h4>
							<p>
								Subscribe to Our Newsletter to get Important News, Amazing Offers & Inside Scoops:
							</p>
							<form>
								<input type="email" class="newsletter-input input-md newsletter-input mb-0" placeholder="Enter Your Email">
								<button class="newsletter-btn btn btn-xs btn-color" type="submit" value="">
									<i class="fa fa-angle-right mr-0"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
				<!-- End Footer Info -->
			</div>

			<!-- End Copyright Bar -->
		</footer>
		<!-- END FOOTER -->

		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="assets/js/tether.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/owl.carousel.js"></script>
		<script type="text/javascript" src="assets/js/wow.min.js"></script>
		<!-- masonry,isotope Effect Js -->
		<script src="assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/masonry.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/jquery.appear.js" type="text/javascript"></script>
		<!-- revolution Js -->
		<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="assets/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.revolution.js"></script>
		<!-- Mail Function Js -->
		<script src="assets/js/validation.js" type="text/javascript"></script>
		<!-- Compiled and minified JavaScript -->
		<script src="assets/js/jquery.appear.js" type="text/javascript"></script>
		<script src="assets/js/custom.js" type="text/javascript"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/64beb552cc26a871b02af0ed/1h64f8j67';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
	</body>

<!-- index14:04 GMT -->
</html>