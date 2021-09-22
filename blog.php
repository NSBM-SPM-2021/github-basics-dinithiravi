 <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
            <h1 class="mb-0 bread">Blog</h1>
          </div>
        </div>
      </div>
    </div>

		<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">

          <div class="col-lg-8 ftco-animate"> 

        	 	<?php 
				 	$sql = "SELECT * FROM `tblannouncement`  ORDER BY `DATEPOSTED` DESC";
						$mydb->setQuery($sql);
						$blog = $mydb->loadResultList();
					foreach ($blog as $result) {  

				 // // `BLOGS`, `BLOG_WHAT`, `BLOG_WHEN`, `BLOG_WHERE`, `DATEPOSTED`
					?>
			    <div class="col-md-12 d-flex ftco-animate">
		            <div class="blog-entry align-self-stretch d-md-flex">
		              <a href="blog-single.html" class="block-20" style="background-image: url('admin/img/JANOBE.png');">
		              </a>
		              <div class="text d-block pl-md-4">
		              	<div class="meta mb-3">
		                  <div><a href="#"><?php echo date_format(date_create($result->DATEPOSTED),'M d, Y'); ?></a></div>
		                  <div><a href="#"><?php echo  $result->AUTHOR; ?></a></div>
		                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
		                </div>
		                <h3 class="heading"><a href="#"><?php echo $result->ANNOUNCEMENT_TEXT ;?> </a></h3>
		                <p><?php echo $result->ANNOUNCEMENT_WHAT; ?></p>
		                <p><a href="index.php?q=singleblog&id=<?php echo $result->ANNOUNCEMENTID; ?>" class="btn btn-primary py-2 px-3">Read more</a></p>
		              </div>
		            </div>
		         </div> 
		   <?php } ?>            
          </div> <!-- .col-md-8 -->






          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon ion-ios-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div> 
            <div class="sidebar-box ftco-animate">
              <h3 CLASS="heading">Recent Blog</h3>
              <?php 
				 	$sql = "SELECT * FROM `tblannouncement`  ORDER BY `DATEPOSTED` DESC";
						$mydb->setQuery($sql);
						$blog = $mydb->loadResultList();
					foreach ($blog as $result) {  

				 // // `BLOGS`, `BLOG_WHAT`, `BLOG_WHEN`, `BLOG_WHERE`, `DATEPOSTED`
					?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading-1"><a href="index.php?q=singleblog&id=<?php echo $result->ANNOUNCEMENTID; ?>"><?php echo $result->ANNOUNCEMENT_TEXT ;?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> <?php echo date_format(date_create($result->DATEPOSTED),'M d, Y'); ?></a></div>
                    <div><a href="#"><span class="icon-person"></span> <?php echo  $result->AUTHOR; ?></a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
          <?php } ?>           
            </div> 
          </div>

        </div>
      </div>
    </section> <!-- .section -->