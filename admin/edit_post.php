
<html>
	<head>
		<title> Admin Panel </title>
		<link rel="stylesheet" href="admin_style.css" />
	</head>
	<body>
		<div id="header">
			<a href="index.php"><h1>Welcome For Update data</h1>
			</a></div>
		
		<div id="sidebar">
		
			<?php include"admin_sidebar.php" ?>
		</div>
		
<?php 
include("includes/connect.php");
if(isset($_GET['edit'])){

$edit_id=$_GET['edit'];

if(isset($_POST['updates'])){
	
		$update_id=$_GET['edit_form'];
		$post_title1=$_POST['title'];
		$post_date1=date('Y-m-d');
		$post_author1=$_POST['author'];
		$post_keywords1=$_POST['keywords'];
		$post_content1=$_POST['content'];
		$post_image1=$_FILES['image']['name'];
		$image_tmp=$_FILES['image']['tmp_name'];
		
		 
	 
			//move_uploaded_file($image_tmp,"../images/$post_image1");post_image='$post_image1',
			
			$update_query = "UPDATE posts set post_title='$post_title1',post_date='$post_date1',post_author='$post_author1',post_keyowrds='$post_keywords1',post_content='$post_content1' where post_id='$update_id'";
			
			if(mysql_query($update_query)){
			echo "<script>alert('Post has been Updated')</script>";
			echo"<script>window.open('view_post.php','_self')</script>";
			}else{
				echo 'error'. die(mysql_error($update_query)); 
				 
			}
		 
	}
	
$edit_query="select * from posts where post_id='$edit_id'";

$run_edit=mysql_query($edit_query);
while($edit_row=mysql_fetch_array($run_edit)){

$post_id= $edit_row['post_id'];
$post_title= $edit_row['post_title'];
$post_author= $edit_row['post_author'];
$post_keywords= $edit_row['post_keywords'];
$post_image= $edit_row['post_image'];
$post_content= $edit_row['post_content'];

?>

<form method="post" action="edit_post.php?edit_form=<?php echo $post_id; ?>" enctype="multipart/form-data">
	
	<table width="600" bgcolor="orange" align="center" border="10">
		
		<tr>
			<td bgcolor="yellow"colspan="6"><h1 style="text-align:center">Edit Post Here.</h1></td>
		</tr>
		<tr>
			<td align="right">Post Title:</td>
			<td><input type="text" name="title"size="30" value="<?php echo $post_title; ?>"></td>
		</tr>
		<tr>
			<td align="right">Post Author:</td>
			<td><input type="text" name="author"size="30" value="<?php echo $post_author; ?>"></td>
		</tr>
		<tr>
			<td align="right">Post  Keywords:</td>
			<td><input type="text" name="keywords"size="30" value="<?php echo $post_keywords; ?>"></td>
		</tr>
		<tr>
			<td align="right">Post Image:</td>
			
			<td><input type="file" name="image"/><img src="../images/<?php echo $post_image; ?>" width="80"height="60" ><td>
		</tr>
		<tr>
			<td align="right">Post Content:</td>
			<td><textarea name="content" cols="30" rows="12"><?php echo $post_content; ?></textarea></td>
		</tr>
		<tr>
			<td align="center"colspan="6"><input type="submit" name="updates" value="Update Now"></td>
		</tr>
		
	</table>
</form>
<?php }} ?>
</body>
</html>
<?php 

	

?>