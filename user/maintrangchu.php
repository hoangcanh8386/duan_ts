<main>
  <div class="container-fluid">
    <div class="banner">
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/SlideBanner_PC_BC.jpg" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="img/SlideBanner_PC.jpg" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="img/WD_SlideBanner_PC.jpg" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="img/SlideBanner_PC_YEN.jpg" class="d-block w-100" alt="..." />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
  <div class="container">

    <div class="her-style text-center m-5">
      <h3>SẢN PHẨM GIẢM GIÁ</h3>
      <p>
        Chạm đến tinh hoa - Nhận ngàn ưu đãi
      </p>
    </div>
    <div class="product">
      <div class="row">
        <?php foreach ($loadspsale as $item) : 
         ?>
          <div class="col-md-3 col-sm-4 col-6">
            <div class="card">
              <div class="card-img">

                <img src="admin/<?php echo $item['hinhanhchitiet']; ?>" class="card-img-top product-img-sale" alt="..." />
              </div>
              <div class="card-body">
                <h6 class="card-title"><?php echo $item['tenspchitiet']; ?></h6>
                <del class="price-product-initial"><?php echo number_format($item['gia']) ?> VND</del>
                <p class="price-product" style="color: #C69967; font-size: 16px;"><?php

                                                                                  $price = $item['gia'];
                                                                                  $phantram = $item['dacbiet'];
                                                                                  echo number_format($item['gia'] - ($price * $phantram) / 100)
                                                                                  ?> VND </p>
                <div class="d-flex justify-content-between ">
                  <div class="buy-product">
                    <a href="?act=chitietsp&id_spct=<?php echo $item['id_spct'] ?>&id_sp=<?= $item['id_sp'] ?>&luotxem=<?=$item['luotxem']?>&soluong=<?=$item['soluong']?>"  class="btn btn-primary">Mua ngay</a>
                  </div>
                  <a class="mt-2 luotxem" style="cursor: pointer;" link="?act=chitietsp&id_spct=<?php echo $item['id_spct'] ?>&id_sp=<?= $item['id_sp'] ?>&soluong=<?= $item['soluong'] ?>" luotxem="<?=$item['luotxemspct']?>"   ><i style="color: #CC8811;">Xem chi tiết -></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>

    </div>
    <div class="subbanner">
      <img src="/img/SubBanner_PC_1.jpg" class="w-100" alt="" />
    </div>
    <div class="most text-center m-3">
      <h3>DANH MỤC SẢN PHẨM</h3>
      <p>
        Hơn cả một thiết kế, Lộc Phúc khắc hoạ tình yêu của riêng bạn
      </p>
    </div>
    <div class="row">
      <?php foreach ($loaddm as $item) : ?>
        <div class="col-md-3 col-sm-4 col-6">

          <div class="card card-dm">
            <div class="card-img">
              <img src="admin/<?php echo $item['hinhanhdm']; ?>" class="card-img-top" alt="..." />
            </div>
            <div class="card-body">
              <h5 class="card-title text-center"><?php echo $item['tendm']; ?></h5>
            </div>
            <div class="card-btn">
              <button><a href="?act=trangsucvang&iddm=<?= $item['id_dm'] ?>">Xem thêm</a></button>
            </div>
          </div>

        </div>
      <?php endforeach ?>
    </div>



    <div class="bannerBTS2">
      <img src="/img/Banner_BST_2.jpg" class="w-100" alt="" />
    </div>
    <div class="new text-center">
      <h3>TRANG SỨC CAO CẤP</h3>
      <p>Thỏa sức thể hiện sự kiêu kỳ, phô diễn trọn vẹn vẻ đẹp của kim cương thiên nhiên tiêu chuẩn quốc tế GIA với giác cắt hoàn hảo nhất.</p>
    </div>
    <div class="jquery">
      <div class="row">
        <?php foreach ($loadtrangsuccaocap as $item) : ?>
          <!-- <div class="col-md-3 col-sm-4 col-6">
            <div class="card">
              <img src="admin/<?php echo $item['hinhanhchitiet'] ?>" class="card-img-top" alt="" />
              <div class="card-body">
                <h5 class="card-title"><?php echo $item['tenspchitiet']  ?></h5>
                <p class="card-text">
                  <?php echo $item['mota'] ?>
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div> -->
        <?php endforeach ?>

      </div>
      <div class="btn d-flex justify-content-center m-3">
        <!-- <button type="button" class="btn btn-outline-info">Info</button> -->
      </div>
    </div>
  </div>
  <section class="container">

  <div class="row">
      <div class="slider-img d-flex">
        <div class="col-md-2 user">
          <img src="img/DEA0330AEW-WG01A-model-hover.jfif" alt="" />
        </div>
        <div class="col-md-2 user">
          <img src="img/DFH0218AEW-WG01A-model-hover.jfif" alt="" />
        </div>
        <div class="col-md-2 user">
          <img src="img/DFH0109BRW-WG01A-model-hover.jfif" alt="" />
        </div>
        <div class="col-md-2 user">
          <img src="img/ESSENZA_MB.jpg" alt="" />
        </div>
        <div class="col-md-2 user">
          <img src="img/anhng1.jpg" alt="" />
        </div>
        <div class="col-md-2 user">
          <img src="img/DRF0190ARW-RB01A-model-hover.jfif" alt="" />
        </div>
        <div class="col-md-2 user">
          <img src="img/form dk.jpg" alt="" />
        </div>
        <div class="col-md-2 user">
          <img src="img/anhng1.jpg" alt="" />
        </div>
        <div class="col-md-2 user">
          <img src="img/anhng1.jpg" alt="" />
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="hiden-end text-center">
      <h3>SẢN PHẨM ĐƯỢC XEM NHIỀU NHẤT</h3>
      <p>
        Thỏa sức thể hiện sự kiêu kỳ, phô diễn trọn vẹn vẻ đẹp của kim cương
        thiên nhiên tiêu chuẩn quốc tế GIA với giác cắt hoàn hảo nhất.
      </p>
    </div>
    <div class="row">
      <!-- <div class="col-md-6">video</div>
      <div class="col-md-6">slide</div> -->

      <?php foreach ($loadsptheoluotxem as $item) : ?>
        <div class="col-md-3 col-sm-4 col-6">
          <div class="card card_topsp">
            <div class="card-img">
              <img src="admin/<?php echo $item['hinhanhchitiet']; ?>" class="card-img-top product-img-sale" alt="..." />
            </div>
            <div class="card-body">
              <h6 class="card-title"><?php echo $item['tenspchitiet']; ?></h6>

              <p class="price-product" style="color: #C69967; font-size: 16px;"><?php
                                                                                echo number_format($item['gia']);
                                                                                ?> VNĐ </p>


              <a style="cursor: pointer;" link="?act=chitietsp&id_spct=<?php echo $item['id_spct'] ?>&id_sp=<?= $item['id_sp'] ?>&soluong=<?= $item['soluong'] ?>" luotxem="<?= $item['luotxemspct'] ?>" class="mt-2 luotxem"><i style="color: #CC8811;">Xem chi tiết -></i></a>
              <div class="card-btn">
                <button><a href="?act=chitietsp&id_spct=<?php echo $item['id_spct'] ?>&id_sp=<?= $item['id_sp'] ?>">Thêm giỏ hàng</a></button>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>

    </div>


   


    <div class="khachhang text-center">
      <h3>KHÁCH HÀNG THÂN THIẾT</h3>
      <p>Nói về Lộc Phúc Fine Jewelry</p>
      <div class="row m-5">
        <?php foreach ($loadkhachhang as $item) : ?>
          <div class="col-md-4">
            <img style="width: 175px; height: 175px; border-radius: 180px;" src="<?php echo $item['hinhanhkh'] ?>" alt="" />
          </div>
        <?php endforeach ?>
        <p class="mt-4">
          Đã mua sắm trang sức tại Lộc Phúc rất nhiều lần, mình ưng ý nhất
          là dịch vụ đặt hàng Online, nhanh chóng, an toàn và vô cùng tiện
          lợi nha.
        </p>
        
      </div>
    </div>
    <div class="new text-center">
      <h3>TIN TỨC</h3>
      <p>ƯU ĐÃI SỰ KIỆN</p>
    </div>
    <div class="product-new">
      <div class="row">
        <div class="slider-new">
          <div class="col-md-4">
            <div class="card">
              <img src="admin/upload_img/tin1.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <!-- <h5 class="card-title">Card title</h5> -->
                <p class="card-text">
                  ESSENZA - 10 Mẫu Vỏ Bông Tai Kim Cương Đẹp Không Thể Bỏ Lỡ
                </p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="admin/upload_img/tin2.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <!-- <h5 class="card-title">Card title</h5> -->
                <p class="card-text">
                  HER - Trang Sức Của Quý Cô Gợi Cảm Nhẹ Nhàng,giành riêng cho chi em phụ nữ
                </p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="admin/upload_img/tin3.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <!-- <h5 class="card-title">Card title</h5> -->
                <p class="card-text">
                  VIJF 2023 – Lộc Phúc Mang Đến Triển Lãm Hàng Loạt Bộ Sưu Tập Trang Sức Đặc Sắc
                </p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="admin/upload_img/tin4.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <!-- <h5 class="card-title">Card title</h5> -->
                <p class="card-text">
                SUPER SALES - Ưu Đãi 30% Dòng FELIZ, CABALLERO Chỉ Một Lần Duy Nhất
                </p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="admin/upload_img/tin5.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <!-- <h5 class="card-title">Card title</h5> -->
                <p class="card-text">
                  VIJF 2023 – Lộc Phúc Mang Đến Triển Lãm Hàng Loạt Bộ Sưu Tập Trang Sức Đặc Sắc
                </p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="admin/upload_img/tin6.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <!-- <h5 class="card-title">Card title</h5> -->
                <p class="card-text">
                  VIJF 2023 – Lộc Phúc Mang Đến Triển Lãm Hàng Loạt Bộ Sưu Tập Trang Sức Đặc Sắc
                </p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script>
  $('.slider-img').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: true,
    //  Infinity: true,
     arrows: true,
     autoplay: true,
     speed:1000,
  });
  $('.slider-new').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
     adaptiveHeight: true,
     Infinity: true,
  
  });



</script>
<script>
  let listluotxem=document.querySelectorAll('.luotxem');
  listluotxem.forEach(function(item){
    // console.log(item.getAttribute('luotxem'));
    item.addEventListener('click',function(){
 let luotxem=Number(item.getAttribute('luotxem'))+1;
 let link=item.getAttribute('link')+"&luotxem="+luotxem;
 item.setAttribute('href',link);

    })
  })
 
</script>