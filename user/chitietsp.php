<?php
$getsizetheosp = getsizetheosp($_GET['id_sp']);

?>

<body>
    <div class="detail-product-main">

        <div class="container">
            <div class="row">

                <div class="col-lg-5">
                    <div class="product-img w-100">
                        <img class="w-100" src="admin/<?php echo $chitietsp['hinhanhchitiet']; ?>" alt="">
                    </div>

                </div>
                <div class="col-lg-7">

                    <div class="product-info">
                        <div class="product-name display-6">
                            <p><?php echo $chitietsp['tenspchitiet']; ?></p>
                        </div>
                        <div class="product-feedback my-4">
                            <div style="display:flex">
                                <div class="icon-start">
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                    <i class="ti-star"></i>
                                </div>

                                <div class="product-review"><span class="product-rating">74</span> đánh giá</div>

                            </div>
                        </div>
                        <div class="product-review"><span class="product-rating">Lượt xem:</span><?= $chitietsp['luotxemspct'] ?></div>

                        <div class="product-price  mt-4">
                            <p><?php echo number_format($chitietsp['gia']); ?> VND</p>
                        </div>
                        <div class="pro-text  mt-4">
                            <p>Mô tả:<?php echo $chitietsp['mota']; ?></p>
                        </div>
                        <div class="product-size d-flex my-4">
                            <div class="mr-5 d-flex size">
                                <h6 class="option-title">Size:</h6>
                                <select class="nice-select" name="size">

                                    <?php foreach ($getsizetheosp as $key => $value) { ?>
                                        <option value="<?= $value['id_chitietsize'] ?>"><?= $value['bankinh'] ?>
                                        </option>

                                    <?php } ?>

                                </select>
                            </div>
                            <div class="action_link action_link_size">
                                <button class="btnsize">Hướng dẫn do size <i class="fa fa-angle-right"></i></button>
                            </div>
                        </div>
                        <div class="quantity-cart-box  align-items-center ">
                            <h6 class="option-title ">Số lượng:</h6>
                            <input type="number" class="sl" name="soluong" value="1" min="1" max="<?= $_GET['soluong'] ?>">

                            <?php if (isset($_SESSION['id_kh'])) { ?>
                                <div class="action_link mt-5 add-cart">
                                    <button class="btn btn-secondary" onclick="addtocart('<?= $chitietsp['tenspchitiet'] ?>',
                                    '<?= $chitietsp['hinhanhchitiet'] ?>',<?= $chitietsp['gia'] ?>,
                                    <?= $_GET['id_spct'] ?>,<?= $_SESSION['id_kh'] ?>,<?= $_GET['id_sp'] ?>,<?= $_GET['soluong'] ?>,<?= $_GET['luotxem'] ?>)" class="btngiohang"> Thêm
                                        giỏ hàng</button>

                                </div>
                            <?php } else { ?>
                                <div class="action_link mt-5">
                                    <button class="btn btn-secondary" class="btngiohang" onclick="alert('Bạn phải đăng nhập')"> Thêm giỏ hàng</button>
                                </div>
                            <?php } ?>

                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-12">
                    <div class="d-flex flex-column comment-section">
                        <div class="p-2">
                            <?php if (isset($_SESSION['id_kh'])) { ?>
                                <form action="?act=chitietsp&id_spct=<?php echo $chitietsp['id_spct'] ?>&id_sp=<?php echo $_GET['id_sp'] ?>&soluong=<?= $chitietsp['soluong'] ?>&luotxem=<?= $chitietsp['luotxem'] ?>" method="POST">

                                    <div class="d-flex flex-row align-items-start"><img class="rounded-circle" src="<?php echo $_SESSION['hinhanhkh'] ?>" width="40">
                                        <textarea class="form-control ml-1 shadow-none textarea boxbl" style="height: 100px;" name="binhluan" placeholder="Nhập bình luận"></textarea>
                                    </div>
                                    <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none" type="submit" name="btnbl">Gửi bình luận</button>
                                        <button class="btn btn-outline-primary btn-sm ml-1 shadow-none cancelbl" type="button">Hủy</button>
                                    </div>
                                </form>
                            <?php } else { ?>

                                <p> Bạn cần <a href="?act=dangnhap" style="border-bottom: 1px solid black;">đăng nhập</a> để thực hiện chức năng bình luận!</p>
                            <?php } ?>
                        </div>



                        <?php foreach ($binhluan as $bl) : ?>
                            <div class="bg-white p-2">
                                <div class="d-flex flex-row user-info"><img class="rounded-circle" src="<?php echo $bl['hinhanhkh'] ?>" width="40">
                                    <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name"><?php echo $bl['tenkh'] ?></span>
                                        <span class="text-black-50"><?php echo  date("d-m-Y", strtotime($bl['thoigian'])) ?></span>
                                    </div>
                                </div>
                                <div class="mt-2 contain-comment">
                                    <input type="text" style="width: 100%;" class="noidung" value="<?php echo $bl['noidung']; ?>">
                                </div>
                            </div>

                            <div class="bg-white btn-binhluan">
                                <div class="d-flex flex-row fs-12">
                                    <?php if (isset($_SESSION['id_kh'])) { ?>


                                        <?php if ($_SESSION['id_kh'] == $bl['id_kh']) { ?>
                                            <div class="like p-2 cursor upbl" idbl="<?= $bl['id_bl']  ?>"><i class="fa fa-commenting-o"></i><span class="ml-1"><button>Sửa</button></span></div>
                                            <div class="like p-2 cursor" onclick="delbl(<?= $bl['id_bl']  ?>)"> <i class="fa fa-trash-o"></i><span class="ml-1"><button>Xóa</button></span></div>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <hr>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <div class="mockup-cart">
        <div class="icon-success">
            <i class="ti-arrow-circle-down"></i>
            <p>Thêm vào giỏ hàng thành công</p>
        </div>
    </div>
    <div class="instruct-size">
        <h4>Hướng dẫn đo size</h4>
        <i class="ti-close closeSize"></i>
        <img src="img/size.jpg" alt="">
    </div>
    <div class="related-product mt-5">
        <div class="related-product-title text-center">
            <h3 class="m-5"> SẢN PHẨM CÙNG LOẠI</h3>
        </div>
        <div class="container">

            <div class="row">
                <?php foreach ($loadspcungloai as $item) : ?>
                    <div class="col-md-3  col-sm-4 col-6">
                        <div class="card">
                            <img src="admin/<?php echo $item['hinhanhchitiet']  ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $item['tenspchitiet'];  ?></h5>
                                <p class="price-product" style="color: #C69967; font-size: 16px;"><?php
                                                                                                    echo number_format($item['gia']);
                                                                                                    ?> VNĐ </p>


                                <a style="cursor: pointer;" link="?act=chitietsp&id_spct=<?php echo $item['id_spct'] ?>&id_sp=<?= $item['id_sp'] ?>&soluong=<?= $item['soluong'] ?>" luotxem="<?= $item['luotxemspct'] ?>" class="mt-2 luotxem"><i style="color: #CC8811;">Xem chi tiết -></i></a>
                                <div class="card-btn">
                                    <button><a href="">Thêm giỏ hàng</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>

        </div>
    </div>


</body>
<script>
    //chỉnh sửa số lượng

    let sl = document.querySelector('.sl');

    sl.addEventListener('input', function() {
        // console.log(sl.value);
        if (sl.value < 1) {
            alert('Số lượng không được nhỏ hơn một');
            sl.value = 1;
        } else {
            if (Number(sl.getAttribute('max')) < sl.value) {
                alert('Số lượng đã vượt quá số lượng tồn kho');
                sl.value = sl.getAttribute('max');
                if (sl.value==0) {
                    sl.value=1;   
                }
            }
        }

    })
    // mockup hiển thị alert thêm sản phẩm thành công vào giỏ hàng
    // let btnCart = document.querySelector('.add-cart');
    // let cart = document.querySelector('.mockup-cart');
    // // console.log(btnCart);
    // btnCart.onclick = function showmockupcart() {
    //     cart.classList.add('open1');
    //     let item = setTimeout(deletemockupcart, 4000);

    // }
    var cart = document.querySelector('.mockup-cart');

    function deletemockupcart() {
        cart.classList.remove('open1');
    }
    // end
    function addtocart(tensp, anh, gia, idspct, idkh, idsp, soluongsanpham, lx) {
        let size = Number(document.querySelector('.nice-select').value);
        let sl = Number(document.querySelector('.sl').value);
        let tongtien = sl * gia;

        if (soluongsanpham <= 0) {
            alert('sản phẩm đã hết hàng');
        } else {
            // mockup hiển thị alert thêm sản phẩm thành công vào giỏ hàng
            let btnCart = document.querySelector('.add-cart');
            // console.log(btnCart);
            btnCart.onclick = function showmockupcart() {
                cart.classList.add('open1');
                let item = setTimeout("deletemockupcart()", 4000);
                // console.log(item);
            }
            $.ajax({
                type: "GET",
                url: "?act=addgiohang",
                data: {
                    tensp: tensp,
                    anh: anh,
                    gia: gia,
                    soluong: sl,
                    size: size,
                    tongtien: tongtien,
                    idspct: idspct,
                    idkh: idkh,
                    idsp: idsp,
                },
                success: function(repon) {
                    // console.log(repon);
                    // alert("bạn đã thêm sản phẩm vào giỏ hàng");
                    window.location.href = "?act=chitietsp&id_spct=" + idspct + "&id_sp=" + idsp + "&soluong=" + soluongsanpham + "&luotxem=" + lx;
                }
            })
        }


    }

    function delbl(idbl) {
        $.ajax({
            type: 'GET',
            url: '?act=deletebl',
            data: 'id_bl=' + idbl,
            success: function(respon) {
                console.log(respon);
            }
        })
    }

    function updatebl(idbl, i) {
        $.ajax({
            type: 'GET',
            url: '?act=updatebl',
            data: 'id_bl=' + idbl + '&noidung=' + i,
            success: function(respon) {
                console.log(respon);
            }
        })
    }

    function noidung() {
        document.querySelectorAll(".noidung").forEach(function(item) {
            item.addEventListener("input", function() {
                let i = item.value;
                document.querySelectorAll(".upbl").forEach(function(a) {
                    a.addEventListener("click", function() {
                        let idbl = a.getAttribute("idbl");
                        updatebl(idbl, i);
                    })
                });
            })
        })
    }
    noidung();
</script>
<script>
    let btnSize = document.querySelector('.btnsize');
    // console.log(btnSize);
    let size = document.querySelector('.instruct-size');
    let closeSize = document.querySelector('.closeSize');

    btnSize.onclick = function showSize() {
        size.classList.add('openSize');
    }

    // console.log(closeSize); 
    closeSize.onclick = function deleteSize() {
        size.classList.remove('openSize');
    }


    // hủy bình luận
    let btnCancel = document.querySelector('.cancelbl');
    let boxBl = document.querySelector('.boxbl');

    btnCancel.onclick = function() {
        boxBl.value = "";
    }
</script>
<!-- tăng số lượng lượt xem -->
<script>
    let listluotxem = document.querySelectorAll('.luotxem');
    listluotxem.forEach(function(item) {
        // console.log(item.getAttribute('luotxem'));
        item.addEventListener('click', function() {
            let luotxem = Number(item.getAttribute('luotxem')) + 1;
            let link = item.getAttribute('link') + "&luotxem=" + luotxem;
            item.setAttribute('href', link);

        })
    })
</script>