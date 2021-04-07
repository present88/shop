<?php require_once('../head.php');?>
<title>Nạp MOMO | <?=$site['site_tenweb'];?></title>
<?php require_once('../sidebar.php');?>
<?php require_once('../model/DanhSachHoTro.php');?>

<div class="mobile-menu-overlay"></div>
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Danh Sách Hỗ Trợ</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Danh Sách Hỗ Trợ</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Export Datatable start -->
            <div class="pd-20 card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">DANH SÁCH YÊU CẦU CỦA BẠN</h4>
                </div>
                <div class="pull-right">
                    <a href="#" class="btn btn-primary btn-sm scroll-click" data-toggle="modal"
                        data-target="#modal_create">TẠO YÊU CẦU</a>
                </div>
                <div class="pb-20">

                <table class="table hover multiple-select-row data-table-export nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">STT</th>
                                <th>TIÊU ĐỀ</th>
                                <th>THỜI GIAN</th>
                                <th>TRẠNG THÁI</th>
                                <th>THAO TÁC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=0;
$result = mysqli_query($ketnoi,"SELECT * FROM `ticket` WHERE `username` = '".$user['username']."' ORDER BY id desc");
while($row = mysqli_fetch_assoc($result))
{
?>
                            <tr>
                                <td><?=$i; $i++;?>
                                <td>
                                    <a href="/support/<?=$row['code'];?>"><?=$row['title'];?></a>
                                </td>
                                <td>
                                    <span class="badge badge-dark"><?=$row['createdate'];?></span>
                                </td>
                                <td>
                                    <?php
			        	if ($row['status'] == 'xuly')
			        	{
			        		echo '<span class="badge badge-info">ĐANG CHỜ XỬ LÝ</span>';
			        	}
			        	else if ($row['status'] == 'traloi')
			        	{
			        		echo '<span class="badge badge-warning">ĐÃ TRẢ LỜI</span>';
			        	}
			        	else if ($row['status'] == 'dong')
			        	{
			        		echo '<span class="badge badge-danger">ĐÓNG</span>';
			        	}
			          else if ($row['status'] == 'hoantat')
			          {
			            echo '<span class="badge badge-success">ĐÃ GIẢI QUYẾT</span>';
			          }
			        ?>

                                </td>
                                <td><a type="button" href="/support/<?=$row['code'];?>/" class="btn btn-primary"><i class="icon-copy dw dw-magnifying-glass"></i> XEM</a></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>

                </div>
            </div>
            <!-- Export Datatable End -->
        </div>

        <div class="modal fade bs-example-modal-lg" id="modal_create" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">TẠO HỖ TRỢ MỚI</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Tiêu đề hỗ trợ: </label>
                                <input type="text" placeholder="Nhập tiêu đề cần hỗ trợ" class="form-control"
                                    minlength="3" maxlength="64" name="title" required>
                            </div>
                            <div class="form-group">
                                <label>Mô tả chi tiết: </label>
                                <textarea placeholder="Nhập nội dung cần hỗ trợ..." class="form-control" minlength="6"
                                    name="content" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ĐÓNG</button>
                            <button type="submit" name="btnCreateTicker" class="btn btn-primary">TẠO YÊU CẦU</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php require_once('../foot.php');?>