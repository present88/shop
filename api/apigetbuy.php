<?php
require_once('../config.php');
$select_orders = $ketnoi->query("SELECT * FROM orders ");

if(mysqli_num_rows($select_orders)  > 0)
{
	$list = [];
	while ($data = mysqli_fetch_array($select_orders)) 
	{
	  $list[] = [
	    "user"=>$data["username"],
	    "soluong"=>$data["soluong"],
	    "title"=>$data['title']
	  ];
	}

	$info = $list[array_rand($list)];
	$user = explode("@",$info["user"])[0];
	echo "******* vừa mua ".$info["soluong"]." tài khoản ".$info["title"];
	//echo json_encode($list);
}
else
{
	die();
}
?>