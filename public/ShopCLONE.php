<?php require_once('../head.php'); ?>
<?php require_once('../sidebar.php'); ?>
<title>CLONE FACEBOOK | <?=$site['site_tenweb'];?></title>
<div class="mobile-menu-overlay"></div>
<?php require_once('../model/Buy.php');?>
<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box pd-20 height-100-p mb-30">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="/vendors/images/banner-img.png" alt="">
                </div>
                <div class="col-md-8">
                    <p class="font-18 max-width-600"><?=$site['site_thong_bao'];?></p>
                </div>
            </div>
        </div>
        <!-- multiple select row Datatable start -->
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4">DANH SÁCH CLONE FACEBOOK</h4>
            </div>
            <div class="pd-20 card-box height-100-p">
                <?php $result = $ketnoi->query("SELECT * FROM `category` WHERE  pin = 'clone' OR pin = 'facebook' AND `display` = 'show' "); ?>
                <?php require_once('../public/Buy.php');?>
            </div>
        </div>
        <!-- multiple select row Datatable End -->
        <?php require_once('../foot.php'); ?>