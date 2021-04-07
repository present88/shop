<?php
include('../config.php');

//$ketnoi->query("UPDATE `taikhoan` SET `status` = 'live', `username` = NULL  ");
//die();
 


$result1 = $ketnoi->query("SELECT * FROM `category` WHERE `pin` = 'facebook' ORDER BY id   ");
while ($data = mysqli_fetch_array($result1)) 
{
	$result = $ketnoi->query("SELECT * FROM `taikhoan` WHERE `username` IS NULL AND `status` = 'live' AND `code` = '".$data['code']."' ORDER BY id   ");
	while ($row = mysqli_fetch_array($result)) 
	{
		$check_json_live = json_decode(curl_get("https://graph.facebook.com/".$row['id_fb']."/picture?redirect=false"), true);
		if(isset($check_json_live['data']['width']) || isset($check_json_live['data']['height']))
		{

			$json_get_info = json_decode(curl_get("https://graph.facebook.com/".$row['id_fb']."?fields=gender,friends,updated_time,name&access_token=".$site_token), true);
			$ketnoi->query("UPDATE `taikhoan` SET 
				`gender` = '".$json_get_info['gender']."',
				`friends` = '".count($json_get_info['friends']['data'])."',
				`name` = '".$json_get_info['name']."',
				`updated_time` = '".$json_get_info['updated_time']."'
				 WHERE `id` = '".$row['id']."' ");


		}
		else  if(empty($check_json_live['data']['height']) || empty($check_json_live['data']['width']))
		{
			$ketnoi->query("UPDATE `taikhoan` SET `status` = 'die' WHERE `id` = '".$row['id']."' ");
			echo 'Clone <b style="color: red;">DIE</b>:'.$row['id_fb'].' | '.$data['title'].' <hr>';
		}
	}

}

?>