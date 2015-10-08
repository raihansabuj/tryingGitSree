<?php include("includes/connect.php");

 
	
	$edit_id = $_GET['edit'];
	
 
				
$res=mysql_query("select * from product_table WHERE product_id='$edit_id'");
				while($edit_row=mysql_fetch_array($res))
				{ 
					
		$product_id=$edit_row['product_id'];
		$product_title=$edit_row['product_title'];
		$product_categories=$edit_row['product_categories'];
		$product_price=$edit_row['product_price'];
		$product_shipping=$edit_row['product_shipping'];
		$product_blouse=$edit_row['product_blouse'];
		$product_stock_availability=$edit_row['product_stock_availability'];  
		//$product_color_availability=explode($edit_row['product_color_availability']);  
		$product_color_availability=$edit_row['product_color_availability']."</br>";  
		
		//echo $product_item_code=$edit_row['product_item_code']."</br>";
		//echo $product_work_type=$edit_row['product_work_type']."</br>";
		echo $product_print_type=$edit_row['product_print_type']."</br>";
		$product_weight=$edit_row['product_weight'];
		$fabric_name=$edit_row['fabric_name'];
		$care_name=$edit_row['care_name'];
		$product_description=$edit_row['product_description'];
		 echo $edit_row['product_color_availability']."</br>";
		$productid_arr = explode(", ",$product_color_availability);
		echo $productid_arr[3];
		 echo "<hr>";
	}
//}
/////////////////////////////////////
$pizza  = "piece1, piece2, piece3, piece4, piece5, piece6";
$pieces = explode(", ", $pizza);
echo $pieces[4]."<br/>";
/* 
   A string that doesn't contain the delimiter will simply
   return a one-length array of the original string.
*/
 $input1 = "hello";
$input2 = "hello,there";
 var_dump( explode( ',', $input1 ) );
$print=var_dump( explode( ',', $input2 ) );
echo $print ;
echo "</br>";
 /////////////////////
$text_line = "1, 1500, 250, 150, 100, 1000";
$text_line = explode(",",$text_line);

print $text_line[5];
echo "</br>";
echo "</br>";
 $text_line = "Poll number 1, 1500, 250, 150, 100, 1000";
$text_line = explode(",",$text_line);

for ($start=0; $start < count($text_line); $start++) {

print $text_line[$start] . "<BR>";

}
////////////////////////////
//$sresult=mysql_query($sql) or die(mysql_error());
/*
?>
<?php
    include "database_connection.php"; 
    $cutomername = $_GET['username'];
    $productid = $_GET['userid'];
    $cust_id = $_GET['custid'];
    //$productid_arr = explode(',' , $productid);


 if(isset($_POST['submit']))
     {
     $productid_arr = array();
     foreach($_POST['checkbox'] as $ch => $value)
     {
        $productid_arr[] = $value;
     }

    $des_prod_id = implode(',' , $productid_arr);

    $query = mysql_query("UPDATE customer SET product_id = '$des_prod_id'  where  ID = '$cust_id'");
    }

    ?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> <?php echo $cutomername;?></title>
    </head>

    <body>

    <form method="post" name="checkboxForm">
    <?php
* /
    $query_flags = "select * from products";
    $row_flags=mysql_query($query_flags); 
    $i=0;

    while ($row = mysql_fetch_array($row_flags)){

           $product_id = $row['product_id'];
           $product= $row['product'];
           if(in_array($product_id, $productid_arr)) 
           {
            $check = 'checked';
            } else{
            $check = '';
            }
        echo  "<input   type=\"checkbox\" name=\"checkbox[]\"  id=\"$product_id\" value='" . $row['product_id'] . "' $check />";
        echo $row['product'];
    echo "<hr />"; 
    $i++;
    }   */
    ?>  
    <input class="submit" type="submit" value="Submit" name="submit">   

</form>
</body>
</html>