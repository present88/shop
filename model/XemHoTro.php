<?php 
/*MÃ NGUỒN ĐƯỢC PHÁT TRIỂN BỞI CMSNT.CO DEV NTTHANH - LH ZALO 0947838128*/
if( isset($_GET['id']) && isset($_SESSION['username']) )
{
    $code = check_string($_GET['id']);
    $row = $ketnoi->query("SELECT * FROM ticket WHERE code = '$code' AND username = '".$user['username']."' ")->fetch_assoc();

    if(isset($_POST['btnRepTicker']))
    {
        $content = check_string($_POST['content']);
        $ketnoi->query("INSERT INTO `reply_ticket` SET 
        `id_ticket` = '$code',
        `username` = '".$user['username']."',
        `content` = '$content',
        `createdate` = now() ");
        die('<script type="text/javascript">setTimeout(function(){ location.href = "" },0);</script>');
    }
}
/*MÃ NGUỒN ĐƯỢC PHÁT TRIỂN BỞI CMSNT.CO DEV NTTHANH - LH ZALO 0947838128*/
?>