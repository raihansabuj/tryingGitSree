<html>
<head>
	<title> Inserting Post</title>
</head>
<body>
<form method="post"action="insert_post.php" enctype="multipart/form-data">
	
	<table width="600" align="center" border="10">
		
		<tr>
			<td align="centre" bgcolor="yellow"colspan="6"><h1>Insert New Post Here.</h1></td>
		</tr>
		<tr>
			<td align="right">Post Title:</td>
			<td><input type="text" name="title"size="30"></td>
		</tr>
		<tr>
			<td align="right">Post Author:</td>
			<td><input type="text" name="author"size="30"></td>
		</tr>
		<tr>
			<td align="right">Post  Keywords:</td>
			<td><input type="text" name="keywords"size="30"></td>
		</tr>
		<tr>
			<td align="right">Post Image:</td>
			<td><input type="file" name="image"></td>
		</tr>
		<tr>
			<td align="right">Post Content:</td>
			<td><textarea name="content" cols="30" rows="12"></textarea></td>
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

	$post_title=$_POST['title'];
	$post_date=date('Y-n-d');
	$post_author=$_POST['author'];
	$post_keywords=$_POST['keywords'];
	$post_content=$_POST['content'];
	$post_image=$_FILES['image']['name'];
	$image_tmp=$_FILES['image']['tmp_name'];
	
	if($post_title==' ' or $post_author=='' or $post_keywords=='' or $post_content==''){

		echo "<script>alert('all field should fill up')</script>";
		exit();
	}
	else{
		move_uploaded_file($image_tmp,"../images/$post_image");
		$insert_query ="insert into posts (post_title,post_date,post_author,post_image,post_keywords,post_content) values ('$post_title','$post_date','$post_author','$post_image','$post_keywords','$post_content')";
	
		if(mysql_query($insert_query)){
		
		echo "<center><h1>Post Published Successfully</h1></center>";
		
		}
	
	}

}


 ?>