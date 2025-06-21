<?php
require('inc/header.php');
?>
			<!-- CONTENT -->
			<!-- Intro Section -->
			<section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="Project"><span>Project</span></h1>
      		<div class="page-breadcrumb">
							<a>Home</a>/ <span>Project</span>
						</div>
      		
      	</div>
        
      </div>
    </div>
  </section>
			<!-- End Intro Section -->
			<!-- Project_Section -->
		<section class="padding ptb-xs-40">
			<div class="container">
				<div class="row text-center mb-30">
					<div class="col-sm-12">
						<div class="sec_hedding">
							<h2><span>Previous</span> Project</h2>
							<span class="b-line"></span>
						</div>
					</div>
				</div>

				<div class="row">
					<?php
					$sql = "SELECT * FROM `our_work`";
					$result = $conn->query($sql);
					$msg = $result->num_rows;
					if ($result->num_rows > 0) {
			        while($row = $result->fetch_assoc()) {
			        	echo '
					<div class="col-lg-4 mb-sm-30 mb-xs-30">
						<div class="position_relative img-scale max_size">
							<figure class="picher_doc">
								<img src="'.$url.'/img/bg/'.$row['bg'].'" alt="">
								<div class="opacity-medium bg-extra-black"></div>
								<div class="date_top">
									<span>Green Castleae</span>
								</div>
								<div class="inner_text">
									<h3 class="show_tital">'.$row['title'].'</h3>

									<p class="display_block">
										Created By Green Castleae
									</p>
									<button class="btn btn-text" type="button" name="button">
										<a href="'.$row['link'].'">Read More</a>
									</button>
								</div>
							</figure>
						</div>
					</div>';
				}}?>
					
				</div>

			</div>
		</section>
				<section class="padding ptb-xs-40">
			<div class="container">
				<div class="row text-center mb-30">
					<div class="col-sm-12">
						<div class="sec_hedding">
							<h2><span>Ongoing</span> Project</h2>
							<span class="b-line"></span>
						</div>
					</div>
				</div>

				<div class="row">
					<?php
					$sql = "SELECT * FROM `o_our_work`";
					$result = $conn->query($sql);
					$msg = $result->num_rows;
					if ($result->num_rows > 0) {
			        while($row = $result->fetch_assoc()) {
			        	echo '
					<div class="col-lg-4 mb-sm-30 mb-xs-30">
						<div class="position_relative img-scale max_size">
							<figure class="picher_doc">
								<img src="'.$url.'/img/bg/'.$row['bg'].'" alt="">
								<div class="opacity-medium bg-extra-black"></div>
								<div class="date_top">
									<span>Green Castleae</span>
								</div>
								<div class="inner_text">
									<h3 class="show_tital">'.$row['title'].'</h3>

									<p class="display_block">
										Created By Green Castleae
									</p>
									<button class="btn btn-text" type="button" name="button">
										<a href="'.$row['link'].'">Read More</a>
									</button>
								</div>
							</figure>
						</div>
					</div>';
				}}?>
					
				</div>

			</div>
		</section>
				<section class="padding ptb-xs-40">
			<div class="container">
				<div class="row text-center mb-30">
					<div class="col-sm-12">
						<div class="sec_hedding">
							<h2><span>Future</span> Project</h2>
							<span class="b-line"></span>
						</div>
					</div>
				</div>

				<div class="row">
					<?php
					$sql = "SELECT * FROM `f_our_work`";
					$result = $conn->query($sql);
					$msg = $result->num_rows;
					if ($result->num_rows > 0) {
			        while($row = $result->fetch_assoc()) {
			        	echo '
					<div class="col-lg-4 mb-sm-30 mb-xs-30">
						<div class="position_relative img-scale max_size">
							<figure class="picher_doc">
								<img src="'.$url.'/img/bg/'.$row['bg'].'" alt="">
								<div class="opacity-medium bg-extra-black"></div>
								<div class="date_top">
									<span>Green Castleae</span>
								</div>
								<div class="inner_text">
									<h3 class="show_tital">'.$row['title'].'</h3>

									<p class="display_block">
										Created By Green Castleae
									</p>
									<button class="btn btn-text" type="button" name="button">
										<a href="'.$row['link'].'">Read More</a>
									</button>
								</div>
							</figure>
						</div>
					</div>';
				}}?>
					
				</div>

			</div>
		</section>
		<!-- Project_Section_End-->
			<!--End Contact-->
<?php
require('inc/footer.php');
?>