<?php
$iddm = getiddm();
?>
<header>

  <div class="title">
    <div class="container">
      <div class="row m-4">
        <div class="col-md-2">
          <div class="logo">
            <img style="margin-top: -10px;
    width: 140px;
    height: 80px;" src="img/logonew.png" alt="">
          </div>
        </div>
        <div class="col-md-9">
          <form class="d-flex" method="post" action="?act=trangchu" role="search">
            <input class="form-control me-1" name="ten" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success text-bg-secondary" name="btnsearch" type="submit">Search</button>
          </form>
        </div>

        <div class="col-md-1">
          <div class="row ">

            <div class="col-md-6 btn-shop">

              <button class="btn btn-primary position-relative">
                <i class="ti-shopping-cart" style="color: #fff;"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">

                  <?php
                  if (isset($_SESSION['id_kh'])) {
                    $slgiohang = demslgiohang($_SESSION['id_kh']);
                    echo  $slgiohang['slgiohang'];
                  ?>

                  <?php  } else { ?>
                    0
                  <?php  } ?>
                  <span class="visually-hidden">unread messages</span>
                </span>
                <div class="shop">
                  <div class="icon-close closeShop">
                    <i class="ti-close"></i>
                  </div>
                  <div class="cart mt-5"><a href="?act=cart">Xem giỏ hàng</a></div>
                  <div class="order mt-2"><a href="?act=tientrinh">Xem đơn mua</a></div>
                  <div class="nav-overlay">
                  </div>
                </div>
              </button>

            </div>

            <?php if (isset($_SESSION['emailkh'])) { ?>
              <div class="col-md-6 btn-user">
                <a href="">
                  <!-- <button type="button" class="btn btn-primary position-relative"> -->
                  <img style="height: 50px; border-radius: 50%; margin-top: -8px;" class="ml-4" src="<?= $_SESSION['hinhanhkh'] ?>" alt="">
                  <!-- </button> -->
                  <div class="account">
                    <a href="?act=dangxuat">đăng xuất</a> <br>
                    <a href="?act=suatk">Quản lý tài khoản</a>
                  </div>
                </a>

              </div>
            <?php } else { ?>
              <div class="col-md-6 btn-user">
                <a href="">
                  <button type="button" class="btn btn-primary position-relative">
                    <i class="ti-user">
                    </i>
                  </button>
                  <div class="account">
                    <li><a href="?act=dangnhap">đăng nhập</a></li>
                    <li><a href="?act=dangky">đăng ký</a></li>
                  </div>
                </a>

              </div>
            <?php } ?>

          </div>

        </div>
      </div>
    </div>

  </div>
  <div class="menu">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="nav menu-destop">
            <ul class="d-flex justify-content-sm-between">
              <li><a href="?act=trangchu">TRANG CHỦ</a></li>
              <li class="drop-down"><a href="?act=trangsucvang&iddm=<?= $iddm[0]['id_dm'] ?>">TRANG SỨC VÀNG <i class="ti-angle-down"></i></a>
                <div class="menu-sub-gold">
                  <ul class="mega-menu d-flex justify-content-evenly">
                    <li class="mega-title"><a href="?act=trangsuckimcuong&iddm=<?= $iddm[1]['id_dm'] ?>"><span>TRANG SÚC KIM CƯƠNG</span></a>
                      <ul class="menu-item">
                        <li><a href="">Nhẫn kim cương</a>

                        </li>
                        <li><a href="#">Bông tai kim cương</a></li>
                        <li><a href="#">Dây chuyền kim cương</a></li>
                        <li><a href="#">Vòng & Lắc kim cương</a></li>
                        <li><a href="#">Trang sức cưới</a></li>
                      </ul>
                    </li>
                    <li class="mega-title"><a href="#"><span>Trang sức CZ</span></a>
                      <ul class="menu-item">
                        <li><a href="#">Nhẫn CZ</a></li>
                        <li><a href="#">Bông tai CZ</a></li>
                        <li><a href="#">Dây chuyền CZ</a></li>
                        <li><a href="#">Vòng & Lắc</a></li>
                        <li><a href="#">Trang sức cưới</a></li>
                        <li><a href="#">Vòng Pan-Charm</a></li>
                      </ul>
                    </li>
                    <li class="mega-title"><a href=""><span>Trang sức đá màu</span></a>
                      <ul class="menu-item">
                        <li><a href="#">Nhẫn đá màu</a></li>
                        <li><a href="#">Bông tai đá màu</a></li>
                        <li><a href="#">Dây chuyền đá màu</a></li>
                        <li><a href="#">Vòng và lắc đá màu</a></li>
                      </ul>
                    </li>
                    <li class="mega-title"><a href="#"><span>Trang sức ngọc trai</span></a>
                      <ul class="menu-item">
                        <li><a href="#">Nhẫn ngọc trai</a></li>
                        <li><a href="#">Bông tai ngọc trai</a></li>
                        <li><a href="#">Dây chuyền ngọc trai</a></li>
                        <li><a href="#">Vòng và lắc ngọc trai</a></li>
                      </ul>
                    </li>
                    <li class="mega-title"><a href="#"><span>Trang sức không gắn đá</span></a>
                      <ul class="menu-item">
                        <li><a href="#">Nhẫn </a></li>
                        <li><a href="#">Bông tai </a></li>
                        <li><a href="#">Dây chuyền </a></li>
                        <li><a href="#">Vòng và lắc </a></li>
                        <li><a href="#">Nhẫn cưới </a></li>
                        <li><a href="#">Charm </a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="drop-down"><a href="?act=trangsuckimcuong&iddm=<?= $iddm[1]['id_dm'] ?>">TRANG SỨC KIM CƯƠNG<i class="ti-angle-down"></i></a>
                <ul class="menu-sub dropdown">
                  <li class="drop-down"><a href="#">Nhẫn cưới</a>
                    <ul class="dropdown menu-sub-child">
                      <li><a href="#">Nhẫn Cưới Kim Cương</a></li>
                      <li><a href="#">Nhẫn Cưới CZ</a></li>
                      <li><a href="#">Nhẫn Cưới Trơn</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Nhẫn cầu hôn</a>
                    <ul class="dropdown menu-sub-child">
                      <li><a href="#">Nhẫn Cầu Hôn Kim Cương</a></li>
                      <li><a href="#">Nhẫn Cầu Hôn CZ</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Kiềng cưới</a></li>
                </ul>
              </li>
              <li class="drop-down"><a href="?act=trangsucngoctrai&iddm=<?= $iddm[2]['id_dm'] ?>">TRANG SỨC NGỌC TRAI <i class="ti-angle-down"></i></a>
                <ul class="menu-sub dropdown">
                  <li class="drop-down"><a href="#">Nhẫn</a>
                  </li>
                  <li><a href="#">Bông Tai</a>
                  </li>
                  <li><a href="#">Dây Chuyền</a></li>
                  <li><a href="#">Vòng & Lắc</a></li>
                </ul>
              </li>
              <li><a href="#">BẠC</a></li>

              <li><a href="?act=tintuc">TIN TỨC</a></li>
              <li><a href="?act=lienhe">LIÊN HỆ</a></li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>

</header>
<script>
  var tiShop = document.querySelector('.btn-shop');
  var shop = document.querySelector('.shop');
  var closeShop = document.getElementsByClassName('closeShop');
  //  console.log(closeShop);
  var overlay = document.querySelector(".nav-overlay");

   tiShop.onclick = function showShop() {
    shop.classList.toggle("open");
    overlay.classList.toggle("open");
  }

  closeShop.onclick = function deleteShop() {
    shop.classList.remove("open");
    overlay.classList.remove("open");
  }
 
</script>