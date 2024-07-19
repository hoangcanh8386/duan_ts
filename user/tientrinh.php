<?php
// $getsizetheosp = getsizetheosp($_GET['id_sp']);
?>


<div class="order1">
    <div class=" container mt-3 mt-md-5">
        <h2 class="text-charcoal hidden-sm-down">Đơn đặt hàng của bạn</h2>
        
        <?php foreach ($alldonhang as $key => $dh) { ?>
            <div class="accordion" id="accordionExample">

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Id đơn hàng:#<?= $dh['id_dh'] ?>
                        </button>
                    </h2>


                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Details -->
                                <div class="card mb-4">
                                    <div class="card-body">

                                        <table class="table table-borderless">
                                            <tbody>
                                                <?php foreach ($quanlydonhang as $key => $item) {
                                                    // $tongtien=0;
                                                       
                                                    if ($item['iddh'] == $dh['id_dh']) { $tongtientheoiddh=tongtientheoiddh($item['iddh']);  ?>
                                                            
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex mb-2">
                                                                    <div class="flex-shrink-0">
                                                                        <img src="admin/<?= $item['hinhanh'] ?>" alt="" width="50" class="img-fluid">
                                                                    </div>
                                                                    <div class="flex-lg-grow-1 ms-3">
                                                                        <h6 class="small mb-0"><a href="#" class="text-reset"><?= $item['tensp'] ?></a></h6>
                                                                        <span class="small">Size: <?= $item['bankinh'] ?></span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><?= $item['soluongchitiet'] ?></td>
                                                            <td class="text-end"> <?= number_format($item['tongtien']) ?>VND</td>
                                                        </tr>
                                                <?php   } 
                                                } ?>

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="2">Tổng tiền</td>
                                                    <td class="text-end"><?=  number_format($tongtientheoiddh['tongtientheoiddh']) ?>VND</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td colspan="2">Giảm giá</td>
                                                    <td class="text-danger text-end"><?= $dh['giamgia'] ?>%</td>
                                                </tr>
                                                <tr class="fw-bold">
                                                    <td colspan="2">Thành tiền</td>
                                                    <td class="text-end"><?= number_format($tongtientheoiddh['tongtientheoiddh'] * (100 - $dh['giamgia']) / 100)  ?>VND</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <!-- Payment -->
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h3 class="h6">Thành tiền</h3>
                                                <p>
                                                    Thành tiền:<?= number_format($tongtientheoiddh['tongtientheoiddh'] * (100 - $dh['giamgia']) / 100) ?>VND  
                                                    <span class="badge bg-success rounded-pill"><?=$dh['tentientrinh']?></span>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h3 class="h6">Địa chỉ nhận</h3>
                                                <address>
                                                    <strong>Tên khách hàng:<?=$item['tenkh']?></strong><br>
                                                    <?=$dh['diachinhan']?><br>
                                                    <abbr title="Phone"></abbr> <?=$dh['sodienthoai']?>
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>


                </div>

            </div>
        <?php } ?>
    </div>

    <!-- <div class="p-3 hidden-md-up"></div> -->