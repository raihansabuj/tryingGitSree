<?php 
session_start();

if(!isset($_SESSION['user_name'])){

header("location: login.php");
}
else {

?>
<?php 
	$product_id=$_GET['ins'];
	include("includes/connect.php");
	include("includes/SimpleImage.php");
	
	include("include.php");
?>	
<?php 
if(isset($_POST['submit'])){
	$product_id=$_POST['product_id'];
	$color=$_POST['color']; 
	$coverpic=$_POST['coverpic'];
    date_default_timezone_set("Asia/Dhaka");
    $product_img_entry_date= date('d-m-Y H:i:s a'); //Returns IST
	
	$image=$_FILES['image']['name']; // Saving the Image under 'image' column
	$imgdir=$_FILES['image']['tmp_name'];
	$target="";
	$target2="";
	$successimg=0;
	if(!empty($image))
	{
		list($imgwidth, $imgheight, $attr) = getimagesize($imgdir);
		//$rannumber = rand(4,999);
		$fname = $_FILES['image']['name'];
		$parts = explode(".", $fname);
		$ext= strtolower($parts[count($parts)-1]);
			 if((!empty($image)) && (!(($ext =="jpg") || ($ext =="jpeg") || ($ext =="JPG") || ($ext =="JPEG")|| ($ext =="png")|| ($ext =="gif"))))	
				$msg = "Image must be in jpg or jpeg, png or gif format";			
			else {
				$ran = time() ;
				$ran2 = $ran.".".$ext;
				//$ran2 = $category."."."png";
				$target2 = $ran2; 
				
				if(move_uploaded_file($_FILES["image"]["tmp_name"],"../img/product/large/" . $target2)){
					
					// (  USAGES of SimpleImage Plagins to Resize the image and save a new location.
					   $image = new SimpleImage();
					   $image->load("../img/product/large/" . $target2); //image' temporary name
					   
						$image->resizeToWidth(270);
						$image->save('../img/product/medium/'.$target2); // target of the images and saved name of the images  in($target2)
						
						$image->resizeToWidth(170);
						$image->save('../img/product/thumb/'.$target2); // target of the images and saved name of the images  in($target2)
							// ) End of USAGES SimpleImage...
						 
					$successimg=1;}
							
				}

		if(($successimg==1)&&!empty($_POST['product_id']))
		{
			$insert_query =mysql_query("INSERT INTO product_image (product_id,image,color,coverpic,product_img_entry_date) values ('$product_id','$target2','$color','$coverpic','$product_img_entry_date')");
			if($coverpic==1){
				$image_id= mysql_insert_id();
				if(!empty($image_id)) {
					$cat_id=get_cat_id($product_id);
					$entry_date=date('d-m-y h:i:s a');
					$status=1;
					$sql=mysql_query("insert into category_cover_pic (cat_id, product_id, image_id, entry_date,status) values('$cat_id','$product_id','$image_id','$entry_date', '$status')");
					
					$process_id= mysql_insert_id();
					
					$update=mysql_query("update category_cover_pic set status=0 where cat_id=$cat_id and id<>$process_id");				
				}
			}
			if($insert_query){
				echo "<script>alert('Post Published Successfully')</script>";
				echo "<script>window.open('view_productimage.php?page=1','_self')</script>";
			}
		}else{
			echo '<script type="text/javascript">alert("Image Field must not empty.... Uploading Failed.");</script>';
		}
	}
}
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


<div id="page-heading"><h1>Add product image:</h1></div>


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
			<div class="step-dark-left"><a href="">Add image</a></div>
			<div class="step-dark-right">&nbsp;</div>
			
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
		
<form method="post" action="#" enctype="multipart/form-data">
	<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">Product Id:</th>
			<td><input type="int"  name="product_id" value="<?php echo $product_id ?>" class="inp-form" /></td>
			<td></td>
		</tr>
		<tr>
		<th></th>
			<td>* image size must be 1200px X 1333px</td>
		</tr>
		<tr>
			<th valign="top">Image:</th>
			<td><input type="file" name="image"  /></td>
		</tr>
		<tr>
			<th valign="top">Colour:</th>
			<td ><select  name='color' style="width:200px;height:35px">
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
			<th valign="top">Cover Image:</th>
			<td>
			<input type="radio" name="coverpic" value="1" > Yes  &nbsp;&nbsp;
				
			<input type="radio" name="coverpic" value="0" checked> No
			</td>
			<th>&nbsp;</th>
			<td></td>
		</tr>
		
		<tr>
				<th>&nbsp;</th>
				<td valign="top">
					<input type="submit" name="submit" class="form-submit" />
					<input type="reset" value="" class="form-reset"  />
				</td>
				<td></td>
				
		</tr>
	</table>
	</form>
	<!-- end id-form  -->

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