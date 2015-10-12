
			<nav class="navbar navbar-default" role="navigation">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="index.php"><span class="logo" style="padding-top:17px; padding-right:8px;padding-bottom:11px;padding-left:8px;background:#FFF;"><img width=160  src="img/logo_sareehouse.png" /></span></a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="index.php">Home</a></li>
  								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">Products <span class="fa fa-angle-down"></span></a>
									<ul class="dropdown-menu" role="menu">
									<?php
									include "admin/includes/connect.php";
									$res_cat=mysql_query("SELECT * FROM `categories_table` ORDER BY `categories_table`.`categories_id` ASC ");
									while($row_cat=mysql_fetch_array($res_cat))
									{
										$category_id=$row_cat['categories_id'];
									?>
										<li><a href="product_list.php?cat_id=<?php echo $category_id;?>"> <?php echo $row_cat['product_categories'] ?></a></li>
									<?php } ?>	 
										</ul></li>
 								<li><a href="contact.php">Contact Us</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
				</nav>