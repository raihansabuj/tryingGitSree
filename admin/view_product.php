<?php 
session_start();

if(!isset($_SESSION['user_name'])){

header("location: login.php");
}
else {
include "include.php";
?>

<?php include("includes/connect.php"); ?>
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
$(function(){
	$('input').checkBox();
	$('#toggle-all').click(function(){
 	$('#toggle-all').toggleClass('toggle-checked');
	$('#mainform input[type=checkbox]').checkBox('toggle');
	return false;
	});
});
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
          image: "images/forms/choose-file.gif",
          imageheight : 21,
          imagewidth : 78,
          width : 310
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

<!-- End: page-top-outer -->

<!--  start nav-outer-repeat................................................................................................. START -->
<div>
<?php include "topmenu.php" ?>
</div>
<!--  start nav-outer-repeat....................................................END -->

 <div class="clear"></div>
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>View product</h1>
	</div>
	<!-- end page-heading -->

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
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
			
				
				<!--  start product-table ..................................................................................... -->
				<form id="mainform" action="#">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				
				<tr>
					<th class="table-header-repeat line-left"style="width:50px !important;"><a id="" >Id</a></th>
					<th class="table-header-repeat line-left"  style=" min-width: 60px;"><a href="">Item Code</a></th>
					<th class="table-header-repeat line-left"><a href="">Title</a></th>
					<th class="table-header-repeat line-left"><a href="">Cat.</a></th>
					<th class="table-header-repeat line-left"><a href="">Price</a></th>
					<th class="table-header-repeat line-left"><a href="">Shipping</a></th>
					<th class="table-header-options line-left" style=" min-width: 60px;"><a href="">Blouse</a></th>
					<th class="table-header-options line-left" style=" min-width: 60px;"><a href="">Stock</a></th>
					<th class="table-header-options line-left" style=" min-width: 60px;"><a href="">Colors</a></th>
					<th class="table-header-options line-left" style=" min-width: 60px;"><a href="">Work Type</a></th>
					<th class="table-header-options line-left" style=" min-width: 60px;"><a href="">Print Type</a></th>
					<th class="table-header-options line-left" style=" min-width: 60px;"><a href="">Weight</a></th>
					<th class="table-header-options line-left" style=" min-width: 60px;"><a href="">Fabric Name</a></th>
					<th class="table-header-options line-left" style=" min-width: 60px;"><a href="">Care</a></th>
					<th class="table-header-options line-left" style=" min-width: 80px !important;"><a href="">Description</a></th>
					<th class="table-header-options line-left" style=" min-width: 60px;"><a href="">Add Photo</a></th>
					<th class="table-header-options line-left" style=" min-width: 60px;"><a href="">Entry Date</a></th>
					<th class="table-header-options line-left" style=" min-width: 60px;"><a href="">Update Date</a></th>
					<th class="table-header-options line-left" style=" min-width: 60px;"><a href="">Options</a></th>
				</tr>
			
				<?php
				$page=$_GET["page"];
				if($page=="" || $page=="1")
				{
					$page1=0;
				}
				else
				{
				$page1=($page*15)-15;
				}
				$res=mysql_query("select * from product_table ORDER BY 'product_entry_date' DESC, 'product_update_date' DESC limit $page1,15");
				while($row=mysql_fetch_array($res))
				{
			
			
				$query="select * from product_table";
				$run=mysql_query($query);
				
			?>
				<tr>
				<td><?php echo $row['product_id'] ;?></td>
				<td><?php echo $row['product_item_code'] ;?></td>
				<td><?php echo $row['product_title']; ?></td>
				<td><?php echo get_cat_name($row['product_categories']); ?></td>
				<td><?php echo $row['product_price'] ;?></td>
				<td><?php echo get_shipping_name($row['product_shipping']); ?></td>
				<td><?php echo $row['product_blouse'] ?></td>
				<td><?php echo $row['product_stock_availability'];?></td>
				<td><?php //echo $row['product_color_availability'];
					//$colors=explode(", ",$row['product_color_availability']);
					//echo count($colors);
					$colors=explode(", ",$row['product_color_availability']);
					$count_colors=count($colors);	
					for($i=0; $i<$count_colors; $i++){
						echo get_colors($colors[$i])."</br>";
					}
				?></td>
				<td><?php echo get_work_types($row['product_work_type']) ;?></td>
				<td><?php //echo $row['product_print_type'];
				
						$print_types=explode(", ",$row['product_print_type']);
 						$count_print=count($print_types);	
						for($j=0; $j<$count_print; $j++){
 							echo get_print_types($print_types[$j])."</br>";
						}
				?></td>
				<td><?php echo $row['product_weight'] ;?></td>
				<td><?php echo get_fabric_name($row['fabric_name']) ;?></td>
				<td><?php echo get_care_name($row['care_name']) ;?></td>
				<td style=""><?php echo substr($row['product_description'],0,20).'...';  ?></td>
				<td>
				<a href="insert_productimage.php?ins=<?php echo $row['product_id']; ?>" title="Add Photo" class="icon-1 info-tooltip icon-6"></a><span style="color:blue;">Add Photo</span>
				</td>
					<td>
						<?php 
						echo $row['product_entry_date']
						//	$product_img_entry_date = date_create();
						//	echo date_format($product_img_entry_date, 'U = Y-m-d H:i:s'); 
						?>
					</td>
					<td>
						<?php 
						echo $row['product_update_date']
						//	$product_img_entry_date = date_create();
						//	echo date_format($product_img_entry_date, 'U = Y-m-d H:i:s'); 
						?>
					</td>
				<!--	<td><a href="">www.mainevent.co.za</a></td> -->
					<td class="options-width">
					
					<a href="edit_product.php?edit=<?php echo $row['product_id'] ?>" title="Edit" class="icon-1 info-tooltip"></a>
					<a href="delete_product.php?del=<?php echo $row['product_id'] ?>" title="Delete" class="icon-2 info-tooltip"></a>
					
					</td>
				</tr>
					<?php } ?>
				</table>
				<!--  end product-table................................... --> 
				</form>
			</div>
			<!--  end content-table  -->
		
			<!-- end actions-box........... -->
			
			<!--  start paging..................................................... -->
			<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tr>
			<td>
			<!--	<a href="" class="page-far-left"></a>
				<a href="" class="page-left"></a>
				<div id="page-info">Page <strong>1</strong> / 15</div>
				<a href="" class="page-right"></a>
				<a href="" class="page-far-right"></a>  -->
				<?php
			$res1=mysql_query("select * from product_table");
			$cou=mysql_num_rows($res1);
			$a=$cou/15;
			$a=ceil($a);
			for($b=1;$b<=$a;$b++)
			 {
			?><a href="view_product.php?page=<?php echo $b; ?>" style="text-decoration:none;"><?php echo $b." ";?></a>
			 <?php	}	?>
			</td>
		<!--	<td>
			<select  class="styledselect_pages">
				<option value="">Number of rows</option>
				<option value="">1</option>
				<option value="">2</option>
				<option value="">3</option>
			</select>
			</td> -->
			
			</tr>
			</table>
			<!--  end paging................ -->
			
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
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
<!--  end content-outer........................................................END -->

<div class="clear">&nbsp;</div>
    
<!-- start footer -->         
<?php include "footer.php" ?>
<!-- end footer -->
 
</body>
</html>
<?php } ?>