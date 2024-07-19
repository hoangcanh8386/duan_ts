<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách đơn hàng</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">

                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>

                                <th>ID đơn hàng</th>
                                <th>Sản Phẩm</th>
                                <th>Khách hàng</th>
                                <th>Địa chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Số lượng</th>
                                <th>size</th>
                                <th>Đơn giá</th>
                                <th>Tổng tiền</th>
                                <th>Tình trạng</th>
                                
                                <th>Phương thức thanh toán</th>
                                <th>Tính năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php foreach ($listdh as $donhang) {
                                    // var_dump($donhang);
                                    extract($donhang);
                                    $editdonhang = "index.php?act=editdonhang&id_dh=" . $id_dh;

                                    $xoadonhang = "index.php?act=xoadonhang&id_dh=" . $id_dh;

                                    echo '

                          <tr>         

                   <td> ' . $id_dh . ' </td>
                    <td>' . $tenspchitiet . '</td>
                   <td>' . $tenkh . '</td>
                   <td>' . $diachinhan . '</td>
                   <td>' . $sodienthoai . '</td>
                   <td>' . $soluongchitiet . '</td>
                   <td>' . $idchitietsize . '</td>

                   <td>' . $giasp . '</td>
                   <td>' . $tongtien . '</td>
                   <td><span class="badge bg-success">' . $tentientrinh . '</span></td>
                   <td>' . $phuongthuctt . '</td>
                   <td>
                  <a href="' . $editdonhang . '" > <button class="btn btn-primary trash" type="button" title="sửa">
                  <i class="fas fa-edit"></i> </button>
                  </a>
                  <a href="' . $xoadonhang . '" > <button class="btn btn-primary trash" type="button" title="Xóa"><i
                      class="fas fa-trash-alt"></i> </button>
                  </a>
                </td>              
                   
      

                            </tr>';
                                }
                                ?>








                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>