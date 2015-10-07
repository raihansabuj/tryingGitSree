<?php 
	include "admin/includes/connect.php";
	include "admin/include.php";
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
		<!-- Style Switcher End -->
		<audio controls autoplay loop id="audioPlayer" class=" ">
			  
		<!--  <source src="audio/Kuch_Kuch_Hota_Hai_Instrumental_On-Piano.ogg" type="audio/ogg">
		  <source src="audio/Kuch_Kuch_Hota_Hai_Instrumental_On-Piano.mp3" type="audio/mpeg">
		  Your browser does not support the audio element. -->
		</audio> 
		
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
			
			<!-- Slider Container Start -->
			
			<div class="banner-container">
				<!-- Slider banner -->
				<div class="banner">
					<ul>
						<!-- SLIDE NR. 1 -->
						<li data-transition="slidedown" data-slotamount="10" data-masterspeed="900"  data-delay="10000" >
							<!-- MAIN IMAGE -->
							<img src="img/slider/transparent.png"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />    
							
							<!-- LAYERS NR. 1.1 // Price Tag 	-->
							<div class="tp-caption lft"
								data-x="0"
								data-y="0"
								data-speed="1500"
								data-start="1200"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off"><img src="img/slider/eid-eubarak.jpg" class="img-responsive" alt="Slide Image" />
							</div>
							
							<div class="tp-caption lfr large_text slide-one colorLightGreen ekusheyGhorautra" 
								style="color: red !important; font-size:50px; line-height:65px;"
								data-x="860"
								data-hoffset="80"
								data-y="130"
								data-speed="1500"
								data-start="2400"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off">বৈচিত্রময়  শাড়ির</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ঈদ <br>  সম্ভারে স্বাগতম 
							</div>
							 
						</li>
						<li data-transition="slidedown" data-slotamount="10" data-masterspeed="900"  data-delay="10000" >
							<!-- MAIN IMAGE -->
							<img src="img/slider/transparent.png"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />    
							
							<!-- LAYERS NR. 1.1 // Price Tag 	-->
							<div class="tp-caption lft"
								data-x="0"
								data-y="0"
								data-speed="1500"
								data-start="1200"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off"><img src="img/slider/Banner-7a.jpg" class="img-responsive" alt="Slide Image" />
							</div>
							 
							<!-- LAYERS NR. 2.1 // Price Tag  -->
							<div class="tp-caption lft"
								data-x="253"
								data-y="0"
								data-speed="1500"
								data-start="1800"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off"><img src="img/slider/Banner-7b.jpg" class="img-responsive" alt="Slide Image" />
							</div>
							<!-- LAYERS NR. 3.1 // Price Tag  -->
							<div class="tp-caption lft"
								data-x="485"
								data-y="0"
								data-speed="1500"
								data-start="2400"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off"><img src="img/slider/Banner-7c.jpg" class="img-responsive" alt="Slide Image" />
							</div>
							<!-- LAYERS NR. 3.1 // Price Tag  -->
							<div class="tp-caption lft"
								data-x="699"
								data-y="0"
								data-speed="1500"
								data-start="3000"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off"><img src="img/slider/Banner-7d.jpg" class="img-responsive" alt="Slide Image" />
							</div>
							<!-- LAYERS NR. 3.1 // Price Tag  -->
							<div class="tp-caption lft"
								data-x="917"
								data-y="0"
								data-speed="1500"
								data-start="3600"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off"><img src="img/slider/Banner-7e.jpg" class="img-responsive" alt="Slide Image" />
							</div>
							<!-- LAYERS NR. 3 // Heading -->
							<div class="tp-caption lfr very_large_text slide-one heading colorLightRed " 
								style="color: #FF0000 !important;font-size:70px; line-height:68px; padding-top:5px;"
								data-x="70"
								data-hoffset="80"
								data-y="230"
								data-speed="2500"
								data-start="5000"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off">Latest Design &amp; Exclusive Collection
							</div><!-- Latest and wide collection of beautiful sarees-->
							<!-- LAYERS NR. 3 // Heading -->
							<div class="tp-caption lfr large_text slide-one heading colorLightGreen ekushey16December" 
								style="color: #0000FF !important; font-size:50px; line-height:65px; letter-spacing: -.06em;"
								data-x="250"
								data-hoffset="80"
								data-y="320"
								data-speed="2500"
								data-start="5000"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off">বৈচিত্রময়  শাড়ির সম্ভারে স্বাগতম
							</div>
							<div class="tp-caption lfr " style="font-size:3px; "
								data-x="0"
 								data-hoffset="0"
								data-y="330"
								data-speed="12000"
								data-start="7200"
								data-easing="Power4.easeOut"
								data-endspeed="8000"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off">.
							</div>
						</li>
						<!-- SLIDE NR. 2 -->
						<li data-transition="fadefromtop" data-slotamount="5" data-masterspeed="1700"  >
							<!-- MAIN IMAGE -->
							<img src="img/slider/slider2_bg.jpg" style="width:90% !important;" alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />     
								<!-- LAYERS NR. 4 // Girl Image -->
								
							<!-- LAYERS NR. 4 // Slide Paragraph -->
						<!--	<div class="tp-caption lft"
								data-x="80"
								data-y="170"
								data-speed="1500"
								data-start="1200"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off"><img src="img/slider/banner-four_tag_star.png" class="img-responsive" alt="Slide Image" width="150" />
							</div> -->
							<!-- LAYERS NR. 3 // Heading -->
							<div class="tp-caption lfr very_large_text slide-one heading colorLightRed" 
								style="color: #FF0000 !important;font-size:70px; line-height:68px;"
								data-x="530"
								data-hoffset="80"
								data-y="40"
								data-speed="1500"
								data-start="2400"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off">Discover your</br> glamour &amp; beauty
							</div>
							<!-- LAYERS NR. 3 // Heading -->
							<div class="tp-caption lfr large_text slide-one heading colorLightGreen ekusheyGhorautra" 
								style="color: #0000FF !important; font-size:50px; line-height:65px;"
								data-x="530"
								data-hoffset="80"
								data-y="220"
								data-speed="1500"
								data-start="2400"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off">শাড়ি হাউসের শাড়িতে </br> হয়ে উঠুন অপরূপা
							</div>
							
							<!-- LAYERS NR. 5 // Slide Button -- >
							<div class="tp-caption sfb"
								data-x="650"
								data-hoffset="80"
								data-y="335"
								data-speed="1500"
								data-start="3600"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off"><a href="#" class="btn btn-info btn-lg">View Details</a>&nbsp;
												<a href="#" class="btn btn-danger btn-lg">Contact Us</a>
							</div>
							-->
						</li>
						<!-- SLIDE NR. 3 -->
					<!--	<li data-transition="zoomout" data-slotamount="5" data-masterspeed="900"   data-delay="10000">
							
							<img src="img/slider/transparent.png"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />
							
							<div class="tp-caption lft"
								data-x="0"
								data-y="0"
								data-speed="1500"
								data-start="1200"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off"><img src="img/slider/Banner-4a.jpg" class="img-responsive" alt="Slide Image" />
							</div>
							 
							<div class="tp-caption lft"
								data-x="233"
								data-y="0"
								data-speed="1500"
								data-start="1800"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off"><img src="img/slider/Banner-4b.jpg" class="img-responsive" alt="Slide Image" />
							</div>
							<div class="tp-caption lft"
								data-x="445"
								data-y="0"
								data-speed="1500"
								data-start="2400"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off"><img src="img/slider/Banner-4c.jpg" class="img-responsive" alt="Slide Image" />
							</div>
							<div class="tp-caption lft"
								data-x="669"
								data-y="0"
								data-speed="1500"
								data-start="3000"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off"><img src="img/slider/Banner-4d.jpg" class="img-responsive" alt="Slide Image" />
							</div>
							<div class="tp-caption lft"
								data-x="917"
								data-y="0"
								data-speed="1500"
								data-start="3600"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off"><img src="img/slider/Banner-4e.jpg" class="img-responsive" alt="Slide Image" />
							</div>
							<div class="tp-caption lfr very_large_text slide-one heading colorLightOrange"
								style="color: #FF0000 !important;font-size:70px; line-height:68px; padding-top:5px;"
								data-x="100"
								data-hoffset="80"
								data-y="230"
								data-speed="2500"
								data-start="5000"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off">Find your favorite color and design
							</div>
							<div class="tp-caption lfr large_text slide-one heading colorLightGreen ekusheyLalSabujNormal" 
								style="color: #0000FF !important; font-size:50px; line-height:65px;"
								data-x="220"
								data-hoffset="80"
								data-y="320"
								data-speed="2500"
								data-start="5000"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off">বিকশিত হউন সৌন্দর্যের শত ধারায়
							</div>
							<div class="tp-caption lfr " style="font-size:3px; "
								data-x="0"
 								data-hoffset="0"
								data-y="330"
								data-speed="12000"
								data-start="7200"
								data-easing="Power4.easeOut"
								data-endspeed="8000"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off">.
							</div>
						</li>  -->
						<!-- SLIDE NR. 4 -->
						<li data-transition="slotzoom-vertical" data-slotamount="5" data-masterspeed="1100" >
							<!-- MAIN IMAGE -->
							<img src="img/slider/Banner-4_bg.jpg" style="width:90% !important;" alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />
								<!-- LAYERS NR. 4 // Girl Image -->
							 
							<!-- LAYERS NR. 3 // Heading -->
							<div class="tp-caption lfr very_large_text slide-one headingNonbg colorLightYellow"
								style="color: #FF0000 !important;font-size:58px; line-height:68px;"
								data-x="35"
								data-hoffset="80"
								data-y="30"
								data-speed="1500"
								data-start="2400"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off">Excellent Customer Service
							</div>
							<!-- LAYERS NR. 3 // Heading -->
							<div class="tp-caption lfr very_large_text slide-one headingNonbg colorLightYellow ekusheySumon"
								style="color: #0000FF !important; font-size:45px; line-height:64px;letter-spacing: -.04em;"
								data-x="35"
								data-hoffset="80"
								data-y="110"
								data-speed="1500"
								data-start="2400"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off">আপনার সন্তুষ্টিই আমাদের কাম্য
							</div>
							
							<!-- LAYERS NR. 4 // Slide Paragraph -->
							<div class="tp-caption sfb medium_text slide-one paragraph"
								style="color: #0000FF !important; font-size:30px;"
								data-x="45"
								data-hoffset="80"
								data-y="200"
								data-speed="1500"
								data-start="3000"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off">
									<ul style="padding-bottom:5px !important;" class="bannerTextBG">
										<li class=""><i class="fa fa-asterisk bannerListText"></i> Exclusive collection</li>
										<li class=""><i class="fa fa-asterisk bannerListText"></i> Reasonable pricing</li>
										<li class=""><i class="fa fa-asterisk bannerListText"></i> Cordial treat</li>
									</ul>
							</div>
							<!-- LAYERS NR. 1.1 // Price Tag 	-->
							<div class="tp-caption lfr"
								data-x="530"
								data-y="0"
								data-speed="1500"
								data-start="1200"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off"><img src="img/slider/Banner-4-right.png" class="img-responsive" alt="Slide Image" />
							</div>
							<!-- LAYERS NR. 3 // Heading 
							<div class="tp-caption lfr large_text slide-one heading colorLightGreen" style="font-size:40px;"
								data-x="0"
								data-hoffset="80"
								data-y="120"
								data-speed="1500"
								data-start="2400"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off">বাহারী ডিজাইন ও কারুকার্যের \ সমাহারে বাংলার শাড়ি
							</div>-->
							
							<!-- LAYERS NR. 5 // Slide Button
							<div class="tp-caption sfb"
								data-x="0"
								data-hoffset="80"
								data-y="335"
								data-speed="1500"
								data-start="3600"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off"><a href="#" class="btn btn-info btn-lg">View Details</a>&nbsp;
												<a href="#" class="btn btn-danger btn-lg">Contact Us</a>
							</div>
							 -->
							 
						</li>
					</ul>
				</div>
			</div>
							
			<!-- Slider Container End -->
			
			<!-- Button Kart -->
			
			
			<div class="btn-kart-md">
				<a href="#" class="btn btn-default">Login</a>&nbsp;
				<a data-toggle="modal" href="#shoppingcart" class="btn btn-default"><i class="fa fa-shopping-cart"></i> 4 items</a>
			</div>
			
			<!-- Button Kart -->
			<div class="homeMessage">
					<div class="container">
						<!-- Current Offer Start -->
						<div class="col-md-12 messageWrapper">
								<!-- Current Offer Item -->
								<div class="homeMessageContent ">
								
								<div class="col-md-12 col-sm-12">		
										<h5 style=" ">Welcome to Saree House - YOUR favourite shopping destination.</h5>
										<h5 class="" style=" font-size:35px;">শাড়ি হাউস এ স্বাগতম</h5>
								
										<a href="contact.php" class="btn" style="">Contact Us</a>
								</div>
								</div>	
 						</div>
						<!-- Current Offer End -->
					</div>
				</div>
			<!-- Body Wrapper -->
			
			<div class="body-wrapper">
				 
			<div class="container">
				<div class="heading shadow">
						<!-- Heading -->
						<h2 style="font-weight:bold;">Categories</h2>
						<hr />
						<!-- Border -->
						<div class="border"></div>
					</div>
				<div class="row">
					<div class="col-md-12">
			 
			<!-- Feature Start -->
			
			<div class="feature padd parallax-feature" style="padding-top:0px; padding-bottom:0px;">
				<div class="container">	
				 
					<div class="row">
					<?php 
						$res_cat=mysql_query("SELECT * FROM `categories_table` ORDER BY `categories_table`.`categories_id` ASC ");
						while($row_cat=mysql_fetch_array($res_cat))
						{
							$category_id=$row_cat['categories_id'];
					?>
						<div class="col-md-2 col-sm-6">
							<!-- Feature Item -->
							<div class="feature-item animated">
								<a href="product_list.php?cat_id=<?php echo $category_id;?>">
									<!-- Flat Icon Image -->
									<?php
										$cat_img_query=mysql_query("SELECT * from category_cover_pic WHERE cat_id=$category_id AND status=1");// ORDER BY entry_date DESC LIMIT 1
										while($cat_img_row=mysql_fetch_array($cat_img_query)){
											$image_id= $cat_img_row['image_id'];
											$image=get_image_name($image_id); //calling a function from include.php
										
									?>
									<img src="img/product/thumb/<?php echo $image;?>" class="img-responsive" style="border:1px solid #8c1efb;border-radius:5px;" alt="" />
									<?php } ?>
									<span class="f-item-title"><?php echo $row_cat['product_categories'] ?></span>
									<p><?php echo $row_cat['categories_shortnotes'] ?></p>
									<p><?php echo $row_cat['categories_details'] ?></p>
								</a> 
							</div>
						</div>
					<?php } ?>
						
					</div>
				</div>
			</div>
							<!-- Offer Product Start -->
 							<!-- Offer Product End -->
		</div>
			
		</div>
					
			<!-- Post-slider start -->
			<?php include "latest_product_slider.php";?>
			<!-- Testimonial Start -->

			<div class="testimonial padd parallax-testimonial" style="padding-top:0px;">
				<div class="container">
					<div class="heading shadow">
						<!-- Heading -->
						<h2 style="font-weight:bold;">Client's Voice</h2>
						<hr />
						<!-- Border -->
						<div class="border"></div>
					</div>
					<div class="custom-container scrollMore">
						<!-- Controls -->
						<div class="control">
							<a href="#" class="prev" style="margin-right:30px;">&lsaquo;</a>
							<a href="#" class="next">&rsaquo;</a>
						
						</div>
						<div class="carouselClient testimonial-content" style="">
							<ul class="" >
								<li class="clientComment">
									<div class="col-md-4 col-sm-4">
										<!-- User Image -->
										<img src="img/user1.jpg" class="img-responsive img-circle" alt="user" />
									</div>
									<div class="col-md-7 col-sm-7">
										<div class="t-content-details">
											<!-- User Message -->
											<h4>মিথিলা</h4>
											<!-- User's comment -->
											<blockquote>
												<p>বাহ, অবিশ্বাস্য কম দামে দারুণ সব শাড়ির কালেকশন</p>
											</blockquote>
										</div>
									</div>
								</li>
								<li class="clientComment">
									<div class="col-md-4 col-sm-4">
										<!-- User Image -->
										<img src="img/lady_avatar.png" class="img-responsive img-circle" alt="user" />
									</div>
									<div class="col-md-7 col-sm-7">
										<div class="t-content-details">
											<!-- User Message -->
											<h4>তানিয়া<span></span></h4>
											<!-- User's comment -->
											<blockquote>
												<p>'শাড়ী হাউস' এর শারী, এবারও শহরের সেরা!</p>
											</blockquote>
										</div>
									</div>
								</li>
								<li class="clientComment">
									<div class="col-md-4 col-sm-4">
										<!-- User Image -->
										<img src="img/team1.jpg" class="img-responsive img-circle" alt="user" />
									</div>
									<div class="col-md-7 col-sm-7">
										<div class="t-content-details">
											<!-- User Message -->
											<h4>প্রিয়া রয়</h4>
											<!-- User's comment -->
											<blockquote>
												<p>প্রচুর ডিজাইন এর কালেকশন আর বাহারি রং এর শাড়িতে যেন হারিয়ে যায়, দারুণ কালেকশন</p>
											</blockquote>
										</div>
									</div>
								</li>
								<li class="clientComment">
									<div class="col-md-4 col-sm-4">
										<!-- User Image -->
										<img src="img/lady_avatar.png" class="img-responsive img-circle" alt="user" />
									</div>
									<div class="col-md-7 col-sm-7">
										<div class="t-content-details">
											<!-- User Message -->
											<h4>আইরিন<span></span></h4>
											<!-- User's comment -->
											<blockquote>
												<p>'শাড়ী হাউস' এর শাড়ী যেমন সুন্দর, ব্লাউজও অপূর্ব!</p>
											</blockquote>
										</div>
									</div>
								</li>
								<li class="clientComment">
									<div class="col-md-4 col-sm-4">
										<!-- User Image -->
										<img src="img/client3.jpg" class="img-responsive img-circle" alt="user" />
									</div>
									<div class="col-md-7 col-sm-7">
										<div class="t-content-details">
											<!-- User Message -->
											<h4>Rita Sen<span></span></h4>
											<!-- User's comment -->
											<blockquote>
												<p>Wow, Really a fantastic collection.</p>
											</blockquote>
										</div>
									</div>
								</li>
								<li class="clientComment">
									<div class="col-md-4 col-sm-4">
										<!-- User Image -->
										<img src="img/lady_avatar.png" class="img-responsive img-circle" alt="user" />
									</div>
									<div class="col-md-7 col-sm-7">
										<div class="t-content-details">
											<!-- User Message -->
											<h4>নূর আলম লাল ও তামান্না আলম<span></span></h4>
											<!-- User's comment -->
											<blockquote>
												<p>ভালো শাড়ী কেনার জন্য আমরা রিংকি'র
													'শাড়ী হাউস' -এ যাই, কারণ শাড়ীর 
													কালেকশন খুবই সুন্দর এবং রুচিশীল!</p>
											</blockquote>
										</div>
									</div>
								</li>
								 
							</ul>
						</div>
						<div class="clear"></div>
					</div>
					 
				</div>
			</div>
			
		<div class="contact padd" style="padding-top:0px;">
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
												<span><i class="fa fa-phone-square"></i> <a href="#">1-646-818-7155</a></span>
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
				
					<!-- Post slider end -->
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
			
			$(".scrollMore .carouselClient").jCarouselLite({
				btnNext: ".scrollMore .next",
				btnPrev: ".scrollMore .prev",
				scroll: 1,
				visible: 2,
				mouseWheel: true,
				auto: 800,
				speed: 4000,
				hoverPause: true,
			});
		});
		</script>
	</body>	
