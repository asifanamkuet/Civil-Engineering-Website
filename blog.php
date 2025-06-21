<?php
require('inc/header.php');
?>
 
 <section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="Blog"><span>Blog</span></h1>
      		<div class="page-breadcrumb">
							<a>Home</a>/ <span>Blog</span>
						</div>
      		
      	</div>
        
      </div>
    </div>
  </section>
 
 
  <!-- Blog Post Section -->
  <section class="padding pt-xs-40">
    <div class="container">
      <div class="row"> 
        <!-- Post Item -->
        <div class="col-lg-12">
          <div class="row">
          <?php
          $sql = "SELECT * FROM `blog`";
          $result = $conn->query($sql);
          $msg = $result->num_rows;
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo '<div class="col-md-12 col-lg-12 blog-post-hr">
              <div class="blog-post mb-45">
                <div class="post-media"> <img src="'.$url.'/img/bg/'.$row['blog_cover'].'" alt="" /><span class="event-calender blog-date"> '.$row['date'].' </span> </div>
                
                <div class="post-header">
                  <h2><a href="blog-single.php?id='.$row['id'].'">'.$row['title'].'</a></h2>
                </div>
                <div class="post-entry">
                  <p> '.$row['description'].'</p>
                </div>
                <div class="post-more-link pull-left"> <a href="blog-single.php?id='.$row['id'].'" class="btn-text">Read More</a> </div>
              </div>
            
              <hr />';
            }
          }
          ?>

            </div>
          </div>       
        </div>
        <!-- End Post Item --> 
      </div>
    </div>
  </section>
  <!-- End Blog Post Section -->
   
<?php
require('inc/footer.php');
?>