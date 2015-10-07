<?php 
session_start();

if(!isset($_SESSION['user_name'])){

header("location: login.php");
}
else {

?>
<?php include("includes/connect.php");

if(isset($_POST['submit'])){

	 $product_title=$_POST['product_title'];
	 $product_item_code=$_POST['product_item_code'];
	 $product_categories=$_POST['product_categories'];
	 $product_price=$_POST['product_price'];
	 $product_shipping=$_POST['product_shipping'];
	// $product_brand=$_POST['product_brand'];
	 $product_blouse=$_POST['blouse'];

	$product_stock_availability=$_POST['stock'];
 	$colors =implode(", ",$_POST["product_color_availability"]);
	$product_work_type=$_POST['product_work_type'];
 	$print = implode(", ",$_POST["product_print_type"]);
	$product_weight=$_POST['product_weight'];
	$fabric_name=$_POST['fabric_name'];
	$care_name =$_POST['care_name'];
	$product_description=$_POST['product_description'];
	date_default_timezone_set("Asia/Dhaka");
    $product_entry_date= date('d-m-Y H:i:s a'); 
	
	 if($product_item_code=='' || $product_categories=='' || $colors=='' || $print==''){

		echo "<script>alert('Required field should fill up'),window.open('insert_product.php','_self')</script>";
		//echo "<script>window.open('insert_product.php','_self')</script>";
		
	}
	else{
		
		$insert_query =mysql_query("INSERT INTO product_table (product_title,product_item_code,product_categories,product_price,product_shipping,product_blouse,product_stock_availability,product_color_availability,product_work_type,product_print_type,product_weight,fabric_name,care_name,product_description,product_entry_date) values ('$product_title','$product_item_code','$product_categories','$product_price','$product_shipping','$product_blouse','$product_stock_availability','$colors','$product_work_type','$print','$product_weight','$fabric_name','$care_name','$product_description','$product_entry_date')");
		
		
		if($insert_query){
		
		//echo "<center><h1>Post Published Successfully</h1></center>";
		echo "<script>alert('Post Published Successfully')</script>";
		
		}else {die("Error in Submitting...". mysql_error());}
	
	}

}


 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Sareehouse Admin Panel</title>
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
<div>
<?php include "topmenu.php" ?>
</div>
<!--  start nav-outer-repeat................................................................................................. START -->

<!--  start nav-outer-repeat................................................... END -->
 
 <div class="clear"></div>
 
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>Add product</h1></div>


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
<form method="post" action="#" enctype="multipart/form-data">	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
	
		<!--  start step-holder -->
		<div id="step-holder">
			<div class="step-no">1</div>
			<div class="step-dark-left"><a href="">Add product details</a></div>
			<div class="step-dark-right">&nbsp;</div>
			
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">Product Code:</th>
			<td><input type="text" name="product_item_code" value="" class="inp-form" />&nbsp;&nbsp;*</td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Product title:</th>
			<td><input type="text" name="product_title" class="inp-form" /></td>
			<td></td>
		</tr>
		<!--<tr>
			<th valign="top">Product name:</th>
			<td><input type="text" class="inp-form-error" /></td>
			<td>
			<div class="error-left"></div>
			<div class="error-inner">This field is required.</div>
			</td>
		</tr> -->
		<tr>
		<th valign="top">Categories:</th>
		<td>
				<select class="inp-form" name="product_categories" value="dropdown"style="width:200px;height:35px">
					<option value="----">&nbsp;&nbsp;--Select--&nbsp;&nbsp;</option>
					<?php
						$get_cat_query=mysql_query("SELECT * FROM `categories_table` ORDER BY product_categories");
						while($catname=mysql_fetch_array($get_cat_query)){
						
						echo '<option value="'.$catname['categories_id'].'">'.$catname['product_categories'].'</option>';
						
					}   ?></br>
				</select>&nbsp;&nbsp;*
		</td>
		<td></td>
		</tr>
		<tr>
			<th valign="top">Price:</th>
			<td><input type="number" name="product_price"class="inp-form" /></td>
			<td></td>
		</tr>
		<tr>
		<th valign="top">Shipping:</th>
		<td>
				<select class="inp-form" name="product_shipping" value="dropdown"style="width:200px;height:35px">
					<option value="----">&nbsp;&nbsp;--Select--</option>
					<?php
						$get_ship_query= mysql_query("SELECT * FROM `shipping` ORDER BY product_shipping");
						while($shipname=mysql_fetch_array($get_ship_query)){
						
						echo '<option value="'.$shipname['shipping_id'].'">'.$shipname['product_shipping'].'</option>';
						
					}   ?></br>
					
					
				</select>
			</td>
		<td></td>
		</tr> 
		<tr>
			<th valign="top">Blouse:</th>
			<td>
			<input type="radio" name="blouse" value="yes" checked>Yes
			
			<input type="radio" name="blouse" value="no">No
			</td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Stock Available:</th>
			<td>
			<input type="radio" name="stock" value="yes" checked>Yes
				
			<input type="radio" name="stock" value="no">No
			</td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Colour Available:</th>
			<td style="border:1px;">&nbsp;<?php
				$get_color_query=mysql_query("SELECT * FROM `product_color` ORDER BY product_color_name");
				while($row_color=mysql_fetch_assoc($get_color_query)){
	
				echo '<input type="checkbox" name="product_color_availability['.$row_color["product_color_id"].']" value="'.$row_color["product_color_id"].'" />'.$row_color["product_color_name"].' &nbsp;&nbsp; ';
				
			}   ?>*</br>
			</td>
			<td></br></td>
		</tr>
		<tr>
		<th valign="top">work type:</th>
		<td>
				<select class="inp-form" name="product_work_type" value="dropdown"style="width:200px;height:35px">
					<option value="----">&nbsp;&nbsp;--Select--</option>
					<?php
						$get_work_query=mysql_query("SELECT * FROM `product_work_type` ORDER BY product_work_type");
						while($workname=mysql_fetch_array($get_work_query)){
						
						echo '<option value="'.$workname['product_work_id'].'">'.$workname['product_work_type'].'</option>';
						
					}   ?></br>
				</select>
			</td>
		<td></td>
		</tr> 
		<tr>
			<th valign="top">Print type:</th>
			<td>&nbsp;<?php
				$get_print_query=mysql_query("SELECT * FROM `product_print_type` ORDER BY product_print_name");
				while($row_print=mysql_fetch_assoc($get_print_query)){
		
				echo '<input type="checkbox" name="product_print_type['.$row_print["product_print_id"].']" value="'.$row_print["product_print_id"].'" />'.$row_print["product_print_name"].' &nbsp;&nbsp; ';
				
			}   ?>*</br>
			</td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Weight:</th>
			<td><input type="text" name="product_weight" class="inp-form" />&nbsp;lbs</td>
			<td></td>
		</tr>
		<tr>
		<th valign="top">Fabric name:</th>
		<td>
			<select class="inp-form" name="fabric_name" value="dropdown"style="width:200px;height:35px">
			<option value="----">&nbsp;&nbsp;--Select--</option>
			<?php
				$get_febric_query=mysql_query("SELECT * FROM `fabric` ORDER BY fabric_name");
				while($fabricname=mysql_fetch_array($get_febric_query)){
				
				echo '<option value="'.$fabricname['fabric_id'].'">'.$fabricname['fabric_name'].'</option>';
				
			}   ?></br>
			</select>
		</td>
		<td></td>
		</tr>
		<tr>
		<th valign="top">Care name:</th>
		<td>
			<select class="inp-form" name="care_name" value="dropdown"style="width:200px;height:35px">
			<option value="----">&nbsp;&nbsp;--Select--</option>
			<?php
				$get_care_query=mysql_query("SELECT * FROM `care` ORDER BY care_name");
				while($carename=mysql_fetch_array($get_care_query)){
				
				echo '<option value="'.$carename['care_id'].'">'.$carename['care_name'].'</option>';
				
			}   ?></br>
			</select>
			</td>
		<td></td>
		</tr>
	<!--	<tr>
		<th valign="top">Select a date:</th>
		<td class="noheight">
		
			<table border="0" cellpadding="0" cellspacing="0">
			<tr  valign="top">
				<td>
				<form id="chooseDateForm" action="#">
				
				<select id="d" class="styledselect-day">
					<option value="">dd</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
				</select>
				</td>
				<td>
					<select id="m" class="styledselect-month">
						<option value="">mmm</option>
						<option value="1">Jan</option>
						<option value="2">Feb</option>
						<option value="3">Mar</option>
						<option value="4">Apr</option>
						<option value="5">May</option>
						<option value="6">Jun</option>
						<option value="7">Jul</option>
						<option value="8">Aug</option>
						<option value="9">Sep</option>
						<option value="10">Oct</option>
						<option value="11">Nov</option>
						<option value="12">Dec</option>
					</select>
				</td>
				<td>
					<select  id="y"  class="styledselect-year">
						<option value="">yyyy</option>
						<option value="2005">2005</option>
						<option value="2006">2006</option>
						<option value="2007">2007</option>
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010">2010</option>
					</select>
					</form>
				</td>
				<td><a href=""  id="date-pick"><img src="images/forms/icon_calendar.jpg"   alt="" /></a></td>
			</tr> 
			</table>
		
		</td>
		<td></td>
	</tr> -->
	<tr>
		<th valign="top">Description:</th>
		<td><input type="text" name="product_description" class="form-textarea-" style="width:200px;height:50px;"/></td>
		<td></td>
	</tr>
<!--	<tr>
	<th>Image 1:</th>
	<td><input type="file" class="file_1" /></td>
	<td>
	<div class="bubble-left"></div>
	<div class="bubble-inner">JPEG, GIF 5MB max per image</div>
	<div class="bubble-right"></div>
	</td>
	</tr>
	<tr>
	<th>Image 2:</th>
	<td>  <input type="file" class="file_1" /></td>
	<td><div class="bubble-left"></div>
	<div class="bubble-inner">JPEG, GIF 5MB max per image</div>
	<div class="bubble-right"></div></td>
	</tr>
	<tr>
	<th>Image 3:</th>
	<td><input type="file" class="file_1" /></td>
	<td><div class="bubble-left"></div>
	<div class="bubble-inner">JPEG, GIF 5MB max per image</div>
	<div class="bubble-right"></div></td>
	</tr> -->
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" name="submit" class="form-submit" />
			<input type="reset" value="" class="form-reset"  />
		</td>
		<td></td>
	</tr>
	</table>
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
</form> 
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