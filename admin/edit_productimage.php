<?php 
session_start();

if(!isset($_SESSION['user_name'])){

header("location: login.php");
}
else {

 
	include("includes/connect.php");
	include("includes/SimpleImage.php");
	
	include("include.php");
	
	if(isset($_POST['update'])){
		$color_post=$_POST['color']; 
		$coverpic_post=$_POST['coverpic'];
		date_default_timezone_set("Asia/Dhaka");
		$product_img_update_date= date('d-m-Y H:i:s a'); //Returns IST
		
		$target2="asdf";
		
		if(($successimg==1)&&!empty($_POST['product_id']))
		{
			$update_query =mysql_query("update product_image set image='$target2',color='$color_post',coverpic='$coverpic_post',image_update_date='$product_img_update_date' where id='$update_id'");
				
				if($coverpic==1){
					$image_id= mysql_insert_id();
					if(!empty($image_id)) {
						$cat_id=get_cat_id($product_id);
						$status=1;
						$sql=mysql_query("update category_cover_pic set cat_id='$cat_id', product_id='$product_id', image_id='$image_id', update_date='$update_date', status='$status'");
						
						$process_id= mysql_insert_id();
						
						$update=mysql_query("update category_cover_pic set status=0 where cat_id=$cat_id and id<>$process_id");				
					}
				}
			if($update_query){
				echo "<script>alert('Post Published Successfully')</script>";
				echo "<script>window.open('view_productimage.php?page=1','_self')</script>";
			}
		}else{echo"value nei";}	  
		
	}else{echo "update e dhoke nai";}// end submit 
			



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Shareehouse Admin Panel</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
 
<!--  checkbox styling script -->
<script src="js/jquery/ui.core.js" type="text/javascript"></script>
<script src="js/jquery/ui.checkbox.js" type="text/javascript"></script>
<script src="js/jquery/jquery.bind.js" type="text/javascript"></script>
<script type="text/javascript">
/*$(function(){
	$('input').checkBox();
	$('#toggle-all').click(function(){
 	$('#toggle-all').toggleClass('toggle-checked');
	$('#mainform input[type=checkbox]').checkBox('toggle');
	return false;
	});
}); */
</script>  


<![if !IE 7]>

<!--  styled select box script version 1 -->
<script src="js/jquery/jquery.selectbox-0.5.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect').selectbox({ inputClass: "selectbox_styled" });
});
</script>
 

<![endif]>


<!--  styled select box script version 2 --> 
<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
	$('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
});
</script>

<!--  styled select box script version 3 --> 
<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
});
</script>

<!--  styled file upload script --> 
<script src="js/jquery/jquery.filestyle.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
$(function() {
	$("input.file_1").filestyle({ 
	image: "images/forms/upload_file.gif",
	imageheight : 29,
	imagewidth : 78,
	width : 300
	});
});
</script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>
 
<!-- Tooltips -->
<script src="js/jquery/jquery.tooltip.js" type="text/javascript"></script>
<script src="js/jquery/jquery.dimensions.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$('a.info-tooltip ').tooltip({
		track: true,
		delay: 0,
		fixPNG: true, 
		showURL: false,
		showBody: " - ",
		top: -35,
		left: 5
	});
});
</script> 

