<?php 
	$product_id=$_GET['ins'];
?>			
<html>
<head>
	<title> Inserting Post</title>
	<link rel="stylesheet" href="admin_style.css" />
</head>
<body>
	
		<div id="sidebar">

			<?php include"admin_sidebar.php" ?>
		</div>
<form method="post" action="#" enctype="multipart/form-data">
	
	<table width="600" align="center" border="10">
		
		<tr>
			<td align="centre" bgcolor="grey"colspan="6"><h1>Insert Product Review.</h1></td>
		</tr>
		
		<tr>
			<td align="right">Product Id:</td>
			<td><input type="text" value="<?php echo $product_id; ?>" name="product_id"></td>
		</tr>
	
		
		<tr>
			<td align="right">Name:</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td align="right">Email:</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td align="right">Rating:</td>
			<td><input type="number" name="rating" min="1" max="5" value="1"></td>
		</tr>
		<tr>
			<td align="right">Review:</td>
			<td>
				<textarea type="text" name="review"></textarea>
			</td>
			<!--<td><input type="text" name="colour" value=""></input></td> -->
		</tr>
		<tr>
		<?php
		//	 $date = date('Y-m-d H:i:s');
		//	 echo $date;
			
		?>
		<tr>
			<td align="center"colspan="10"><input type="submit" name="submit" value="Publish Now"></td>
		</tr>
		
	</table>
</form>

</body>
</html>

<?php include("includes/connect.php");

if(isset($_POST['submit'])){

	$product_id=$_POST['product_id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$rating=$_POST['rating'];
	$review=$_POST['review'];
	
	if($email=='' or $rating==''){

		echo "<script>alert('all field should fill up')</script>";
		//exit();
	}
	else{
		
		$insert_query ="INSERT INTO review_product (product_id,name,email,rating,review) values ('$product_id','$name','$email','$rating','$review')";
		
		if(mysql_query($insert_query)){
		
		echo "<center><h1>Post Published Successfully</h1></center>";
		
		}
	
	}

}


 ?>