<<<<<<< HEAD
=======
<?php
require_once('controller/config.php');
require_once('controller/core/controller.Class.php');
?>
>>>>>>> master
<!-- Breadcrumb Area Start Here -->
<div class="breadcrumbs-area position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Tài khoản của tôi</font>
                        </font>
                    </h3>
                    <ul>
                        <li><a href="index.php">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Trang chủ</font>
                                </font>
                            </a></li>
                        <li>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Tài khoản của tôi</font>
                            </font>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
<!-- my account wrapper start -->
<div class="my-account-wrapper mt-no-text">
    <div class="container container-default-2 custom-area">
        <div class="row">
            <div class="col-lg-12 col-custom">
                <!-- My Account Page Start -->
                <div class="myaccount-page-wrapper">
                    <!-- My Account Tab Menu Start -->
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-custom">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#dashboad" class="active" data-bs-toggle="tab" aria-selected="true" role="tab"><i class="fa fa-dashboard"></i>
                                    <font style="vertical-align: inherit;">
<<<<<<< HEAD
                                        <font style="vertical-align: inherit;">
                                            bảng điều khiển</font>
=======
                                        <font style="vertical-align: inherit;">Chi tiết tài khoản</font>
>>>>>>> master
                                    </font>
                                </a>
                                <a href="#orders" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab"><i class="fa fa-cart-arrow-down"></i>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Đơn đặt hàng</font>
                                    </font>
                                </a>
<<<<<<< HEAD
                                <a href="#download" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab"><i class="fa fa-cloud-download"></i>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Tải xuống</font>
                                    </font>
                                </a>
=======
                                
>>>>>>> master
                                <a href="#payment-method" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab"><i class="fa fa-credit-card"></i>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Phương thức thanh toán</font>
                                    </font>
                                </a>
<<<<<<< HEAD
                                <a href="#address-edit" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab"><i class="fa fa-map-marker"></i>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Địa chỉ</font>
                                    </font>
                                </a>
                                <a href="#account-info" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab"><i class="fa fa-user"></i>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Chi tiết tài khoản</font>
                                    </font>
                                </a>
                                <a href="login.php"><i class="fa fa-sign-out"></i>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Đăng xuất</font>
                                    </font>
                                </a>
=======
                                <?php  if(isset($_COOKIE['id'])) {  ?>   
                                    <a href="view/login/logout.php"><i class="fa fa-sign-out"></i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Đăng xuất</font>
                                        </font>
                                    </a>
                                <?php } if(isset($_SESSION['role'])) {?>
                                    <a href="index.php?page=logout"><i class="fa fa-sign-out"></i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Đăng xuất</font>
                                        </font>
                                    </a>
                                <?php }?>
                                
>>>>>>> master
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-md-8 col-custom">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
<<<<<<< HEAD
                                        <h3>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">bảng điều khiển</font>
                                            </font>
                                        </h3>
                                        <div class="welcome">
                                            <p>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Xin chào, </font>
                                                </font><strong>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Alex Aya</font>
                                                    </font>
                                                </strong>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;"> (Nếu không phải </font>
                                                </font><strong>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Aya!</font>
                                                    </font>
                                                </strong><a href="login-register.php" class="logout">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Đăng xuất</font>
                                                    </font>
                                                </a>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">)</font>
                                                </font>
                                            </p>
                                        </div>
                                        <p class="mb-0">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Từ bảng điều khiển tài khoản của bạn. </font>
                                                <font style="vertical-align: inherit;">bạn có thể dễ dàng kiểm tra và xem các đơn đặt hàng gần đây của mình, quản lý địa chỉ giao hàng và thanh toán cũng như chỉnh sửa chi tiết mật khẩu và tài khoản của mình.</font>
                                            </font>
                                        </p>
