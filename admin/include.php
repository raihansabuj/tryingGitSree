<?php
include("includes/connect.php");

function get_product_name($product_id)
{	
	$query_prod_name=mysql_query("select * from  `sareestore`.`product_table` where product_id=$product_id");
	$result_prod=mysql_fetch_assoc($query_prod_name);
    $product_name=$result_prod["product_title"];
	return $product_name;
}

function get_color_name($color)
{	
	$query_color_name=mysql_query("select * from  product_color where product_color_id=$color");
	$result_color=mysql_fetch_assoc($query_color_name);
    $color_name=$result_color["product_color_name"];
	return $color_name;
}
function get_cat_name($cat_id)
{	
	$query_cat_name=mysql_query("select * from  categories_table where categories_id=$cat_id");
	$result_cat=mysql_fetch_assoc($query_cat_name);
    $cat_name=$result_cat["product_categories"];
	return $cat_name;
}
function get_image($prod_id)
{	
	$query_image=mysql_query("select * from  product_image WHERE product_id=$prod_id ORDER BY product_img_entry_date DESC Limit 1");
	$result_image=mysql_fetch_assoc($query_image);
    $image_name=$result_image["image"];
	return $image_name;
}
function get_cat_id($prod_id)
{	
	$query_cat=mysql_query("select 	product_categories from  product_table WHERE 	product_id=$prod_id");
	$result_cat=mysql_fetch_assoc($query_cat);
    $cat_id=$result_cat["product_categories"];
	return $cat_id;
}
function get_image_name($image_id)
{	
	$query_img=mysql_query("select image from  product_image WHERE 	id=$image_id");
	$result_img=mysql_fetch_assoc($query_img);
    $image=$result_img["image"];
	return $image;
}
function get_prod_id($image_id)
{	
	$query_prod_id=mysql_query("select product_id from  product_image WHERE id=$image_id");
	$result_prod_id=mysql_fetch_assoc($query_prod_id);
    $prod_id=$result_prod_id["product_id"];
	return $prod_id;
}
function get_shipping_name($id)
{	
	$query_shipping_id=mysql_query("select product_shipping from  shipping WHERE shipping_id=$id");
	$result_shipping_id=mysql_fetch_assoc($query_shipping_id);
    $shipping_id=$result_shipping_id["product_shipping"];
	return $shipping_id;
}
function get_work_types($ids)
{	
	$query_work_types=mysql_query("select product_work_type from  product_work_type WHERE product_work_id=$ids");
	$result_work_types=mysql_fetch_assoc($query_work_types);
    $work_types_name=$result_work_types["product_work_type"];
	return $work_types_name;
}
function get_colors($ids)
{	
	$query_color_types=mysql_query("select product_color_name from  product_color WHERE product_color_id=$ids");
	$result_color_types=mysql_fetch_assoc($query_color_types);
    $color_types_name=$result_color_types["product_color_name"];
	return $color_types_name;
}
function get_print_types($ids)
{	
	$query_color_types=mysql_query("select product_print_name from  product_print_type WHERE product_print_id=$ids");
	$result_color_types=mysql_fetch_assoc($query_color_types);
    $color_types_name=$result_color_types["product_print_name"];
	return $color_types_name;
}
 function get_fabric_name($id)
{	
	$query_fabric=mysql_query("select fabric_name from fabric WHERE fabric_id=$id");
	$result_fabric=mysql_fetch_assoc($query_fabric);
    $fabric_name=$result_fabric["fabric_name"];
	return $fabric_name;
}
 function get_care_name($id)
{	
	$query_care=mysql_query("select care_name from care WHERE care_id=$id");
	$result_care=mysql_fetch_assoc($query_care);
    $care_name=$result_care["care_name"];
	return $care_name;
}
 // <-- to avoid SQL injections, please change your method from mysql_query to mysqli_query (use the mysqli functions instead of mysql) 
 
/*img/product/small/<br /> <b>Warning</b>:  mysql_fetch_assoc() expects parameter 1 to be resource, boolean given in <b>C:\xampp\htdocs\projects\sareehouse\site\admin\include.php</b> on line <b>29</b><br /> 
function get_care_name($care)
{	
	$query_care_name=mysql_query("select * from  care_name where care_id=$care");
	$result_care=mysql_fetch_assoc($query_care_name);
    $care_name=$result_care["care_name"];
	return $care_name;
} */
?>