<!--  date picker script -->
<link rel="stylesheet" href="css/datePicker.css" type="text/css" />
<script src="js/jquery/date.js" type="text/javascript"></script>
<script src="js/jquery/jquery.datePicker.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
        $(function()
{

// initialise the "Select date" link
$('#date-pick')
	.datePicker(
		// associate the link with a date picker
		{
			createButton:false,
			startDate:'01/01/2005',
			endDate:'31/12/2020'
		}
	).bind(
		// when the link is clicked display the date picker
		'click',
		function()
		{
			updateSelects($(this).dpGetSelected()[0]);
			$(this).dpDisplay();
			return false;
		}
	).bind(
		// when a date is selected update the SELECTs
		'dateSelected',
		function(e, selectedDate, $td, state)
		{
			updateSelects(selectedDate);
		}
	).bind(
		'dpClosed',
		function(e, selected)
		{
			updateSelects(selected[0]);
		}
	);
	
var updateSelects = function (selectedDate)
{
	var selectedDate = new Date(selectedDate);
	$('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
	$('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
	$('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
}
// listen for when the selects are changed and update the picker
$('#d, #m, #y')
	.bind(
		'change',
		function()
		{
			var d = new Date(
						$('#y').val(),
						$('#m').val()-1,
						$('#d').val()
					);
			$('#date-pick').dpSetSelected(d.asString());
		}
	);

// default the position of the selects to today
var today = new Date();
updateSelects(today.getTime());

// and update the datePicker to reflect it...
$('#d').trigger('change');
});
</script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body> 
<!-- Start: page-top-outer -->
<!-- Start: page-top-outer -->
<div>
<?php include "topmenu.php" ?>
</div>
<!--  start nav-outer-repeat................................................... END -->
 
 <div class="clear"></div>
 
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>Update product image:</h1></div>


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
	
		<!--  start step-holder -->
		<div id="step-holder">
			<div class="step-no">1</div>
			<div class="step-dark-left"><a href="">Update image</a></div>
			<div class="step-dark-right">&nbsp;</div>
			
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
<?php
if(isset($_GET['edit'])){
	
	$edit_id = $_GET['edit'];
	$edit_query = "select * from product_image where id='$edit_id'";
	$run_edit=mysql_query($edit_query);
	
	while($edit_row= mysql_fetch_array($run_edit)){
	$update_id=$edit_row['id'];
	$product_id=$edit_row['product_id'];
	$color=$edit_row['color'];
	$coverpic=$edit_row['coverpic'];
	$prev_image=$edit_row['image'];

} //end loop
?>		
<form method="post" action="edit_productimage.php" enctype="multipart/form-data">
	<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">Product Name:</th>
			<td><input type="text" value="<?php echo $product_id; ?>" name="product_title" class="inp-form" /></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Image:</th>
			<td><input type="file" name="image" style="margin-top:40px;">
			<img src="../img/product/thumb/<?php echo $prev_image;?>" width="100" height="100" style="float:left;">
			</td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Colour:</th>
		<!--	<td><input type="text" value="<?php //echo get_color_name($color); ?>" name="color" class="inp-form"></td>-->
			<td ><!--<select  name='color' style="width:200px;height:35px"> -->
			
			
			 <select name="" value="<?php echo get_color_name($color);?>"style="width:200px;height:35px">
			<option value="<?php echo get_color_name($color);?>"><?php echo get_color_name($color);?></option> 
			<?php 
			
			 $query=mysql_query("select * from  `sareestore`.`product_table` where product_id=$product_id");
				while ($row=mysql_fetch_array($query)){
				//	 echo "<select  name='color'>";
							$categories = '';
							$colors = explode(",", $row['product_color_availability']);
							foreach($colors as $color) {
								$color = trim($color);
								echo $categories= "<option value='" . $color . "'>" . get_color_name($color) . "</option>";
							}
				//	echo "</select>";	
				} 
	
	 
			?> 
			</select>	</br>
			</td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Cover Pic:</th>
			<td>
			<input type="radio" name="coverpic" value="1" <?php if ($coverpic == '1') echo 'checked="checked"'; ?>>Yes
			<?php //echo "$product_blouse";?>
			<input type="radio" name="coverpic" value="0" <?php if ($coverpic == '0') echo 'checked="checked"'; ?>>No
			</td>
			<td></td>
		</tr>
		<tr>
				<th>&nbsp;</th>
				<td valign="top">
					<input type="submit" name="update" class="form-submit" />
				</td>
				<td></td>
				
		</tr>
	</table>
	</form>
	<!-- end id-form  -->
<?php } ?>
	</td>
	<td>

	<!--  start related-activities -->
	<div id="related-activities">
		
		<!--  start related-act-top -->
		<div id="related-act-top">
		<img src="images/forms/header_related_act.gif" width="271" height="43" alt="" />
		</div>
		<!-- end related-act-top -->
		
		<!--  start related-act-bottom -->
		<div id="related-act-bottom">
		
			<!--  start related-act-inner -->
			<div id="related-act-inner">
			
				<div class="left"><a href=""><img src="images/forms/icon_plus.gif" width="21" height="21" alt="" /></a></div>
				<div class="right">
					<h5>Add another product</h5>
					Lorem ipsum dolor sit amet consectetur
					adipisicing elitsed do eiusmod tempor.
					<ul class="greyarrow">
						<li><a href="">Click here to visit</a></li> 
						<li><a href="">Click here to visit</a> </li>
					</ul>
				</div>
				
				<div class="clear"></div>
				<div class="lines-dotted-short"></div>
				
				<div class="left"><a href=""><img src="images/forms/icon_minus.gif" width="21" height="21" alt="" /></a></div>
				<div class="right">
					<h5>Delete products</h5>
					Lorem ipsum dolor sit amet consectetur
					adipisicing elitsed do eiusmod tempor.
					<ul class="greyarrow">
						<li><a href="">Click here to visit</a></li> 
						<li><a href="">Click here to visit</a> </li>
					</ul>
				</div>
				
				<div class="clear"></div>
				<div class="lines-dotted-short"></div>
				
				<div class="left"><a href=""><img src="images/forms/icon_edit.gif" width="21" height="21" alt="" /></a></div>
				<div class="right">
					<h5>Edit categories</h5>
					Lorem ipsum dolor sit amet consectetur
					adipisicing elitsed do eiusmod tempor.
					<ul class="greyarrow">
						<li><a href="">Click here to visit</a></li> 
						<li><a href="">Click here to visit</a> </li>
					</ul>
				</div>
				<div class="clear"></div>
				
			</div>
			<!-- end related-act-inner -->
			<div class="clear"></div>
		
		</div>
		<!-- end related-act-bottom -->
	
	</div>
	<!-- end related-activities -->

</td>
</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
</td>
<td id="tbl-border-right"></td>
</tr>
<tr>
	<th class="sized bottomleft"></th>
	<td id="tbl-border-bottom">&nbsp;</td>
	<th class="sized bottomright"></th>
</tr>
</table>









 





<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer -->

 

<div class="clear">&nbsp;</div>
    
<!-- start footer -->         
<?php include "footer.php" ?>
<!-- end footer -->
 
</body>
</html>

<?php } ?>