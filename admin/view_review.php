<html>
	<head>
		<title> Admin Panel </title>
		<link rel="stylesheet" href="admin_style.css" />
	</head>
	<body>
		<div id="header">
			<a href="index.php"><h1>Welcome to Saree House Admin Panel</h1>
			</a></div>
		
		<div id="sidebar">

			<?php include"admin_sidebar.php" ?>
		</div>
		
		<table style="float:none;" width="1000" border="5" align="right" bgcolor="white">
			<tr>
				<td colspan="10" align="center" bgcolor="grey"><h2>View Product Review</h2></td>
			</tr>
			<tr bgcolor="yellow">
				<th>Post No</th>
				<th>Product Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Rating</th>
				<th>Review</th>
				<th>Delete Post</th>
				<th>Edit Post</th>
			</tr>
			
			<?php include("includes/connect.php");
			
				$query="select * from review_product";
				$run=mysql_query($query);
				
				while($row=mysql_fetch_array($run)){
				
					$id=$row['id'];
					$product_id=$row['product_id'];
					$name=$row['name'];
					$email=$row['email'];
					$rating=$row['rating'];
					$review=$row['review'];
				
			?>
			
			<tr align="center">
				<td><?php echo $id; ?></td>
				<td><?php echo $product_id; ?></td>
				<td><?php echo $name; ?></td>
				<td><?php echo $email; ?></td>
				<td><?php echo $rating; ?></td>
				<td><?php echo $review; ?></td>
				<td><a href="delete.php?del=<?php echo $post_id; ?>">Delete</a></td>
				<td><a href="edit_post.php?edit=<?php echo $post_id; ?>">Edit</a></td>
			</tr>
			
			<?php } ?>
			
		</table>
		
	</body>
</html>