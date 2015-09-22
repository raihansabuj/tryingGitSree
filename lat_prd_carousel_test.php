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
		 <!-- Font awesome CSS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		 
		<link rel="stylesheet" media="all" type="text/css" href="css/style-demo.css">

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
		
		<!-- Style Switcher End - ->
		<audio controls autoplay loop  id="audioPlayer" class="">
		  <source src="audio/Ustad_Bismillah_Khan_Saheb_1Shehnaai-01.ogg" type="audio/ogg">
		  <source src="audio/Ustad_Bismillah_Khan_Saheb_1Shehnaai-01.mp3" type="audio/mpeg">
		  Your browser does not support the audio element.
		</audio>
		
		<!-- Wrapper -->
		<div class="wrapper account-wrapper">
			
			<!-- Header Start -->
			
			<div class="header">
				<!-- Navigation Bar -->
				<?php include "top_menu.php" ?>
			</div>
			
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
										<td>$50</td>
									</tr>
									<tr>
										<td><a href="product_details.php">Apple iPhone</a></td>
										<td>1</td>
										<td>$199</td>
									</tr>
									<tr>
										<td><a href="product_details.php">Galaxy Note</a></td>
										<td>4</td>
										<td>$150</td>
									</tr>
									<tr>
										<td><a href="product_details.php">Galaxy S6</a></td>
										<td>4</td>
										<td>$100</td>
									</tr>
									<tr>
										<th></th>
										<th>Total</th>
										<th>$499</th>
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
			
			<!-- Inner Page Content Start -->
			
			<div class="inner-page">
			
				<!-- Button Kart -->
				
				<div class="btn-kart-sm">
					<a href="#" class="btn btn-default">Login</a>&nbsp;
					<a data-toggle="modal" href="#shoppingcart" class="btn btn-default"><i class="fa fa-shopping-cart"></i> 4 items</a>
				</div>
				
				<div class="btn-kart-md">
					<a href="#" class="btn btn-default">Login</a>&nbsp;
					<a data-toggle="modal" href="#shoppingcart" class="btn btn-default"><i class="fa fa-shopping-cart"></i> 4 items</a>
				</div>
				
				<!-- Button Kart -->	
				
				<!-- Inner Page Product -->
				
			<div id="jcl-demo" class="product">
				<div class="custom-container scrollMore">
					<a href="#" class="prev">&lsaquo;</a>
					<div class="carousel">
						<ul>
							<li><img src="img/product/thumb/saree(50_a).png"></li>
							<li><img src="img/product/thumb/saree(50_b).png"></li>
							<li><img src="img/product/thumb/saree(50_c).png"></li>
							<li><img src="img/product/thumb/saree(50_d).png"></li>
							<li><img src="img/product/thumb/saree(50_e).png"></li>
							<li><img src="img/product/thumb/saree(49).jpg"></li>
							<li><img src="img/product/thumb/saree(48).jpg"></li>
							<li><img src="img/product/thumb/saree(47).jpg"></li>
							 
						</ul>
					</div>
					<a href="#" class="next">&rsaquo;</a>
					<div class="clear"></div>
				</div>
				
			</div>
			
			<!-- Inner Page Content End -->
			
	

			 
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
		 
		<!-- jQuery Navco -->
		<script src="js/jquery.navgoco.min.js"></script>
		<!-- Style Switcher JS -->
		<script type="text/javascript" src="js/jquery.style-switcher.js"></script>
		<!-- Knob JS -->
        <!--[if IE]><script type="text/javascript" src="excanvas.js"></script><![endif]-->
        <script src="js/jquery.knob.js"></script>
		<!-- WayPoints JS -->
		<script src="js/waypoints.min.js"></script>
		 <!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
		<!-- This Jcarousal lite Java Script -->
		<script src="js/jquery.easing-1.3.js"></script>
		<script src="js/jquery.mousewheel-3.1.12.js"></script>
		<script src="js/jquery.jcarousellite.js"></script>
		 
		 <!-- JS for JCaroussel lite --> 
		 <script type="text/javascript">
        $(function() {
            $(".scrollMore .carousel").jCarouselLite({
                btnNext: ".scrollMore .next",
                btnPrev: ".scrollMore .prev",
                scroll: 2
				});
			});
		</script>
	
	</body>	
</html>