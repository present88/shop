<?php 
if( isset($_POST['btnSubmit']) && isset($_SESSION['username']) )
{
    $code = check_string($_POST['code']);
    $query = $ketnoi->query("SELECT * FROM giftcode WHERE code = '$code' ");
    $array = $query->fetch_array();
    $query_log = $ketnoi->query("SELECT * FROM log_giftcode WHERE code = '$code' AND username = '".$user['username']."' ");
    if(strlen($code) <= 0)
    {
        die('<script type="text/javascript">swal("Thất Bại", " Vui lòng nhập Giftcode !", "error");setTimeout(function(){ location.href = "" },1000);</script>');
    }
    if(empty($array))
    {
        die('<script type="text/javascript">swal("Thất Bại", " Giftcode không tồn tại trong hệ thống !", "error");setTimeout(function(){ location.href = "" },1000);</script>');
    }
    if($array['dieukien'] > $user['total_nap'])
    {
        die('<script type="text/javascript">swal("Thất Bại", " Bạn không đủ điều kiện sử dụng Giftcode này!", "error");setTimeout(function(){ location.href = "" },1000);</script>');
    }
    if($array['soluong'] <= $array['sudung'])
    {
        die('<script type="text/javascript">swal("Thất Bại", " Giftcode đã được sử dụng !", "error");setTimeout(function(){ location.href = "" },1000);</script>');
    }
    if($query_log->num_rows != 0)
    {
        die('<script type="text/javascript">swal("Thất Bại", " Bạn đã sử dụng Giftcode này rồi !", "error");setTimeout(function(){ location.href = "" },1000);</script>');
    }
    else
    {
        $ketnoi->query("UPDATE giftcode SET sudung = sudung + 1 WHERE code = '$code' ");
        $create = $ketnoi->query("INSERT INTO log_giftcode SET 
        username = '".$user['username']."', 
        code = '$code', 
        money = '".$array['money']."', 
        createdate = now() ");
        if($create)
        {
            $content = 'Sử dụng Giftcode '.$code.' (+'.$array['money'].')';
            $ketnoi->query("UPDATE users SET `money` = `money` + '".$array['money']."' WHERE username = '".$user['username']."' ");
            $ketnoi->query("INSERT INTO `log` SET 
            username = '".$user['username']."', 
            content = '$content',
            createdate = now() ");
            die('<script type="text/javascript">swal("Thành Công","Sử dụng Giftcode Thành Công!","success");setTimeout(function(){ location.href = "" },1000);</script>');
        }
    }
}

?>