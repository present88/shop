<?php require_once('../head.php');?>
<title>Check Live Clone | <?=$site['site_tenweb'];?></title>
<?php require_once('../sidebar.php');?>
<?php require_once('../model/CheckLiveClone.php');?>

<div class="mobile-menu-overlay"></div>
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Check Live Clone</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Tools</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Check Live Clone</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                <form action="" method="post">
                    <div class="form-group text-center">
                        <div class="text-center mb-3">
                            <span class="nav-main-link-badge badge badge-pill badge-warning p-3 font-size-h5">Tổng:
                                <span><?=$TotalClone;?></span></span>
                            <span class="nav-main-link-badge badge badge-pill badge-success p-3 font-size-h5">Live:
                                <span><?=$TotalLive;?></span></span>
                            <span class="nav-main-link-badge badge badge-pill badge-danger p-3 font-size-h5">Die:
                                <span><?=$TotalDie;?></span></span></b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="example-textarea-input"
                                            style="font-size: 15px; font-weight: 600">Danh
                                            sách UID Facebook</label>
                                        <textarea class="form-control" name="uid"
                                            placeholder="1 dòng 1 clone, có thể check được mọi định dạng ví dụ UID, UID|PASS|..." required=""></textarea>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-5">

                                        <label for="example-textarea-input" class="text-success">Danh sách UID
                                            Live</label>
                                        <textarea class="form-control copy" data-clipboard-target="#copyUidLive" id="copyUidLive" readonly=""><?=$CloneLive;?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-5">
                                        <label for="example-textarea-input" class="text-danger">Danh sách UID
                                            Die</label>
                                        <textarea class="form-control copy" data-clipboard-target="#copyUidDie" id="copyUidDie" readonly=""><?=$CloneDie;?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <center><button type="submit" class="btn btn-primary" name="btnCheckLive"><b><i
                                            class="fa fa-rocket mr-1"></i>KIỂM TRA</button></center>
                        </div>
                    </div>
            </div>
            </form>
        </div>



        <?php require_once('../foot.php');?>