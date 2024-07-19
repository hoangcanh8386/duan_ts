<body>

    <main>
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="ti-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#"><?= $loadsptheodm[0]['tendm'] ?></a></li>

                </ol>
            </nav>
        </div>
        <div class="container-fluid">
            <div class="banner">
                <img src="img/KimCuong_PC.jpg" class="w-100" alt="">
            </div>
        </div>
        <div class="container">
            <div class="trangsucvang text-center mt-3">
                <h1><?= $loadsptheodm[0]['tendm'] ?></h1>

            </div>
          

            <div class="product_vang ">
                <div class="row p-3">
                    <?php foreach ($loadsptheodm as $item) : ?>
                        <div class="col-md-3 col-sm-4 col-6 add">
                            <div class="card cardto card_topsp">
                                <img src="admin/<?php echo $item['hinhanhchitiet'] ?>" alt="...">
                              
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $item['tenspchitiet']; ?></h5>
                                    <p class="price-product" style="color: #C69967; font-size: 16px;"><?php
                                                                                                        echo number_format($item['gia']);
                                                                                                        ?> VNĐ </p>

<a style="cursor: pointer;" link="?act=chitietsp&id_spct=<?php echo $item['id_spct'] ?>&id_sp=<?= $item['id_sp'] ?>&soluong=<?= $item['soluong'] ?>" luotxem="<?= $item['luotxemspct'] ?>" class="mt-2 luotxem"   ><i style="color: #CC8811;">Xem chi tiết -></i></a>

                                    <div class="card-btn">
                                        <button><a href="?act=chitietsp&id_spct=<?php echo $item['id_spct'] ?>&id_sp=<?= $item['id_sp'] ?>&luotxem=<?=$item['luotxemspct']?>&soluong=<?=$item['soluong']?>">Thêm giỏ hàng</a></button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    <?php endforeach ?>


                </div>
               
            </div>
            
        </div>

    </main>

</body>
<script>
  let listluotxem=document.querySelectorAll('.luotxem');
  listluotxem.forEach(function(item){
    // console.log(item.getAttribute('luotxem'));
    item.addEventListener('click',function(){
 let luotxem=Number(item.getAttribute('luotxem'))+1;
 let link=item.getAttribute('link')+"&luotxem="+luotxem;
 item.setAttribute('href',link);


 console.log(link);
 
      // console.log(item.getAttribute('luotxem'));

    })
  })
 
</script>