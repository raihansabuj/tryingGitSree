<html>
<head>
	<title> Inserting Post</title>
</head>
<body>
<form method="post" action="insert_categories.php" enctype="multipart/form-data">
	
	<table width="600" align="center" border="10">
		
		<tr>
			<td align="centre" bgcolor="grey"colspan="6"><h1>Insert New Categories Here.</h1></td>
		</tr>
		<tr>
			<td align="right">Title:</td>
			<td><input type="text" name="title"size="30"></td>
		</tr>
		<tr>
			<td align="right">Categories Pic:</td>
			<td><input type="file" name="image"></td>
		</tr>
		<tr>
			<td align="right">Short Notes:</td>
			<td><input type="text" name="notes"size="50"></td>
		</tr>
		
		<tr>
			<td align="right">Post Details:</td>
			<td><textarea name="details" cols="30" rows="5"></textarea></td>
		</tr>
		<tr>
			<td align="center"colspan="6"><input type="submit" name="submit" value="Publish Now"></td>
		</tr>
		
	</table>
</form>

</body>
</html>

<?php include("includes/connect.php");

if(isset($_POST['submit'])){

	$categories_title=$_POST['title'];
	$categories_pic=$_FILES['image']['name'];
	$image_tmp=$_FILES['image']['tmp_name'];
	
	$categories_shortnotes=$_POST['notes'];
	$categories_details=$_POST['details'];
	
	if($categories_title=='' or $categories_shortnotes=='' or $categories_details==''){

		echo "<script>alert('all field should fill up')</script>";
		exit();
	}
	else{
		move_uploaded_file($image_tmp,"../img/product/thumb/$categories_pic");
		
		$insert_query ="INSERT INTO categories_table (categories_title,categories_pic,categories_shortnotes,categories_details) values ('$categories_title','$categories_pic','$categories_shortnotes','$categories_details')";
		
		if(mysql_query($insert_query)){
		
		echo "<center><h1>Post Published Successfully</h1></center>";
		
		}
	
	}

}


 ?>