<?php 
require('inc/config.php');
if (isset($_GET['id'])) {
	if (!is_numeric($_GET['id'])) {
		die("Hacking attempt IP address is stored!!");
}
}

?>

<!DOCTYPE html>
<html lang="en">
	
<!-- index14:04 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?php echo get_data_site_info('slogan', 'site_info'); ?>">
		<title><?php echo get_data_site_info('title', 'site_info'); ?></title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
		<link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
		<link href="assets/css/ionicons.css" rel="stylesheet" type="text/css">
		<link href="assets/css/flaticon.css" rel="stylesheet" type="text/css">
		<link href="assets/css/simple-line-icons.css" rel="stylesheet" type="text/css">
		<link href="assets/css/animate.css" type="text/css" rel="stylesheet">
		<link href="assets/css/jquery-ui.min.css" type="text/css" rel="stylesheet">
		<!--Main Slider-->
		<link href="assets/css/settings.css" type="text/css" rel="stylesheet" media="screen">
		<link href="assets/css/layers.css" type="text/css" rel="stylesheet" media="screen">

		<link href="assets/css/style.css" type="text/css" rel="stylesheet">
		<link href="assets/css/index.css" type="text/css" rel="stylesheet">
		<link href="assets/css/header.css" type="text/css" rel="stylesheet">
		<link href="assets/css/footer.css" type="text/css" rel="stylesheet">
		<link href="assets/css/theme-color/default.css" rel="stylesheet" type="text/css" id="theme-color" />
		<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
	</head>
	<body>
		<!--loader-->
		<div id="preloader">
			<div class="sk-circle">
				<div class="sk-circle1 sk-child"></div>
				<div class="sk-circle2 sk-child"></div>
				<div class="sk-circle3 sk-child"></div>
				<div class="sk-circle4 sk-child"></div>
				<div class="sk-circle5 sk-child"></div>
				<div class="sk-circle6 sk-child"></div>
				<div class="sk-circle7 sk-child"></div>
				<div class="sk-circle8 sk-child"></div>
				<div class="sk-circle9 sk-child"></div>
				<div class="sk-circle10 sk-child"></div>
				<div class="sk-circle11 sk-child"></div>
				<div class="sk-circle12 sk-child"></div>
			</div>
		</div>
		<!--loader-->

		<!-- header Start -->
		<header id="header" class="header">

			<div class="nav-wrap">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="logo">
								<a href="index.php"><img src="assets/images/logo.png" alt="" height="60px"></a>
							</div>
							<!-- Phone Menu button -->
							<button id="menu" class="menu hidden-md-up"></button>
						</div>
						<div class="col-md-9 nav-bg d-flex align-items-center">
							<nav class="navigation">
								<ul>
									<li>
										<a href="index.php">Home</a>
									</li>
									<li>
										<a href="about.php">About us</a>
									</li>
									<li>
										<a href="services.php">Services</a>
									</li>
									<li>
										<a href="project.php">Project</a>
									</li>
									<li>
										<a href="blog.php">Blog</a>
									</li>
									<li>
										<a href="contact.php">Contact Us</a>
									</li>

								</ul>

							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--Header End-->