=======
                                    <h3>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Chi tiết tài khoản</font>
                                            </font>
                                        </h3>
                                        <div class="account-details-form">
                                        <?php if(isset($_COOKIE['id']) && isset($_COOKIE['sess'])){ 
                                               
                                                $Controller = new Controller;
                                                if($Controller -> checkUserStatus($_COOKIE['id'], $_COOKIE['sess'])){
                                                    echo $Controller -> printData(intval($_COOKIE['id']));
                                                
                                                } 
                                            
                                        } else { ?>
                                        
                                            <?php $Controller = new Controller; echo $Controller -> printData(intval($_SESSION['iduser'])); ?>
                                        <?php } ?>
                                            
                                        </div>
                                        <div class="account-details-form">
                                                <form action="index.php?page=taikhoancuatoi" method="post">
                                                    <div class="row mt-5">
                                                        <div class="col-lg-6 col-custom">
                                                            <div class="single-input-item mb-3">
                                                                <label for="first-name" class="required mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên đầu tiên</font></font></label>
                                                                <input name="f_name" type="text" value="<?php echo $infor[0]['f_name'] ?>" id="first-name" placeholder="Tên đầu tiên" <?php if(isset($_COOKIE['id'])) echo 'readonly' ?>>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-custom">
                                                            <div class="single-input-item mb-3">
                                                                <label for="last-name" class="required mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Họ</font></font></label>
                                                                <input name="l_name" type="text" value="<?php echo $infor[0]['l_name'] ?>" id="last-name" placeholder="Họ" <?php if(isset($_COOKIE['id'])) echo 'readonly' ?>>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-input-item mb-3">
                                                        <label for="display-name" class="required mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Địa chỉ nhà</font></font></label>
                                                        <input name="diachi" type="text" value="" id="display-name" placeholder="Địa chỉ nhà (số nhà,tên đường)">
                                                        <input type="hidden" id="hidden_tinh" name="hidden_tinh" value="">
                                                        <input type="hidden" id="hidden_quan" name="hidden_quan" value="">
                                                        <input type="hidden" id="hidden_phuong" name="hidden_phuong" value="">
                                                        <div class="css_select_div mt-2">
                                                            <select class="css_select" id="tinh" name="tinh" title="Chọn Tỉnh Thành">
                                                                <option value="0">Tỉnh Thành</option>
                                                            </select> 
                                                            <select class="css_select" id="quan" name="quan" title="Chọn Quận Huyện">
                                                                <option value="0">Quận Huyện</option>
                                                            </select> 
                                                            <select class="css_select" id="phuong" name="phuong" title="Chọn Phường Xã">
                                                                <option value="0">Phường Xã</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="single-input-item mb-3">
                                                        <label for="email" class="required mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Địa chỉ của quý khách là</font></font></label>
                                                        <input  type="text" value="<?php echo $infor[0]['diachi'] ?>" id="email" placeholder="Địa chỉ" readonly>
                                                    </div>
                                                    <div class="single-input-item mb-3">
                                                        <label for="email" class="required mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">SĐT</font></font></label>
                                                        <input name="sdt" type="text" value="<?php echo $infor[0]['sdt'] ?>" id="email" placeholder="Số điện thoại">
                                                    </div>
                                                    <div class="single-input-item mb-3">
                                                        <label for="email" class="required mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Địa chỉ email</font></font></label>
                                                        <input name="email" type="email" id="email" value="<?php echo $infor[0]['email'] ?>" placeholder="Địa chỉ email" <?php if(isset($_COOKIE['id'])) echo 'readonly' ?>>
                                                    </div>
                            
                                                    <div class="single-input-item single-item-button">
                                                        <button name="btnThayDoi" class="btn flosun-button secondary-btn theme-color  rounded-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lưu thay đổi</font></font></button>
                                                    </div>
                                                    <p class="text-danger"><?php echo $err ?></p>
                                                </form>
                                            </div>
>>>>>>> master
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Đơn đặt hàng</font>
                                            </font>
                                        </h3>
                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Đặt hàng</font>
                                                            </font>
                                                        </th>
                                                        <th>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Ngày</font>
                                                            </font>
                                                        </th>
                                                        <th>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Trạng thái</font>
                                                            </font>
                                                        </th>
                                                        <th>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Tổng cộng</font>
                                                            </font>
                                                        </th>
                                                        <th>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Hoạt động</font>
                                                            </font>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
