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
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
		<!-- Portfolio CSS -->
		<link href="css/prettyPhoto.css" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="css/font-awesome.min.css" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="css/style.css" rel="stylesheet">
		<!-- Color Style sheet -  [ blue, green, light blue, orange, purple, red, violet ] -->
		<link type="text/css" rel="stylesheet" id="theme" href="css/violet.css" />
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
		
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
		
		<!-- Style Switcher End -->
		<!-- Wrapper -->
		<div class="wrapper">
			
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
			
				<!-- INNER PAGE BANNER START -->
				
				<div class="inner-page-banner padd">
					<div class="container">
						<!-- Heading -->
						<h3>Contact Us</h3>
						<!-- Sub Heading -->
						<h6>Visit our showrooms or contact us for your special experience.</h6>
						<hr />
						<!-- Paragraph -->
						<p>Please fill the following form and send us. We will contact you at possible earliest to satisfy your need. You can also directly call the telephone numbers for instant service.</p>
					</div>
				</div>
				
				<!-- INNER PAGE BANNER END -->
				
				<!-- Inner Page Contact -->
			<div class="contact padd" style="padding-top:0px;">
			<div class="container">
			<!-- Contact Container -->
				<div class="contact-container">
					<!-- Heading -->
					<h3>Get In Touch</h3>
					<!-- Border -->
					<div class="contact-border"></div>
					<div class="row">
						<div class="col-md-5 col-sm-4">
							<!-- Form -->
							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label for="name" class="col-lg-2 control-label">Name</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="name" placeholder="Name">
									</div>
								</div>
								<div class="form-group">
									<label for="email" class="col-lg-2 control-label">Email</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="email" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-lg-2" for="message">Message</label>
									<div class="col-lg-10">
										<textarea class="form-control" id="message" rows="5" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<button type="submit" class="btn btn-info">Send</button> &nbsp;
										<button type="reset" class="btn btn-default">Reset</button>
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-7 col-sm-8">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<!-- Contact widget -->
									<div class="contact-widget">
										<!-- Icon -->
										<i class="fa fa-map-marker c-icon"></i>
										<div class="cw-details">
											<!-- Headiing -->
											<h4>Address</h4>
											<!-- Paragraph -->
											<p class="addfontsize">2982 Danforth Avenue, Scarborough, ON M4C 1M6</p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<!-- Contact widget -->
									<div class="contact-widget">
										<!-- Icon -->
										<i class="fa fa-phone c-icon"></i>
										<div class="cw-details">
												<!-- Headiing -->
												<h4>Phone Number</h4>
												<!-- Phone # and email -->
												<span class="addfontsize"><i class="fa fa-phone-square"></i> <a href="#">1-416-818-7155</a></span>
												<span class="addfontsize"><i class="fa fa-envelope"></i> <a href="contact.php">suity.suity@yahoo.ca</a></span>
												<div class="clearfix"></div>
											</div>
									</div>
								</div>
								<div class="clearfix visible-sm visible-md"></div>
							<!--	<div class="col-md-6 col-sm-6">
									<div class="contact-widget">
										<i class="fa fa-group c-icon"></i>
										<div class="cw-details">
											<h4>Meeting</h4>
											<p>505 Limeridge CRT , Hamilton, ON, L9C2V8
	Canada</p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div> -->
								<div class="col-md-6 col-sm-6">
									<!-- Contact widget -->
									<div class="contact-widget">
										<!-- Icon -->
										<i class="fa fa-briefcase c-icon"></i>
										<div class="cw-details">
												<!-- Headiing -->
												<h4>Business Hours</h4>
												<!-- Phone # and email -->
												<span class="addfontsize"><i class="fa fa-clock-o"></i> Mon-Sat - 10:00am to 09:00pm</span>
												<span class="addfontsize"><i class="fa fa-clock-o"></i> Sun - 12:00pm to 09:00pm</span>
												<div class="clearfix"></div>
											</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<div class="container">
				<div class="contact-container">
					<!-- Contact Item -->
						<div class="contact-item">
							<h5 style=" ">Welcome to Saree House - YOUR favourite shopping destination.</h5>
										<h5 style=" font-size:35px;">শাড়ি হাউস এ স্বাগতম</h5>
						</div>
				</div>	
			</div>	
			<div class="container">
				<div class="contact-container">
						<!-- Heading -->
						<h2 style="font-weight:bold;">Get In Touch</h2>
						<hr />
						<!-- Border -->
						<div class="row">
							<div class="col-md-6 col-sm-6 marPadZero" >
								 <img src="img/shop_image.jpg" alt="Saree House" width="550" style="border:1px solid #eee;" />  
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="col-md-12 col-sm-12">
									<div class="col-md-6 col-sm-6 width46  marPadZero">
										<!-- Contact widget -->
										<div class="contact-widget">
											<!-- Icon -->
											<i class="fa fa-phone c-icon marZero"></i>
											<div class="cw-details">
												<!-- Headiing -->
												<h4>Phone Number</h4>
												<!-- Phone # and email -->
												<span><i class="fa fa-phone-square"></i> <a href="#">1-416-818-7155</a></span>
												<span><i class="fa fa-envelope"></i> <a href="contact.php">suity.suity@yahoo.ca</a></span>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									
									<div class="col-md-6 col-sm-6  width54 marPadZero">
										<!-- Contact widget -->
										<div class="contact-widget">
											<!-- Icon -->
											<i class="fa fa-briefcase c-icon marZero"></i>
											<div class="cw-details">
												<!-- Headiing -->
												<h4>Business Hours</h4>
												<!-- Phone # and email -->
												<span><i class="fa fa-clock-o"></i> Mon-Sat - 10:00am to 09:00pm</span>
												<span><i class="fa fa-clock-o"></i> Sun - 12:00pm to 09:00pm</span>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								</div>
								<h4 class="homeContact"><strong> Address:</strong> 2982 Danforth Avenue, Scarborough, ON M4C 1M6</h4>	
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2884.966848346284!2d-79.2917709!3d43.69045259999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cc2058eb73c1%3A0x607abcedee1c0dfe!2s2982+Danforth+Ave%2C+East+York%2C+ON+M4C+1M6%2C+Canada!5e0!3m2!1sen!2sbd!4v1422364140669" width="100%" height="405" frameborder="0" style="border:0"></iframe>
							
							</div>
							 
							</div>
							</div>
			</div>	
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
		<!-- jQuery Filter, prettyPhoto & Isotope -->
		<script src="js/jquery.prettyPhoto.js"></script>
		<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
		<script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
		<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
		<!-- FlexSlider JS -->
		<script defer src="js/jquery.flexslider-min.js"></script>
		<!-- jQuery Navco -->
		<script src="js/jquery.navgoco.min.js"></script>
		<!-- Style Switcher JS -->
		<script type="text/javascript" src="js/jquery.style-switcher.js"></script>
		<!-- Knob JS -->
        <!--[if IE]><script type="text/javascript" src="excanvas.js"></script><![endif]-->
        <script src="js/jquery.knob.js"></script>
		<!-- WayPoints JS -->
		<script src="js/waypoints.min.js"></script>
		<!-- GMap JS -->
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script type="text/javascript" src="js/jquery.ui.map.min.js"></script>
		<script type="text/javascript" src="js/jquery.ui.map.overlays.min.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
		<!-- This Page Java Script -->
		<script type="text/javascript">
	
		
		
			/* Code for GMap */
			
			$('#map').gmap({ 'center': '37.434538, -121.89970399999999', 'zoom': 10, 'scrollwheel': false }).bind('init', function() {	
				$('#map').gmap('loadFusion', { 'query': { 'from': 297050 } } ).gmap('loadFusion', { query: "SELECT * FROM 297050 WHERE ST_INTERSECTS(Address, CIRCLE(LATLNG(37.434538,-121.89970399999999),20000))"}, 297050).gmap('get', 'overlays > FusionTablesLayer').setMap(null);
			});
			
			// code here...
		</script>
		
	</body>	
</html>