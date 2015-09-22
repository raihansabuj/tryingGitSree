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
				<td colspan="10" align="center" bgcolor="grey"><h2>View all posts</h2></td>
			</tr>
			<tr bgcolor="yellow">
				<th>Post No</th>
				<th>Post Title</th>
				<th>Post Pic</th>
				<th>Notes</th>
				<th>Details</th>
				<th>Delete Post</th>
				<th>Edit Post</th>
			</tr>
			
			<?php include("includes/connect.php");
			
				$query="select * from categories_table";
				$run=mysql_query($query);
				
				while($row=mysql_fetch_array($run)){
				
					$categories_id=$row['categories_id'];
					$categories_title=$row['categories_title'];
					
					$categories_pic=$row['categories_pic'];
					$categories_shortnotes=$row['categories_shortnotes'];
					$categories_details=$row['categories_details'];
				
			?>
			
			<tr align="center">
				<td><?php echo $categories_id; ?></td>
				<td><?php echo $categories_title; ?></td>
				<td><img src="../img/product/thumb/<?php echo $categories_pic; ?>" width="80" height="50" ></td>
				<td><?php echo $categories_shortnotes; ?></td>
				<td><?php echo $categories_details; ?></td>
				<td><a href="delete.php?del=<?php echo $post_id; ?>">Delete</a></td>
				<td><a href="edit_post.php?edit=<?php echo $post_id; ?>">Edit</a></td>
			</tr>
			
			<?php } ?>
			
		</table>
		
	</body>
</html>