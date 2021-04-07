<?php require_once('../head.php');?>

<?php require_once('../sidebar.php');?>
<?php require_once('../model/XemHoTro.php');?>
<title><?=$row['title'];?> | <?=$site['site_tenweb'];?></title>
<div class="mobile-menu-overlay"></div>
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4><?=$row['title'];?></h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="/support/">Danh Sách Hỗ Trợ</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?=$row['title'];?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="pd-20 card-box mb-30">

                <div class="chat-detail">
                    <div class="chat-profile-header clearfix">
                        <div class="left">
                            <div class="clearfix">
                                <div class="chat-profile-photo">
                                    <img src="/vendors/images/profile-photo.jpg" alt="">
                                </div>
                                <div class="chat-profile-name">
                                    <h3>CSKH</h3>
                                    <span>Đang hoạt động</span>
                                </div>
                            </div>
                        </div>
                        <div class="right text-right">
                            <div class="dropdown">
                                <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown">
                                    Setting
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Export Chat</a>
                                    <a class="dropdown-item" href="#">Search</a>
                                    <a class="dropdown-item text-light-orange" href="#">Delete Chat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat-box">
                        <div class="chat-desc customscroll">
                            <ul>
                            <?php
$result = $ketnoi->query("SELECT * FROM `reply_ticket` WHERE `id_ticket` = '".$code."'  ");
while( $row1 = $result->fetch_assoc() ){ ?>
                                <li class="clearfix admin_chat">
                                    <span class="chat-img">
                                        <img src="/vendors/images/chat-img2.jpg" alt="">
                                    </span>
                                    <div class="chat-body clearfix">
                                        <p><?=$row1['content'];?></p>
                                        <div class="chat_time"><?=$row1['createdate'];?></div>
                                    </div>
                                </li>
                                <?php if ($row1['username'] == 'Support'){ ?>
                                <li class="clearfix">
                                    <span class="chat-img">
                                        <img src="/vendors/images/chat-img1.jpg" alt="">
                                    </span>
                                    <div class="chat-body clearfix">
                                        <p><?=$row1['content'];?></p>
                                        <div class="chat_time"><?=$row1['createdate'];?></div>
                                    </div>
                                </li>
                                <?php }?>
<?php }?>
                            </ul>
                        </div>
                        <div class="chat-footer">
              
                            <form method="post" action="">
                            <div class="chat_text_area">
                                <textarea name="content" placeholder="Nhập tin nhắn…"></textarea>
                            </div>
                            <div class="chat_send">
                                <button class="btn btn-link" type="submit" name="btnRepTicker"><i class="icon-copy ion-paper-airplane"></i></button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php require_once('../foot.php');?>