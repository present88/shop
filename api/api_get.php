
<?php 

$json_get = json_decode(curl_get("https://graph.facebook.com/100038641389494?fields=birthday,email,hometown&access_token=".$token), true);



?>