<<<<<<< HEAD
                                                    <tr>
                                                        <td>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">1</font>
                                                            </font>
                                                        </td>
                                                        <td>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Ngày 22 tháng 8 năm 2022</font>
                                                            </font>
                                                        </td>
                                                        <td>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Chưa giải quyết</font>
                                                            </font>
                                                        </td>
                                                        <td>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">$3000</font>
                                                            </font>
                                                        </td>
                                                        <td><a href="cart.php" class="btn flosun-button secondary-btn theme-color  rounded-0">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Xem</font>
                                                                </font>
                                                            </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">2</font>
                                                            </font>
                                                        </td>
                                                        <td>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Ngày 22 tháng 7 năm 2022</font>
                                                            </font>
                                                        </td>
                                                        <td>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Tán thành</font>
                                                            </font>
                                                        </td>
                                                        <td>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">$200</font>
                                                            </font>
                                                        </td>
                                                        <td><a href="cart.php" class="btn flosun-button secondary-btn theme-color  rounded-0">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Xem</font>
                                                                </font>
                                                            </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">3</font>
                                                            </font>
                                                        </td>
                                                        <td>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Ngày 12 tháng 6 năm 2022</font>
                                                            </font>
                                                        </td>
                                                        <td>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Đang chờ</font>
                                                            </font>
                                                        </td>
                                                        <td>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">$990</font>
                                                            </font>
                                                        </td>
                                                        <td><a href="cart.php" class="btn flosun-button secondary-btn theme-color  rounded-0">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Xem</font>
                                                                </font>
                                                            </a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="download" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Tải xuống</font>
                                            </font>
                                        </h3>
                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Sản phẩm</font>
                                                            </font>
                                                        </th>
                                                        <th>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Ngày</font>
                                                            </font>
                                                        </th>
                                                        <th>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Hết hạn</font>
                                                            </font>
                                                        </th>
                                                        <th>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Tải xuống</font>
                                                            </font>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Haven - Mẫu PSD bất động sản miễn phí</font>
                                                            </font>
                                                        </td>
                                                        <td>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Ngày 22 tháng 8 năm 2022</font>
                                                            </font>
                                                        </td>
                                                        <td>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Đúng</font>
                                                            </font>
                                                        </td>
                                                        <td><a href="#" class="btn flosun-button secondary-btn theme-color  rounded-0"><i class="fa fa-cloud-download mr-2"></i>
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Tải tập tin</font>
                                                                </font>
                                                            </a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">HasTech - Mẫu hồ sơ kinh doanh</font>
                                                            </font>
                                                        </td>
                                                        <td>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Ngày 12 tháng 9 năm 2022</font>
                                                            </font>
                                                        </td>
                                                        <td>
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">Không bao giờ</font>
                                                            </font>
                                                        </td>
                                                        <td><a href="#" class="btn flosun-button secondary-btn theme-color  rounded-0"><i class="fa fa-cloud-download mr-2"></i>
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Tải tập tin</font>
                                                                </font>
                                                            </a></td>
                                                    </tr>
=======
                                                    <?php $i = 0; foreach($hoadon as $hd) { $i++?>
                                                        <tr>
                                                            <td>
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;"><?php echo $i ?></font>
                                                                </font>
                                                            </td>
                                                            <td>
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;"><?php $ngayDat = date("d/m/Y", strtotime($hd['NgayDat']));echo $ngayDat; ?></font>
                                                                </font>
                                                            </td>
                                                            <td >
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;"><?php echo $hd['TinhTrang'] ?></font >
                                                                </font>
                                                            </td>
                                                            <td>
                                                                <font style="vertical-align: inherit;" >
                                                                    <font style="vertical-align: inherit;">
                                                                    <?php 
                                                                        $formattedValue = number_format($hd['TongTien'], 0, ',', '.') . ' VNĐ';
                                                                        echo $formattedValue;
                                                                    ?></font>
                                                                </font>
                                                            </td>
                                                            <td>
                                                            <?php if($hd['TinhTrang'] == 'Chờ xác nhận') { ?>
                                                                <a href="index.php?page=taikhoancuatoi&MaHD=<?php echo $hd['MaHD'] ?>" class="btn flosun-button secondary-btn theme-color  rounded-0">
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Hủy đơn hàng</font>
                                                                    </font>
                                                                </a>
                                                            <?php } else { ?>
                                                                <button href="" class="btn flosun-button secondary-btn theme-color  rounded-0" disabled>
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Hủy đơn hàng</font>
                                                                    </font>
                                                                </button>
                                                            <?php }?>
                                                            </td>
                                                        </tr>
                                                   <?php } ?>
>>>>>>> master
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

<<<<<<< HEAD
=======
                               
>>>>>>> master
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Phương thức thanh toán</font>
                                            </font>
                                        </h3>
                                        <p class="saved-message">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Bạn chưa thể lưu phương thức thanh toán của mình.</font>
                                            </font>
                                        </p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

