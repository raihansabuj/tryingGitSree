	<?php  
			
			
			$host="localhost";
			$user="root";
			$pass="";
			$db="sareehouse";
			mysql_connect($host,$user,$pass) or die("Error in connecting....".mysql_error());
			mysql_select_db($db) or die("Error in selecting...".mysql_error());
	/*		
			$host="mysql434.db.sakura.ne.jp";
			$user="teikyoganpro";
			$pass="ganpro_web1";
			$db="teikyoganpro_cancer_hospital";
			mysql_connect($host,$user,$pass) or die("Error in connecting....".mysql_error());
			mysql_select_db($db) or die("Error in selecting...".mysql_error());
 		*/	 
	?>