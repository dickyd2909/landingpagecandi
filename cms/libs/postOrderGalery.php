<?php
	date_default_timezone_set("Asia/Jakarta");
	include "functiondb.php";
	
	$post_order = isset($_POST["post_order_ids"]) ? $_POST["post_order_ids"] : [];

	if(count($post_order)>0){
		for($order_no= 0; $order_no < count($post_order); $order_no++)
		{
			$query = "UPDATE galery SET galery_order = '".($order_no+1)."' WHERE galery_id = '".$post_order[$order_no]."'";
			mysqli_query($koneksi, $query);
		}
		echo true; 
	} else {
		echo false;
	}
?>