<<<<<<< HEAD
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Địa chỉ thanh toán</font>
                                            </font>
                                        </h3>
                                        <address>
                                            <p><strong>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Alex Aya</font>
                                                    </font>
                                                </strong></p>
                                            <p>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Chợ 1234 ##, Suite 900 </font>
                                                </font><br>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">
                                                        Lorem Ipsum, ## 12345</font>
                                                </font>
                                            </p>
                                            <p>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Di động: (123) 123-456789</font>
                                                </font>
                                            </p>
                                        </address>
                                        <a href="#" class="btn flosun-button secondary-btn theme-color  rounded-0"><i class="fa fa-edit mr-2"></i>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">sửa địa chỉ</font>
                                            </font>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Chi tiết tài khoản</font>
                                            </font>
                                        </h3>
                                        <div class="account-details-form">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-lg-6 col-custom">
                                                        <div class="single-input-item mb-3">
                                                            <label for="first-name" class="required mb-1">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Tên đầu tiên</font>
                                                                </font>
                                                            </label>
                                                            <input type="text" id="first-name" placeholder="First Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-custom">
                                                        <div class="single-input-item mb-3">
                                                            <label for="last-name" class="required mb-1">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Họ</font>
                                                                </font>
                                                            </label>
                                                            <input type="text" id="last-name" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-input-item mb-3">
                                                    <label for="display-name" class="required mb-1">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Tên hiển thị</font>
                                                        </font>
                                                    </label>
                                                    <input type="text" id="display-name" placeholder="Display Name">
                                                </div>
                                                <div class="single-input-item mb-3">
                                                    <label for="email" class="required mb-1">Email Addres</label>
                                                    <input type="email" id="email" placeholder="Email Address">
                                                </div>
                                                <fieldset>
                                                    <legend>Password change</legend>
                                                    <div class="single-input-item mb-3">
                                                        <label for="current-pwd" class="required mb-1">Current Password</label>
                                                        <input type="password" id="current-pwd" placeholder="Current Password">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-custom">
                                                            <div class="single-input-item mb-3">
                                                                <label for="new-pwd" class="required mb-1">New Password</label>
                                                                <input type="password" id="new-pwd" placeholder="New Password">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-custom">
                                                            <div class="single-input-item mb-3">
                                                                <label for="confirm-pwd" class="required mb-1">Confirm Password</label>
                                                                <input type="password" id="confirm-pwd" placeholder="Confirm Password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="single-input-item single-item-button">
                                                    <button class="btn flosun-button secondary-btn theme-color  rounded-0">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- Single Tab Content End -->
=======
                               
>>>>>>> master
                            </div>
                        </div> <!-- My Account Tab Content End -->
                    </div>
                </div> <!-- My Account Page End -->
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
<!-- my account wrapper end -->
=======
<!-- my account wrapper end -->




<script src="https://esgoo.net/scripts/jquery.js"></script>
<style type="text/css">
    .css_select_div{ text-align: center;}
    .css_select{ display: inline-table; width: 25%; padding: 5px; margin: 5px 2%; border: solid 1px #686868; border-radius: 5px;}
</style>
<script>
    $(document).ready(function() {
    //Lấy tỉnh thành
    $.getJSON('https://esgoo.net/api-tinhthanh/1/0.htm', function(data_tinh) {
        if (data_tinh.error == 0) {
            $.each(data_tinh.data, function(key_tinh, val_tinh) {
                $("#tinh").append('<option value="' + val_tinh.id + '">' + val_tinh.full_name + '</option>');
            });
            $("#tinh").change(function(e) {
                var idtinh = $(this).val();
                var tenTinh = $("#tinh option:selected").text(); // Lấy tên tỉnh được chọn
                $("#hidden_tinh").val(tenTinh); // Đặt giá trị của trường ẩn để gửi tên tỉnh về server
                
                //Lấy quận huyện
                $.getJSON('https://esgoo.net/api-tinhthanh/2/' + idtinh + '.htm', function(data_quan) {
                    if (data_quan.error == 0) {
                        $("#quan").html('<option value="0">Quận Huyện</option>');
                        $("#phuong").html('<option value="0">Phường Xã</option>');
                        $.each(data_quan.data, function(key_quan, val_quan) {
                            $("#quan").append('<option value="' + val_quan.id + '">' + val_quan.full_name + '</option>');
                        });
                    }
                });
            });
        }
    });
    
    //Lấy phường xã khi chọn quận huyện
    $("#quan").change(function(e) {
        var idquan = $(this).val();
        var tenQuan = $("#quan option:selected").text(); // Lấy tên quận huyện được chọn
        $("#hidden_quan").val(tenQuan); // Đặt giá trị của trường ẩn để gửi tên quận huyện về server
        
        $.getJSON('https://esgoo.net/api-tinhthanh/3/' + idquan + '.htm', function(data_phuong) {
            if (data_phuong.error == 0) {
                $("#phuong").html('<option value="0">Phường Xã</option>');
                $.each(data_phuong.data, function(key_phuong, val_phuong) {
                    $("#phuong").append('<option value="' + val_phuong.id + '">' + val_phuong.full_name + '</option>');
                });
            }
        });
    });
    // Lấy phường xã khi chọn phường xã
    $("#phuong").change(function(e) {
        var tenPhuong = $("#phuong option:selected").text(); // Lấy tên phường xã được chọn
        $("#hidden_phuong").val(tenPhuong); // Đặt giá trị của trường ẩn để gửi tên phường xã về server
    });
}); 
 </script>
>>>>>>> master
