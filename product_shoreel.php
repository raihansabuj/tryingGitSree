<?php include("admin/includes/connect.php");

	$product_id=$_GET['produc_id'];
 	 
	$sql_product = mysql_query("select * from product_table where product_id='$product_id'");
	/* Filter Sql Query */
	{$show_img = mysql_query("select * from product_image where id='$id'"); 
	
	}
	
 ?>

		<div class="our_team_box_big">
			<?php 
			   while($row_view = mysql_fetch_array($show_img))
				{
				
					$image=$row_view['image'];
					
					$sql_course_res=mysql_query("select * from product_image WHERE id=$produc_id");
					$row_view_image=mysql_fetch_assoc($sql_course_res);
						$image=$row_view_image['image'];
						
 			?>
            	<div class="one_fourth">
                    <div class="cont-area">
					
					
					<ul id="preview" class="" style="padding:0; margin:0;">
									
									<li class="offer-item element four">
										<a href="product_details.php" title="View Detail" >						
										<span class="slashc-img-zoom-pan">
											<img alt="Image 02" src="img/product/thumb/<?php echo $image; ?>" />
											<img alt="Image 02" src="img/product/large/<?php echo $image; ?>" />
										</span>
										</a>
										<!-- Offer Details -->
										<div class="offer-details">
											<!-- Product Title / Heading -->
											<h3><a href="product_details.php"><?php  echo $product_title; ?></a><a href="contact.php" class="btn btn-default pull-right">Buy Now</a><!--<span class="offer-price pull-right"> From $349.0</span>--></h3>
											<!-- Icons And Button -->
											<div class="offer-icons">
												<!-- Icons -->
												 
												<!-- 
												<a href="product_details.php" class="offer-tooltip" title="" data-placement="top" data-original-title="24 Likes"><i class="fa fa-thumbs-o-up"></i><span style="padding:5px;">24 Likes</span></a>
												<!-- Link Button -->
											</div>
											<div class="clearfix"></div>
										</div>
									</li>
								</ul>
                   </div>
            	</div>
            <?php 
				}
			?>			 
             </div>
			