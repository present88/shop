<?php require_once('../head.php');?>
<title>Giftcode | <?=$site['site_tenweb'];?></title>
<?php require_once('../sidebar.php');?>
<?php require_once('../model/Giftcode.php');?>

<div class="mobile-menu-overlay"></div>
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Giftcode</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Giftcode</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">GIFTCODE</h4>
                        <p class="mb-30">Nhập giftcode</p>
                    </div>
                </div>
                <form action="" method="POST">
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Nhập Giftcode:</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="code"
                                placeholder="Vui lòng nhập Giftcode vào đây" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"></label>
                        <div class="col-sm-12 col-md-10">
                            <button type="submit" name="btnSubmit" class="btn btn-primary">Xác
                                Nhận</button>
                        </div>
                    </div>


                </form>
            </div>
            <!-- Export Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">LỊCH SỬ SỬ DỤNG GIFTCODE</h4>
                </div>
                <div class="pd-20 card-box height-100-p">
                    <table class="table hover multiple-select-row data-table-export nowrap">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>GIFTCODE</th>
                                <th>MONEY</th>
                                <th>THỜI GIAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$i = 0;
$result = $ketnoi->query("SELECT * FROM `log_giftcode` WHERE `username` = '".$user['username']."' ORDER BY id desc ");
while( $row = $result->fetch_assoc() ){
?>
                            <tr>
                                <td><?=$i;?> <?php $i++;?></td>
                                <td><span class="badge badge-danger"><?=$row['code'];?></span></td>
                                <td><?=format_cash($row['money']);?></td>
                                <td><span class="badge badge-dark"><?=$row['createdate'];?></span></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>

                </div>
            </div>
            <!-- Export Datatable End -->
        </div>
        <?php require_once('../foot.php');?>