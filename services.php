<?php
require('inc/header.php');
?>
  <!-- Intro Section -->
  <section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="Services"><span>Services</span></h1>
      		<div class="page-breadcrumb">
							<a>Home</a>/ <span>Services</span>
						</div>
      		
      	</div>
        
      </div>
    </div>
  </section>
  <!-- Intro Section --> 
			<!-- Service Section -->
			<section id="service_section" class="padding ptb-xs-40">
			<div class="container-fluid">
				<div class="row text-center mb-30">
					<div class="col-sm-12">
						<div class="sec_hedding">
							<h2><span>Our</span> Service</h2>
							<span class="b-line"></span>
						</div>
					</div>
				</div>

				<div class="row">
					<?php
					$sql = "SELECT * FROM `services`";
					$result = $conn->query($sql);
					$msg = $result->num_rows;
					if ($result->num_rows > 0) {
			        while($row = $result->fetch_assoc()) {
			          echo '<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="maine_box">
							<div class="items_picher">
								<a href="service-single.php?id='.$row['id'].'">	<img src="'.$url.'/img/bg/'.$row['bg'].'" alt="" /> </a>
							</div>

							<div class="box_detail">
								<div class="use_detail">
									<div class="event_detail">
										<i class="flaticon-tool-1"></i>
									</div>
								</div>
								<div class="datail_show">
									<h3>'.$row['title'].'</h3>
									<p>
										'.$row['description'].'
									</p>
									<a href="service-single.php?id='.$row['id'].'">Read More</a>
								</div>
							</div>

						</div>
					</div>'; 

			      }
    			}
					?>
					<!--  -->
				</div>
			</div>
		</section>
			<!-- Service Section end -->
			
<?php
require('inc/footer.php');
?>
