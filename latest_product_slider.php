 
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
							$res=mysql_query("select * from product_table order by product_entry_date DESC LIMIT 10");
							while($row=mysql_fetch_array($res))
							{
						?>
						<li class="offer-item ">
							<?php 
							
								$productId=$row['product_id'];
								$pic=mysql_query("select * from `product_image` where product_id='$productId' order by product_img_entry_date DESC Limit 1");
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
					
					</ul>				 
				</div>
				
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>


 