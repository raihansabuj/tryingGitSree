<?php 
	include("admin/includes/connect.php"); 
	include("admin/include.php"); 
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Saree House</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		
		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Animate CSS -->
		<link href="css/animate.min.css" rel="stylesheet">
		<!-- Slider Revolution CSS -->
		<link href="css/settings.css" rel="stylesheet">
		<!--[if IE ]><link rel="stylesheet" href="css/settings-ie8.css"><![endif]-->
		<!-- FlexSlider Css -->
		<!-- Portfolio CSS -->
  
		<!-- Font awesome CSS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		<!-- Color Style sheet -  [ blue, green, light blue, orange, purple, red, violet ] -->
		<link type="text/css" rel="stylesheet" id="theme" href="css/violet.css" />
 		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
		<!-- Imgae Zoom _-->
		<link type="text/css" href="css/thirdparty/slashc.img-zoom-pan.css" rel="stylesheet" />
		<link type="text/css" href="css/thirdparty/prev iew.css" rel="stylesheet" />
	</head>
	
	<body>
		<!-- Style Switcher Start -->
		<div class="style-switcher">
			<!-- Heading -->
			<h5>THEME COLORS</h5>
			<!-- Color Box -->
			<a href="javascript: void(0)" title="switch styling" class="br-red" id="red">Red</a>
			<a href="javascript: void(0)" title="switch styling" class="br-green" id="green">Green</a>
			<a href="javascript: void(0)" title="switch styling" class="br-lblue" id="lblue">Light Blue</a>
			<a href="javascript: void(0)" title="switch styling" class="br-blue" id="blue">Blue</a>
			<a href="javascript: void(0)" title="switch styling" class="br-violet" id="violet">Violet</a>
			<a href="javascript: void(0)" title="switch styling" class="br-orange" id="orange">Orange</a>
			<a href="javascript: void(0)" title="switch styling" class="br-purple" id="purple">Purple</a>
		</div>
		<!-- Style Switcher End 
		<audio controls autoplay loop  id="audioPlayer" class="">
		  <source src="audio/Ustad_Bismillah_Khan_Saheb_1Shehnaai-01.ogg" type="audio/ogg">
		  <source src="audio/Ustad_Bismillah_Khan_Saheb_1Shehnaai-01.mp3" type="audio/mpeg">
		  Your browser does not support the audio element.
		</audio>
		<!-- Wrapper -->
		<div class="wrapper">
			
			<!-- Header Start -->
			
			<div class="header">
				<!-- Navigation Bar -->
				<?php include "top_menu.php" ?>
			</div>
			<?php
				if(!empty($_GET['cat_id'])){
					
					$category_id=$_GET['cat_id'];
				
				
			?>
			<!-- Header End -->
				
			<!-- Shopping cart Modal -->
			<div class="modal fade" id="shoppingcart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Shopping Cart</h4>
						</div>
						<div class="modal-body">
					   
							<!-- Items table -->
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Name</th>
										<th>Quantity</th>
										<th>Price</th>
									</tr>
								</thead>
								<tbody>
								<!--	<tr>
										<td><a href="product_details.php">HTC One</a></td>
										<td>2</td>
										<td> From $50</td>
									</tr>
									<tr>
										<td><a href="product_details.php">Apple iPhone</a></td>
										<td>1</td>
										<td> From $199</td>
									</tr>
									<tr>
										<td><a href="product_details.php">Galaxy Note</a></td>
										<td>4</td>
										<td> From $150</td>
									</tr>
									<tr>
										<td><a href="product_details.php">Galaxy S6</a></td>
										<td>4</td>
										<td> From $100</td>
									</tr>
									<tr>
										<th></th>
										<th>Total</th>
										<th> From $499</th>
									</tr>  -->
								</tbody>
							</table>
							
						</div>
				 
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Continue Shopping</button>
							<button type="button" class="btn btn-info">Checkout</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
 			<!-- Slider Container Start -->
 			<!-- Slider Container End -->
 			<!-- Button Kart -->
			
			<div class="btn-kart-sm">
				<a href="#login.php" class="btn btn-default">Login</a>&nbsp;
				<a data-toggle="modal" href="#shoppingcart" class="btn btn-default"><i class="fa fa-shopping-cart"></i> 4 items</a>
			</div>
			
			<div class="btn-kart-md">
				<a href="#login.php" class="btn btn-default">Login</a>&nbsp;
				<a data-toggle="modal" href="#shoppingcart" class="btn btn-default"><i class="fa fa-shopping-cart"></i> 4 items</a>
			</div>
			
			<!-- Button Kart -->
			
			<!-- Body Wrapper -->
			
			<div class="body-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<!-- Current Offer Start -->
							<!-- Current Offer End -->
							<!-- Offer Product Start -->
							
							<div class="offer">
								<div class="heading">
									<!-- Heading -->
									<h2><?php echo get_cat_name($category_id); ?> Products <span style="color:#000;font-weight:bold;">Saree House Fashion</span></h2>
								</div>
 								<!-- Inner Page Portfolio -->
 								<p  style="padding:0; margin:0;">
								<!-- Add filter names inside "data-filter". For example ".web-design", ".seo", etc., Filter names are used to filter the below images. -->
							<!--	<ul id="filters">
									<li><a href="#" data-filter="*" class="btn btn-default">All</a></li>
									<li><a href="#" data-filter=".one" class="btn btn-default"> $20-$49</a></li>
									<li><a href="#" data-filter=".two" class="btn btn-default"> $50-$99</a></li>
									<li><a href="#" data-filter=".three" class="btn btn-default"> $100-$249</a></li>
									<li><a href="#" data-filter=".four" class="btn btn-default"> $250+</a></li>
 								</ul> -->
								</p>
								
								<ul id="preview" class="" style="padding:0; margin:0;">
									<?php 
										$prod_query="select * from product_table 	WHERE product_categories=$category_id order by 	product_entry_date DESC";
										$prod_run=mysql_query($prod_query);
										while($row_prod=mysql_fetch_array($prod_run)){
											$product_id=$row_prod['product_id'];
											
									?>
									<li class="offer-item element four">
										<a href="product_details.php?prod_id=<?php echo $row_prod['product_id']; ?>" title="View Detail" >						
										<span class="slashc-img-zoom-pan">
											<img alt="Image 02" src="img/product/medium/<?php echo get_image($row_prod['product_id']); ?>" />
											<img alt="Image 02" src="img/product/large/<?php echo get_image($row_prod['product_id']); ?>" />
										</span>
										</a>
										<div class="offer-details">
											<h3><a href="product_details.php?prod_id=<?php echo $row_prod['product_id']; ?>"><?php echo $row_prod['product_title']; ?></a>		<span><a href="contact.php" class="btn btn-default pull-right">Buy Now</a><?php //echo $row_prod['product_price']; ?></span></h3>
											<div class="offer-icons">
											</div>
											<div class="clearfix"></div>
										</div>
										 
									</li>
									<?php //echo "<h1>" .$total_product_number. "</h1>";  
										}
									?>
								<!--	 
									<li class="offer-item element three">
										<a href="product_details.php" title="View Detail" >
										<span class="slashc-img-zoom-pan">
											<img alt="Image 01" src="img/product/small/SB7507-w.jpg" />
											<img alt="Image 01" src="img/product/large/l_SB7507.jpg" />
										</span>
										</a>
										<div class="offer-details">
											<h3><a href="product_details.php">Wedding</a><a href="contact.php" class="btn btn-default pull-right">Buy Now</a>$129.0</span></h3>
											<div class="offer-icons">
											</div>
											<div class="clearfix"></div>
										</div>
									</li>
									
								-->	   
								</ul> 
						 
							</div>							
							<!-- Offer Product End -->
						</div>
 					</div>
 				</div>
			</div>
			<div class="inner-page">
				<div class="inner-portfolio padd">
					<div class="container">
						<?php 
							}else{
								echo "<script>alert('Plese select a Product category from top menu');</script>";
								echo "<h2> Plese select a Product category from top menu </h2>";
							}
						?>						
					</div>
				</div>
			</div>
			<!-- Footer Start -->
 			<div class="footer">
				<?php include "footer.php" ?>
			</div>
			
			<!-- Footer End -->
			<!-- Scroll to top -->
			<span class="scroll-to-top"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 
			
		</div>

		
		
		
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- jQuery  prettyPhoto & Isotope -->
		<script src="js/jquery.prettyPhoto.js"></script>
		<script src="js/isotope.js"></script>
		  
		<!-- Style Switcher JS -->
		<script type="text/javascript" src="js/jquery.style-switcher.js"></script>
		<!-- Knob JS -->
        <!--[if IE]><script type="text/javascript" src="excanvas.js"></script><![endif]-->
         
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
		<!-- Include the Image Zoom plugin: -->
		<script type="text/javascript" src="js/3rdparty/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/3rdparty/jquery.slashc.img-zoom-pan.min.js"></script>
		 <!-- This Page Java Script -->
		<script type="text/javascript">
		
		 
		/* Isotype */

		// cache container
		var $container = $('#preview');
		// initialize isotope
		$container.isotope({
		  // options...
		});

		// filter items when filter link is clicked
		$('#filters a').click(function(){
		  var selector = $(this).attr('data-filter');
		  $container.isotope({ filter: selector });
		  return false;
		});            


		
		
			// code here...
		</script>
		
	</body>	
</html>