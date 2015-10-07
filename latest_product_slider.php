 
<div class="post-slider">
	<div class="container">
		<div class="heading">
			<!-- Heading -->
			<h2 style="font-weight:bold;">Latest Arrivals</h2>
			<!-- Sub Heading -->
			<hr />
			<!-- Paragraph -->
			
			<!-- Border -->
			<div class="border"></div>
		</div>
		<!-- Offer Product Start -->
							
		<div class="offer"> 
			<div class="custom-container scrollMore">
				<!-- Controls -->
				<div class="control">
					<a href="#" class="prev" style="margin-right:30px;">&lsaquo;</a>
					<a href="#" class="next">&rsaquo;</a>
				
				</div>
				<div class="carousel">
					<ul id="preview" class="" style="padding:0; margin:0;">
						 <?php 
							$res=mysql_query("select * from product_table order by product_entry_date DESC LIMIT 6");
							while($row=mysql_fetch_array($res))
							{
						?>
						<li class="offer-item ">
							<?php 
							
								$ghoraddim=$row['product_id'];
								$pic=mysql_query("select * from `product_image` where product_id='$ghoraddim' order by product_img_entry_date DESC Limit 1");
								while($row_image=mysql_fetch_array($pic))
								{	
								?>				
								<a href="product_details.php" title="View Detail" >
								<?php // echo $row_image['image']; ?>
								<span class="slashc-img-zoom-pan">
								<img alt="Image 01" src="img/product/medium/<?php echo $row_image['image']; ?>"/>
								<img alt="Image 01" src="img/product/large/<?php echo $row_image['image']; ?>"/>
							</span>
								</a>
						<?php 	} ?>
								
									
									<!-- Offer Details -->
									<div class="offer-details">
										<!-- Product Title / Heading -->
										<h3><a href="product_details.php"><?php echo $row['product_title']; ?></a><span class="offer-price pull-right"> 
											<a href="contact.php" class="btn btn-default pull-right">Buy Now</a></span></h3>
										<!-- Icons And Button -->
										<div class="offer-icons">
											<!-- Icons -->
										</div>
										<div class="clearfix"></div>
									</div>
						</li>
						<?php } ?>
					<!--	<li class="offer-item">
							<a href="product_details.php" title="View Detail" >
							<span class="slashc-img-zoom-pan">
								<img alt="Image 01" src="img/product/small/D8309-cpc.jpg" />
								<img alt="Image 01" src="img/product/large/l_D8309.jpg" />
							</span>
							</a>
							<div class="offer-details">
								<h3><a href="product_details.php">Casual</a><span class="offer-price pull-right">
									<a href="contact.php" class="btn btn-default pull-right">Buy Now</a></span></h3>
								<div class="offer-icons">
									 
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li class="offer-item">
							<a href="product_details.php" title="View Detail" >
							<span class="slashc-img-zoom-pan">
								<img alt="Image 01" src="img/product/small/lcs36-enlarge-p.jpg" />
								<img alt="Image 01" src="img/product/large/lcs36-large.jpg" />
							</span>
							</a>
							<div class="offer-details">
								<h3><a href="product_details.php">Party</a><span class="offer-price pull-right"> <a href="contact.php" class="btn btn-default pull-right">Buy Now</a></span></h3>
								<div class="offer-icons">
									 
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
					
						<li class="offer-item">
							<a href="#" title="View Detail" >
							<span class="slashc-img-zoom-pan">
											<img alt="Image 02" src="img/product/small/akt129-enlarge.jpg" />
											<img alt="Image 02" src="img/product/large/akt129-large.jpg" />
										</span>
							</a>
							<div class="offer-details">
								<h3><a href="product_details.php">Kurti Tops</a><span class="offer-price pull-right"> 
									<a href="contact.php" class="btn btn-default pull-right">Buy Now</a></span></h3>
								<div class="offer-icons">
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
						<li class="offer-item ">
							<a href="#" title="View Detail" >						
							<span class="slashc-img-zoom-pan">
								<img alt="Image 02" src="img/product/small/dbu620-enlarge.jpg" />
								<img alt="Image 02" src="img/product/large/dbu620-large.jpg" />
							</span>
							</a>
							<div class="offer-details">
								<h3><a href="product_details.php">Blouse</a><span class="offer-price pull-right"> 
									<a href="contact.php" class="btn btn-default pull-right">Buy Now</a></span></h3>
								<div class="offer-icons">
									 
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
							<li class="offer-item ">
							<a href="#" title="View Detail" >						
							<span class="slashc-img-zoom-pan">
											<img alt="Image 01" src="img/product/small/mse282-enlarge.jpg" />
											<img alt="Image 01" src="img/product/large/mse282-large.jpg" />
										</span>
							</a>
							<div class="offer-details">
								<h3><a href="product_details.php">Panjabi</a><span class="offer-price pull-right"> 
									<a href="contact.php" class="btn btn-default pull-right">Buy Now</a></span></h3>
								<div class="offer-icons">
									 
								</div>
								<div class="clearfix"></div>
							</div>
						</li> 
						-->
					</ul>				 
				</div>
				
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>


 