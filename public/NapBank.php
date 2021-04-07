<?php require_once('../head.php');?>
<title>Nạp Qua Ngân Hàng | <?=$site['site_tenweb'];?></title>
<?php require_once('../sidebar.php');?>


<div class="mobile-menu-overlay"></div>
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Nạp Qua Ngân Hàng</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Nạp Tiền</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Ngân Hàng</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <div class="row">
            <?php
$result = $ketnoi->query("SELECT * FROM `bank` ORDER BY id desc");
while($row = $result->fetch_assoc() ){ ?>
                <div class="col-md-12 col-sm-12">
                    <div class="pd-20 card-box mb-30">
                        <div class="clearfix">
                            <div class="pull-left">
                                <h4 class="text-blue h4"><?=$row['name'];?></h4>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Số tài khoản:</label>
                            <div class="col-sm-12 col-md-10">
                                <b style="color: blue;" id="copy_<?=$row['stk'];?>"><?=$row['stk'];?></b> <a class="copy"
                                    data-clipboard-target="#copy_<?=$row['stk'];?>"><i class="fa fa-copy"></i></a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Chủ tài khoản:</label>
                            <div class="col-sm-12 col-md-10">
                                <b><?=$row['bank_name'];?></b>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Nội dung chuyển tiền:</label>
                            <div class="col-sm-12 col-md-10">
                                <b class="text-danger"
                                    style="border: 2px dashed #e04f1a30; padding: 3px; color: #e53e3e!important;"
                                    id="copyNoiDung_<?=$row['stk'];?>"><?=$site['MEMO_PREFIX'].$user['id'];?></b>
                                <a class="copy" data-clipboard-target="#copyNoiDung_<?=$row['stk'];?>"><i class="fa fa-copy"></i></a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Chi nhánh:</label>
                            <div class="col-sm-12 col-md-10">
                                <b style="color:red;"><?=$row['chi_nhanh'];?></b>
                            </div>
                        </div>
                    </div>
                </div>
<?php }?>
            </div>


            <?php require_once('../foot.php');?>