</html>

						<?php /*
						<!-- SLIDE NR. 5 -3 Model-->
						<li data-transition="slidedown" data-slotamount="5" data-masterspeed="700" >
							<!-- MAIN IMAGE - ->
							<img src="img/slider/transparent.png"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />
							
							<!-- LAYERS NR. 1.1 // Price Tag 	-->
							<div class="tp-caption lft"
								data-x="0"
								data-y="0"
								data-speed="1500"
								data-start="1200"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off"><img src="img/slider/banner3-a.jpg" class="img-responsive" alt="Slide Image" />
							</div>
							 
							<!-- LAYERS NR. 2.1 // Price Tag  -->
							<div class="tp-caption lft"
								data-x="409"
								data-y="0"
								data-speed="1500"
								data-start="1800"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off"><img src="img/slider/banner3-b.jpg" class="img-responsive" alt="Slide Image" />
							</div>
							<!-- LAYERS NR. 3.1 // Price Tag  -->
							<div class="tp-caption lft"
								data-x="854"
								data-y="0"
								data-speed="1500"
								data-start="2400"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Linear.easeNone"
								data-captionhidden="off"><img src="img/slider/banner3-c.jpg" class="img-responsive" alt="Slide Image" />
							</div>
						</li>
					*/ ?>	 
					