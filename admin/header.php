<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" href="inc/menu_bar.css" />
  <link rel="stylesheet" href="inc/loading.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/site.webmanifest">
    <link rel="mask-icon" href="../safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <style type="text/css">
      .container{
        width: 1320px;
      }
    </style>
 </head>
 <body>
  <?php
  $page = basename($_SERVER['PHP_SELF']);
  $index_active                  = $page == "index.php" ? "active" : "";
  $about_us_active               = $page == "about_us.php" ? "active" : "";
  $blog_active                   = $page == "blog.php" ? "active" : "";
  $our_work_active               = $page == "our_work.php" ? "active" : "";
$o_our_work_active               = $page == "o_our_work.php" ? "active" : "";
$f_our_work_active               = $page == "f_our_work.php" ? "active" : "";
  $services_active               = $page == "services.php" ? "active" : "";
  $slider_active                 = $page == "slider.php" ? "active" : "";
  $team_active                    = $page == "team.php" ? "active" : "";
  $test_active                   = $page == "test.php" ? "active" : "";
  $image_active                  = $page == "image.php" ? "active" : "";
  $password_active               = $page == "password.php" ? "active" : "";
  ?>
  <div class="container">
   <h2 align="center"><a href="<?php echo $url; ?>"><img src="../assets/images/logo.png" alt="#" style="height: 60px; margin-top: -8px;"></a>Green Castleae Admin Panel</h2>
   <br />
   <div align="center">
  <ul>
  <li><a class="<?php echo $index_active; ?>" href="index.php">Site info</a></li>
  <li><a class="<?php echo $about_us_active; ?>" href="about_us.php">About us</a></li>
  <li><a class="<?php echo $blog_active; ?>" href="blog.php">Blog</a></li>
  <li><a class="<?php echo $our_work_active; ?>" href="our_work.php">Previous Project</a></li>
  <li><a class="<?php echo $o_our_work_active; ?>" href="o_our_work.php">Ongoing Project</a></li>
  <li><a class="<?php echo $f_our_work_active; ?>" href="f_our_work.php">Future Project</a></li>
  <li><a class="<?php echo $services_active; ?>" href="services.php">Services</a></li>
  <li><a class="<?php echo $slider_active; ?>" href="slider.php">Slider</a></li>
  <li><a class="<?php echo $team_active; ?>" href="team.php">Team</a></li>
  <li><a class="<?php echo $test_active; ?>" href="test.php">Testimonial</a></li>
  <li><a class="<?php echo $image_active; ?>" href="image.php">Image Uploder</a></li>
  <li><a class="<?php echo $password_active; ?>" href="password.php">Password</a></li>
  <li><a href="logout.php">Logout</a></li>
  </ul>
   </div>
   <br />

