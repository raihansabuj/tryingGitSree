<?php 
session_start();

if(!isset($_SESSION['user_name'])){

header("location: login.php");
}
else {

?>
<?php
include("includes/connect.php");

if(isset($_GET['del'])){

$delete_id= $_GET['del'];
$delete_query="delete from product_image where id='$delete_id'";

if(mysql_query($delete_query)){
	echo "<script>alert('Post has been Deleted')</script>";
	echo"<script>window.open('view_productimage.php','_self')</script>";
}

}
?>
<?php } ?>