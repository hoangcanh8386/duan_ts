<?php
$getgiamgia = getmagiamgia();
?>

<body>

    <div class="check-main">
        <div class="container">
            <div class="row mt-20">
                <div class="col-12">
                    <div class="check-user">

                    </div>
                </div>
            </div>
            <form action="?act=muahang" method="post">

                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="checkout-title">Thông tin người mua</h5>

                        <div class="single-input-item">
                            <input class="form-control p-3" value="<?= $getkh['tenkh'] ?>" type="text" id="name" name="username" placeholder="Họ và tên của bạn">

                        </div>
                        <div class="row">
                            <div class="col-md-6">

                                <div class="single-input-item">
                                    <input class="form-control mt-5 w-100 p-3" value="<?= $getkh['email'] ?>" type="email" id="email" name="email" placeholder="Email của bạn">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control mt-5 w-100 p-3" type="phone" value="<?= $getkh['sodienthoai'] ?>" id="phone" name="sodienthoai" placeholder="Số điện thoại của bạn">
                            </div>
                        </div>




                        <h5 class="mt-5 checkout-title">Địa chỉ nhận hàng</h5>
                        <div class="single-input-item">
                            <input class="form-control p-3" type="text" id="name" name="diachinhan" placeholder="Địa chỉ nhận hàng">

                        </div>

                        <h5 class="mt-5 checkout-title">Chọn hình thức thanh toán</h5>
                        <div class="option-checkout">
                            <div class="option-iem d-flex">
                                <input type="radio" name="option" id="" value="Thanh toán tiền mặt khi nhận hàng">
                                <label class="m-3">Thanh toán tiền mặt khi nhận hàng</label>
                            </div>
                            <div class="option-iem">
                                <input type="radio" name="option" id="" value="Thanh toán tiền mặt tại cửa hàng">
                                <label class="m-3">Thanh toán tiền mặt tại cửa hàng</label>
                            </div>
                            <div class="option-iem">
                                <input type="radio" name="option" value="Chuyển khoản" id="">
                                <label class="m-3">Chuyển khoản</label>
                            </div>
                        </div>
                        <?php if (isset($thongbao)) {
                            echo $thongbao;
                        } ?>

                    </div>
                    <div class="col-lg-6">
                        <h5 class=" checkout-title">Thông tin đơn hàng</h5>


                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="title">
                                        <th class="pro-img">Sản phẩm</th>
                                        <th class="pro-quantity">Số lượng</th>
                                        <th>size</th>
                                        <th class="pro-price">Giá</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($allgiohang as $key => $giohang) { ?>

                                        <tr>
                                            <th><img style="width: 50px; height: 50px;" src="admin/<?= $giohang['hinhanhspct'] ?>" alt=""><br>
                                                <?= $giohang['tensp'] ?>
                                            </th>
                                            <th>
                                                <?= $giohang['slgiohang'] ?>

                                            </th>
                                            <th><?= $giohang['bankinh'] ?></th>
                                            <th><?= number_format($giohang['giasp']) ?>VND</th>

                                        </tr>

                                    <?php } ?>



                                </tbody>

                                <tr>
                                    <th colspan="3">
                                        <div class="title-sale">
                                            Nhập mã ưu đãi <br>
                                            <select name="magiamgia" id="">
                                                <?php foreach ($getgiamgia as $key => $giamgia) { ?>
                                                    <option value="<?= $giamgia['idgiamgia'] ?>">
                                                        <?= $giamgia['magiamgia'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="btn-sale">
                                            <button name="btnapdung" class="btn btn-secondary">Áp dụng</button>
                                        </div>
                                    </th>

                                </tr>
                                <tr>
                                    <th colspan="3">Thành tiền</th>
                                    <th colspan="1">
                                        <?= number_format($thanhtien['tongtien']) ?>VND
                                    </th>
                                </tr>

                            </table>
                            <div class="single-input-item">
                                <textarea name="Note" id="ordernote" cols="63" rows="6" placeholder="Quý khách có thể để lại lời nhắn cho Lộc Phúc Fine Jewelry tại đây!"></textarea>
                            </div>
                            <div class="summary-footer-area">
                                <div class="custom-control custom-checkbox mb-20 d-flex">
                                    <input type="checkbox" class="custom-control-input m-3" id="terms">
                                    <label class="custom-control-label" for="terms">Tôi đồng ý với các <a href="#">điều
                                            khoản và điều kiện</a> giao dịch của Lộc Phúc Fine Jewelry</label>
                                </div>
                                <button type="submit" name="payUrl" id="dat-mua-notlogin" class="btn btn-secondary btn-dathang">Đặt Mua</button>
                            </div>


                        </div>
                    </div>
                </div>
            </form>


        </div>

    </div>


</body>