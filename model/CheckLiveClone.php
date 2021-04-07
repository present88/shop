
<?php
$CloneLive = '';
$CloneDie = '';
$TotalDie = 0;
$TotalLive = 0;
$TotalClone = 0;
if( isset($_POST['btnCheckLive']) )
{
  $clone = explode(PHP_EOL,$_POST['uid']);
  $TotalClone = count($clone);
  foreach($clone as $row)
  {
    // xóa dấu trắng
    $row = XoaDauCach($row);
    if(strpos($row, '|'))
    {
      $clone = explode('|', $row);
      $row1 = $clone[0];
    }
    else
    {
      $row1 = $row;
    }
    $json = json_decode(curl_get("https://graph.facebook.com/".$row1."/picture?redirect=false"), true);
    if(isset($json['data']['width']) || isset($json['data']['height']))
    {
      $CloneLive = $CloneLive.PHP_EOL.$row;
      $TotalLive++;
    }
    else
    {
      $CloneDie = $CloneDie.PHP_EOL.$row;
      $TotalDie++;
    }
  }
}
/*MÃ NGUỒN ĐƯỢC PHÁT TRIỂN BỞI CMSNT.CO DEV NTTHANH - LH ZALO 0947838128*/
?>