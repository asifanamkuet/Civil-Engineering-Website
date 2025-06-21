<?php
require('inc/header.php');
$id = addslashes($_GET['id']);
?>
 
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
 
 
  <!-- Blog Post Section -->
  <section class="padding pt-xs-40">
    <div class="container">
      <div class="row"> 
        <!-- Post Item -->
        <div class="col-lg-12">
          <div class="row">
          <?php
          $sql = "SELECT * FROM `services` WHERE `id` = '$id'";
          $result = $conn->query($sql);
          $msg = $result->num_rows;
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo '<div class="col-md-12 col-lg-12 blog-post-hr">
              <div class="blog-post mb-45">
                
                
                <div class="post-header">
                  <h2>'.$row['title'].'</h2>
                </div>
                <div class="post-entry">
                  <p> '.$row['html'].'</p>
                </div>
                
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