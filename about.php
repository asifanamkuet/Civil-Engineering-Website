<?php
require('inc/header.php');
?>
		
		<!-- CONTENT -->
		<!-- Intro Section -->
		<section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="About"><span>About</span></h1>
      		<div class="page-breadcrumb">
							<a>Home</a>/ <span>About</span>
						</div>
      		
      	</div>
        
      </div>
    </div>
  </section>
		<!-- Intro Section -->
		<!-- About Section -->
		<section class="padding ptb-xs-40">
			<div class="container">
				<?php echo get_data_site_info('description', 'about_us'); ?>

				

			</div>
		</section>
		<!-- About Section End-->

		<!-- Section -->
		<section class="padding ptb-xs-40 gray-bg">
			<div class="container">

				<div class="row">
					<div class="col-lg-6 d-flex align-items-center">

						<div>
							<h3 class="bigger_text mt-60 mt-xs-0 mt-sm-2">The Company you can trust</h3>
							<p>
								GreencastleAE is a construction company in Bangladesh that has earned a reputation as "The Company you can trust." With a strong focus on integrity, transparency, and reliability, they have garnered the trust and confidence of their clients and partners.
							</p>
						</div>

					</div>

					<div class="col-lg-6 mt-sm-30 mt-xs-30">
						<img src="assets/images/dashboard-example-desktop.png" alt="">
					</div>

				</div>

			</div>
		</section>
		<!-- Section End-->

		<!-- Counter Section -->
		<div class="fact-counter-wrapper padding-60 ptb-xs-40 bg-img overlay-before" data-stellar-background-ratio="0.5">
			<div class="container text-center pos_reletive">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="single-fact new_counter">
							<div class="icon-boxed">
								<i class="ion-ios-list"></i>
							</div>
							<span class="counter new__counter" data-count="3562">0</span>
							<p>
								Total Projects
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-fact new_counter">
							<div class="icon-boxed">
								<i class="ion-happy"></i>
							</div>
							<span class="counter new__counter" data-count="1054">0</span>
							<p>
								Happy Clients
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-fact new_counter">
							<div class="icon-boxed">
								<i class="ion-person-stalker"></i>
							</div>
							<span class="counter new__counter" data-count="400">0</span>
							<p>
								Active Member
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="single-fact new_counter">
							<div class="icon-boxed">
								<i class="ion-trophy"></i>
							</div>
							<span class="counter new__counter" data-count="67">0</span>
							<p>
								Won Award
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Counter Section End-->

		<!-- our_team -->
		<section id="team_about" class="padding ptb-xs-40">
			<div class="container">
				<div class="row pb-60 pb-xs-40">
					<div class="col-md-8 offset-md-2">
						<div class="sec_hedding text-center">
							<h2>Our Team</h2>
							<span class="b-border"></span>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<div class="team-pagination team_carousel owl-carousel">

							<!--Team Member-->
				<?php
					$sql = "SELECT * FROM `team`";
					$result = $conn->query($sql);
					$msg = $result->num_rows;
					if ($result->num_rows > 0) {
			        while($row = $result->fetch_assoc()) {
			          echo '
							<div class="team-member col-lg-3 col-md-6 mb-xs-30">
								<div class="box-hover img-scale">
									<figure>
										<img src="'.$url.'/img/bg/'.$row['bg'].'" alt="">
									</figure>

									<div class="team_discoption text-center mt-15">
									<span class="team_name">'.$row['title'].'</span>
									<span class="postion">'.$row['description'].'</span>
								</div>

								</div>
							</div>';
						}
					}
					?>

						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- our_team End-->

		<!--Testimonial Section Start-->
		<section class="testimonial_wrapper__block padding ptb-xs-40">
			<div class="container">
				<div class="row text-center mb-30">
					<div class="col-sm-12">
						<div class="sec_hedding">
							<h2><span>Our</span> Testimonial</h2>
							<span class="b-line"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="testimonial_carosule-wrap">
							<?php
									$conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['db']);
									if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
									}
									$sql = "SELECT * FROM `testimonial`";
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()){ 
										echo '<div class="single_carousel pt-40">
								
									'.$row['testimonial_description'].'
								
								<div class="author_img__block">
									<div class="author_tablecell__block">
										<img src="img/bg/'.$row['img'].'" alt="#">
										
											'.$row['name'].' <span>'.$row['designation'].'</span>
										
									</div>
								</div>
							</div>';
									}
								}
									?>
							
							

						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Testimonial Section End-->

		<!-- footer -->
<?php
require('inc/footer.php');
?>

