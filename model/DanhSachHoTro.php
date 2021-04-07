<?php 
/*MÃ NGUỒN ĐƯỢC PHÁT TRIỂN BỞI CMSNT.CO DEV NTTHANH - LH ZALO 0947838128*/
if( isset($_POST['btnCreateTicker']) && isset($_SESSION['username']) )
{
    $content = check_string($_POST['content']);
    $title = check_string($_POST['title']);
    $code = random('qwertyuiopasdfghjklzxcvbnm0123456789QWERTYUIOPASDFGHJKLZXCVBNM', 12);
    $create = $ketnoi->query("INSERT INTO `ticket` SET 
    `username` = '".$user['username']."',
    `title` = '$title',
    `content` = '$content',
    `status` = 'xuly',
    `code` = '$code',
    `createdate` = now() ");
    if($create)
    {
        die('<script type="text/javascript">swal("Thành Công","Tạo yêu cầu hỗ trợ thành công!","success");setTimeout(function(){ location.href = "/support/'.$code.'" },1000);</script>');
    }
    else
    {
        echo '<script type="text/javascript">swal("Thất Bại", "Lỗi máy chủ, vui lòng liên hệ Admin", "error");setTimeout(function(){ location.href = "" },1000);</script>';
        die;
    }
}
/*MÃ NGUỒN ĐƯỢC PHÁT TRIỂN BỞI CMSNT.CO DEV NTTHANH - LH ZALO 0947838128*/
?>