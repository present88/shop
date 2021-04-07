<?php

$data = '<script type="text/javascript">swal("Thất Bại", "Vui lòng đăng nhập!", "error");setTimeout(function(){ location.href = "" },2000);</script>';
echo base64_encode($data);

base64_decode('PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPnN3YWwoIlRo4bqldCBC4bqhaSIsICJWdWkgbMOybmcgxJHEg25nIG5o4bqtcCEiLCAiZXJyb3IiKTtzZXRUaW1lb3V0KGZ1bmN0aW9uKCl7IGxvY2F0aW9uLmhyZWYgPSAiIiB9LDIwMDApOzwvc2NyaXB0Pg');
?>