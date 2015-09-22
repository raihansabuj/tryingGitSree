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
		<!-- Include the Etalage CSS -->
		<link rel="stylesheet" href="css/etalage.css">
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
				
				<div class="product">
					<div class="container">
						<!--
						<div class="product-heading">
							<!-- Heading - ->
							<h6>Saree</h6>
							<!-- Breadcrumb - ->
							<ul class="breadcrumb">
								<li><a href="index.html">Home</a> <span class="divider"></span></li>
								<li><a href="items.html">Saree</a> <span class="divider"></span></li>
								<li class="active">New Arrival</li>
							</ul>
						</div>
						-->
						<div class="row">
						<div class="col-md-12">
							<div class="offer">
								<div class="heading">
									<!-- Heading -->
									<h2>Product Detail <span style="color:#000;font-weight:bold;">Party Saree</span></h2>
								</div>
							
							<div class="col-md-3 col-sm-5 col2uP">
							
							<?php include "left_menu.php" ?>
		
							</div>
							<div class="col-md-9 col-sm-7">
							<!-- Single product item -->
							<div class="single-product">
								<div class="row">
										<div class="col-md-5 col-sm-7">
											<!-- Image. Flex slider -->
											<div class="product-slider">
												<div id="examples">
													<ul id="etalage">
														<li>
																<img class="etalage_thumb_image" src="img/product/thumb/saree(50_a).png" />
																<img class="etalage_source_image" src="img/product/large/saree(50_a).jpg" title="This is an optional description." />
														</li>
														<li>
																<img class="etalage_thumb_image" src="img/product/thumb/saree(50_b).png" />
																<img class="etalage_source_image" src="img/product/large/saree(50_b).jpg" title="This is a sample to understand that we can put multiple image/color here" />
														</li>
														<li>
																<img class="etalage_thumb_image" src="img/product/thumb/saree(50_c).png" />
																<img class="etalage_source_image" src="img/product/large/saree(50_c).jpg" title="This is a sample to understand that we can put multiple image/color here" />
														</li>
														<li>
																<img class="etalage_thumb_image" src="img/product/thumb/saree(50_d).png" />
																<img class="etalage_source_image" src="img/product/large/saree(50_d).jpg" title="This is a sample to understand that we can put multiple image/color here" />
														</li>
														<li>
																<img class="etalage_thumb_image" src="img/product/thumb/saree(50_e).png" />
																<img class="etalage_source_image" src="img/product/large/saree(50_e).jpg" title="This is a sample to understand that we can put multiple image/color here" />
														</li>
														 
													</ul>
												</div> 
											</div>
										</div>
										<div class="col-md-7 col-sm-5">
											<!-- Product Details -->
											<!-- Title -->
											<h4>Faux Georgette Saree with Blouse</h4>
											<p><strong>Price</strong> : <span class="label">$30</span></p>
											<p><strong>Shipping</strong> : Free</p>
											<p><strong>Brand</strong> : Saree</p>
											<p><strong>Color</strong> : Multiple</p>
											<p><strong>Blouse</strong> : Yes</p>
											<p><strong>Availability</strong> : In Stock</p><br />
											<div class="form-group">
												<!-- Dropdown menu -->
												<select class="form-control">
													<option>Color</option>
													<option>Red</option>
													<option>Blue</option>
													<option>Green</option>
													<option>Orange</option>
												</select>
											</div>
											<!-- Quantity and add to cart button -->
											<div class="input-group">
												<input type="text" class="form-control" placeholder="2">
												<span class="input-group-btn">
													<button class="btn btn-danger go" type="button">Go!</button>
												</span>
											</div><!-- /input-group -->
											<!-- Add to wish list -->
											<a href="wish-list.html">+ Add to Wish List</a>
										</div>
									</div>
								
								<div class="row">
									<div class="col-md-12">
										<!-- Description, specs and review -->
										<div class="product-desc">
											<ul id="myTab" class="nav nav-tabs">
												<!-- Use uniqe name for "href" in below anchor tags -->
												<li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
												<li><a href="#tab2" data-toggle="tab">Specs</a></li>
												<li><a href="#tab3" data-toggle="tab">Review (5)</a></li>	
											</ul>

											<!-- Tab Content -->
											<div id="myTabContent" class="tab-content">
												<!-- Description -->
												<div class="tab-pane fade in active" id="tab1">
													<h5><strong>Saree</strong></h5>
													<p>Multiple faux georgette saree designed with zari, sequins, stone, gota lace and patch border work. Available with black art silk and net blouse fabric, blouse shown in the image is just for photography purpose. (Slight variation in color and patch border work is possible.)</p>
													<h5><strong>Know Your Fabric</strong></h5>
													<p>Loops, crinkles, pulled yarns, thread irregularities or missing yarns are inevitable features of Georgette. Such variations are natural characteristics of the fabric and add an aesthetic impact to it.
													<h5><strong>Color</strong></h5>
													<p>Shades displayed across the range of fabric and accessories may slightly vary from the actual color. This may happen due to multiple settings in your monitor or viewing device (Laptop/Mobile/Tab), or impact of our digital photo shoots. We request you to consider these minor color variations.
													</p>
													<h5><strong>Returns</strong></h5>
													<p><a href="privecy.php" target="_blank" >Read the complete Returns Policy</a></p>
												</div>
												<!-- Sepcs -->
												<div class="tab-pane fade" id="tab2">
													<h5><strong>Product Specs:</strong></h5>
													<table class="table table-striped">
														<tbody>
															<tr>
																<td><strong>Item Code</strong></td>
																<td>SFS43</td>
															</tr>
															<tr>
																<td><strong>Work </strong></td>
																<td>Embroidered</td>
															</tr>
															<tr>
																<td><strong>Color</strong></td>
																<td>Red, Pink, Green, Yellow, Orange</td>
															</tr>
															<tr>
																<td><strong>Print</strong></td>
																<td>Zari, Sequins, Stone, Gota Lace and Patch Border Work</td>
															</tr>
															<tr>
																<td><strong>Weight  </strong></td>
																<td>Party</td>
															</tr>
															<tr>
																<td><strong>Fabric</strong></td>
																<td>Georgette</td>
															</tr>
															<tr>
																<td><strong>Dry </strong></td>
																<td>clean only</td>
															</tr>
														                           
														</tbody>
													</table>
												</div>
												<!-- Review -->
												<div class="tab-pane fade" id="tab3">
													<h5><strong>Product Reviews :</strong></h5>
													<hr />
													<div class="item-review">
														<h5>Sunita Rao - <span class="color">4/5</span></h5>
														<p class="rmeta">2/1/2015</p>
														<p>The fabric is very soft, and the design is glamorous - excellent choice for any occassion ranging from party to casual. Considering the price its a nice selection.</p>
													</div>
													<hr />
													<h5><strong>Write a Review</strong></h5>
													<hr />
													<form role="form">
														<div class="form-group">
															<label for="name">Your Name</label>
															<input type="text" class="form-control" id="name" placeholder="Enter Name">
														</div>                                    
														<div class="form-group">
															<label for="exampleInputEmail1">Email address</label>
															<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
														</div>
														<div class="form-group">
															<label for="rating">Rating</label>
															<!-- Dropdown menu -->
															<select class="form-control">
																<option>Rating</option>
																<option>1</option>
																<option>2</option>
																<option>3</option>
																<option>4</option>
																<option>5</option>
															</select>
														</div>
														<div class="form-group">
															<label for="exampleInputEmail1">Review</label>
															<textarea class="form-control" rows="3"></textarea>
														</div>  
														<button type="submit" class="btn btn-info">Send</button>
														<button type="reset" class="btn btn-default">Reset</button>
													</form>
												</div>
										   </div>
										</div>
									</div>
								</div>
							</div>
						</div>
							</div>
						</div>
					</div>	
				</div>
				
			</div>
			
			<!-- Inner Page Content End -->
			
			<!-- Post-slider start -->
			<?php 
				include "latest_product_slider.php";
			?>
			<!-- Post slider end -->
			

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
			
			/* Flexslider for product images */

			$(window).load(function(){
				$('.flexslider').flexslider({
					direction: "vertical",
					controlNav: false,
					directionNav: true,
					pauseOnHover: true,
					slideshowSpeed: 10000  
				});
			});

			// code here...
		</script>
		<!-- Include the Etalage plugin: -->
		<script src="js/jquery.etalage.min.js"></script>

		<!-- Invoke the Etalage plugin -->
		<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 332,
					
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});
 
				// This is for the dropdown list example:
				$('.dropdownlist').change(function(){
					etalage_show( $(this).find('option:selected').attr('class') );
				});

			});
		</script>
	<script src="js/jquery.easing-1.3.js"></script>
    <script src="js/jquery.mousewheel-3.1.12.js"></script>
    <script src="js/jquery.jcarousellite.js"></script>
	<script type="text/javascript">
		$(function() {
			$(".scrollMore .carousel").jCarouselLite({
				btnNext: ".scrollMore .next",
				btnPrev: ".scrollMore .prev",
				scroll: 1,
				visible: 4,
				mouseWheel: true,
				auto: 800,
				speed: 1500,
				hoverPause: true,
			});
		});
	</script>
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
		});     		// code here...
		</script>
		
	
	</body>	
</html>