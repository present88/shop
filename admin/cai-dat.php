<?php require_once('head.php');?>
<?php require_once('nav.php');?>
<?php
    if (isset($_POST["submit"]) && isset($_SESSION['admin']))
    {
      if (check_img('site_logo') == true)
      {
        $uploads_dir = '../upload/';
        $tmp_name = $_FILES['site_logo']['tmp_name'];
        $create = move_uploaded_file($tmp_name, "$uploads_dir/logo.png");
        if($create)
        {
          $ketnoi->query("UPDATE setting SET site_logo = '/upload/logo.png' ");
        }
      }
      if (check_img('site_image') == true)
      {
        $uploads_dir = '../upload/';
        $tmp_name = $_FILES['site_image']['tmp_name'];
        $create = move_uploaded_file($tmp_name, "$uploads_dir/thumb.png");
        if($create)
        {
          $ketnoi->query("UPDATE setting SET site_image = '/upload/thumb.png' ");
        }
      }
      if (check_img('site_favicon') == true)
      {
        $uploads_dir = '../upload/';
        $tmp_name = $_FILES['site_favicon']['tmp_name'];
        $create = move_uploaded_file($tmp_name, "$uploads_dir/favicon.png");
        if($create)
        {
          $ketnoi->query("UPDATE setting SET site_favicon = '/upload/favicon.png' ");
        }
      }
      if (check_img('carousel_1') == true)
      {
        $uploads_dir = '../upload/';
        $tmp_name = $_FILES['carousel_1']['tmp_name'];
        $create = move_uploaded_file($tmp_name, "$uploads_dir/carousel_1.png");
        if($create)
        {
          $ketnoi->query("UPDATE setting SET carousel_1 = '/upload/carousel_1.png' ");
        }
      }
      if (check_img('carousel_2') == true)
      {
        $uploads_dir = '../upload/';
        $tmp_name = $_FILES['carousel_2']['tmp_name'];
        $create = move_uploaded_file($tmp_name, "$uploads_dir/carousel_2.png");
        if($create)
        {
          $ketnoi->query("UPDATE setting SET carousel_2 = '/upload/carousel_2.png' ");
        }
      }
      if (check_img('carousel_3') == true)
      {
        $uploads_dir = '../upload/';
        $tmp_name = $_FILES['carousel_3']['tmp_name'];
        $create = move_uploaded_file($tmp_name, "$uploads_dir/carousel_3.png");
        if($create)
        {
          $ketnoi->query("UPDATE setting SET carousel_3 = '/upload/carousel_3.png' ");
        }
      }
      $create = $ketnoi->query("UPDATE `setting` SET 
        `tuyetroi` = '".$_POST['tuyetroi']."',
        `gdganday` = '".$_POST['gdganday']."',
        `ck_ref` = '".$_POST['ck_ref']."',
        `color` = '".$_POST['color']."',
        `SECURE_TOKEN` = '".$_POST['SECURE_TOKEN']."',
        `MEMO_PREFIX` = '".$_POST['MEMO_PREFIX']."',
        `site_thong_bao` = '".$_POST['site_thong_bao']."',
        `site_show_soluong` = '".$_POST['site_show_soluong']."',
        `site_domain` = '".$_POST['site_domain']."',
        `site_gmail_momo` = '".$_POST['site_gmail_momo']."',
        `site_pass_momo` = '".$_POST['site_pass_momo']."',
        `site_sdt_momo` = '".$_POST['site_sdt_momo']."',
        `site_ten_momo` = '".$_POST['site_ten_momo']."',
        `site_qr_momo` = '".$_POST['site_qr_momo']."',
        `site_tenweb` = '".$_POST['site_tenweb']."',
        `site_mota` = '".$_POST['site_mota']."',
        `site_baotri` = '".$_POST['site_baotri']."',
        `site_api_card` = '".$_POST['site_api_card']."',
        `site_ck_card` = '".$_POST['site_ck_card']."',
        `site_gmail` = '".$_POST['site_gmail']."',
        `site_show_carousel` = '".$_POST['site_show_carousel']."',
        `site_tukhoa` = '".$_POST['site_tukhoa']."' ");

      if ($create)
      {
        echo '<script type="text/javascript">swal("Thành Công","Lưu thành công","success");setTimeout(function(){ location.href = "" },1000);</script>'; 
        die;
      }
      else
      {
        echo '<script type="text/javascript">swal("Thất Bại","Lỗi máy chủ","error");setTimeout(function(){ location.href = "" },1000);</script>'; 
        die;
      }
    }

?>
<div class="row mb-2">
    <div class="col-sm-6">

    </div><!-- /.col -->
</div><!-- /.row -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" enctype="multipart/form-data" action="" method="post">
                <div class="card-header">
                    <button name="submit" type="submit" class="btn btn-info">LƯU THAY ĐỔI</button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-center">Thông Tin</h3>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">LINK WEBSITE</label>
                                <input type="text" class="form-control" name="site_domain"
                                    placeholder="http://localhost/" value="<?=$site_domain;?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Favicon</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile"
                                            name="site_favicon" accept="image/*">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Logo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile"
                                            name="site_logo" accept="image/*">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Bìa Web</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile"
                                            name="site_image" accept="image/*">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-color-input" class="form-control-label">Màu Chủ Đạo Web</label>
                                <input class="form-control" type="color" value="<?=$site['color'];?>" name="color">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">TÊN WEB</label>
                                <input type="text" class="form-control" name="site_tenweb" placeholder="CLONEGIARE.VN"
                                    value="<?=$site_tenweb;?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">MÔ TẢ</label>
                                <input type="text" class="form-control" name="site_mota"
                                    placeholder="Hệ thống bán clone giá rẻ" value="<?=$site_mota;?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">TỪ KHÓA</label>
                                <input type="text" class="form-control" name="site_tukhoa"
                                    placeholder="shop clone, clone shop, sell clone, clone gia re"
                                    value="<?=$site_tukhoa;?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">GMAIL ADMIN</label>
                                <input type="text" class="form-control" name="site_gmail" placeholder="admin@gmail.com"
                                    value="<?=$site_gmail;?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">API CARD24H.COM (<a href="https://card24h.com/"
                                        target="_blank">Tạo tài khoản</a>)</label>
                                <input type="text" class="form-control" name="site_api_card"
                                    placeholder="67799896-9252-4452-815a-084e6a3a1dff" value="<?=$site_api_card;?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">API BANK AUTO</label>
                                <input type="text" class="form-control" name="SECURE_TOKEN"
                                    placeholder="Vui lòng nhập Secure Token" value="<?=$site['SECURE_TOKEN'];?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">NỘI DUNG BANK AUTO</label>
                                <input type="text" class="form-control" name="MEMO_PREFIX"
                                    placeholder="Ví dụ: naptien_" value="<?=$site['MEMO_PREFIX'];?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">CHIẾT KHẤU NẠP THẺ</label>
                                <input type="text" class="form-control" name="site_ck_card" value="<?=$site_ck_card;?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">CHIẾT KHẤU HOA HỒNG CTV</label>
                                <input type="text" class="form-control" name="ck_ref" value="<?=$site['ck_ref'];?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">THÔNG BÁO</label>
                                <textarea class="textarea" name="site_thong_bao" placeholder="Place some text here"
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?=$site_thong_bao;?></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>ON/OFF BẢO TRÌ</label>
                                <select class="form-control select2bs4" name="site_baotri" style="width: 100%;">
                                    <option value="<?=$site_baotri;?>"><?=$site_baotri;?></option>
                                    <option value="ON">ON</option>
                                    <option value="OFF">OFF</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>ON/OFF SỐ LƯỢNG CÒN LẠI</label>
                                <select class="form-control select2bs4" name="site_show_soluong" style="width: 100%;">
                                    <option value="<?=$site_show_soluong;?>"><?=$site_show_soluong;?></option>
                                    <option value="ON">ON</option>
                                    <option value="OFF">OFF</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>ON/OFF HIỆU ỨNG TUYẾT RƠI</label>
                                <select class="form-control select2bs4" name="tuyetroi" style="width: 100%;">
                                    <option value="<?=$site['tuyetroi'];?>"><?=$site['tuyetroi'];?></option>
                                    <option value="ON">ON</option>
                                    <option value="OFF">OFF</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>ON/OFF GIAO DỊCH GẦN ĐÂY</label>
                                <select class="form-control select2bs4" name="gdganday" style="width: 100%;">
                                    <option value="<?=$site['gdganday'];?>"><?=$site['gdganday'];?></option>
                                    <option value="ON">ON</option>
                                    <option value="OFF">OFF</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h3 class="text-center">CẤU HÌNH MOMO AUTO</h3>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">GMAIL LIÊN KẾT MOMO</label>
                                <input type="text" class="form-control" name="site_gmail_momo"
                                    placeholder="Nhập gmail liên kết với ví MOMO" value="<?=$site_gmail_momo;?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">PASS GMAIL LIÊN KẾT MOMO</label>
                                <input type="text" placeholder="Mật khẩu gmail liên kết với ví MOMO"
                                    class="form-control" name="site_pass_momo" value="<?=$site_pass_momo;?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">SDT VÍ MOMO</label>
                                <input type="text" class="form-control" placeholder="Số điện thoại ví MOMO"
                                    name="site_sdt_momo" value="<?=$site_sdt_momo;?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">TÊN VÍ MOMO</label>
                                <input type="text" class="form-control" name="site_ten_momo"
                                    placeholder="Tên chủ ví MOMO" value="<?=$site_ten_momo;?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">LINK ẢNH QR VÍ MOMO</label>
                                <input type="text" class="form-control" name="site_qr_momo"
                                    placeholder="Ảnh mã QR ví MOMO" value="<?=$site_qr_momo;?>">
                            </div>
                        </div>
                
                        <div class="col-md-12">
                            <h3 class="text-center">CẤU HÌNH CAROUSEL</h3>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Carousel_1</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile"
                                            name="carousel_1" accept="image/*">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <img src="<?=$carousel_1;?>" width="100%">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Carousel_2</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile"
                                            name="carousel_2" accept="image/*">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <img src="<?=$carousel_2;?>" width="100%">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Carousel_3</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile"
                                            name="carousel_3" accept="image/*">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <img src="<?=$carousel_3;?>" width="100%">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>ON/OFF HIỂN THỊ Carousel</label>
                                <select class="form-control select2bs4" name="site_show_carousel" style="width: 100%;">
                                    <option value="<?=$site_show_carousel;?>"><?=$site_show_carousel;?></option>
                                    <option value="ON">ON</option>
                                    <option value="OFF">OFF</option>
                                </select>
                            </div>
                        </div>
                        
                    </div>
            </form>
        </div>
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row (main row) -->
<?php require_once('foot.php');?>
<script src="dist/jquery-asColor.js"></script>
<script src="dist/jquery-asGradient.js"></script>
<script src="dist/jquery-asColorPicker.js"></script>
<script src="dist/colorpicker.js"></script>
<script>
$(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
    })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', {
        'placeholder': 'mm/dd/yyyy'
    })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY hh:mm A'
        }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker({
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month')
                    .endOf('month')
                ]
            },
            startDate: moment().subtract(29, 'days'),
            endDate: moment()
        },
        function(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
        format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function() {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

})
</script>