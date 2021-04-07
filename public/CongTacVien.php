<?php require_once('../head.php');?>
<title>Cộng Tác Viên | <?=$site['site_tenweb'];?></title>
<?php require_once('../sidebar.php');?>

<div class="mobile-menu-overlay"></div>
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Affiliate Manager</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Affiliate Manager</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- pd-20 card-box mb-30 -->
            <div class="pd-20 card-box mb-30">
                <h4 class="text-blue h4 mb-30">LINK GIỚI THIỆU LIÊN KẾT CỦA BẠN</h4>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <input class="form-control" id="copyUrl" type="text" value="<?=$site['site_domain'].'register/'.$user['id'];?>" readonly>
                    </div>
                    <div class="col-sm-3">
                        <button type="button" data-clipboard-target="#copyUrl" class="form-control btn btn-primary copy">Sao chép</button>
                    </div>
                </div>
                <h4 class="text-blue h4 mb-30">HOA HỒNG GIỚI THIỆU TỪ LIÊN KẾT</h4>
                <p>- Chúng tôi áp dụng mức phí <b><?=$site['ck_ref'];?>%</b> hoa hồng khi người bạn giới thiệu thực hiện giao dịch trên hệ thống.</p>
                <p>- Ví dụ: tài khoản ABC được bạn giới thiệu mua 100 clone với giá 100k, bạn sẽ nhận được hoa hồng <?=$kq = 100 * $site['ck_ref'] / 100;?>k.</p>
                <p>- Không giới hạn số lần và thời gian từ người bạn giới thiệu, chỉ cần họ nạp tiền vào hệ thống, số dư hoa hồng của bạn sẽ được tự động cộng vào tài khoản.</p>
            </div>
            <!-- pd-20 card-box mb-30 -->
            <!-- Export Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">KHÁCH HÀNG CỦA BẠN</h4>
                </div>
                <div class="pd-20 card-box height-100-p">
                    <table class="table hover multiple-select-row data-table-export nowrap">
                        <thead>
                            <tr class="text-center">
                                <th class="table-plus datatable-nosort">STT</th>
                                <th>TÀI KHOẢN</th>
                                <th>TỔNG NẠP</th>
                                <th>THỜI GIAN ĐĂNG KÝ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$i = 0;
$result = mysqli_query($ketnoi,"SELECT * FROM `users` WHERE `ref` = '".$user['username']."'  ORDER BY id desc");
while($row = mysqli_fetch_assoc($result)){ ?>
                            <tr class="text-center">
                                <td><?=$i;?> <?php $i++;?></td>
                                <td><span class="badge badge-danger"><?=$row['username'];?></span></td>
                                <td><span class="badge badge-warning"><?=format_cash($row['total_nap']);?></span></td>
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