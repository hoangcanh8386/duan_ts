<main class="app-content">
  <div class="row">
    <div class="col-md-12">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="#"><b>Bảng điều khiển</b></a></li>
        </ul>
        <div id="clock"></div>
      </div>
    </div>
  </div>
  
    
      <div class="row">
        <!-- col-6 -->
        <div class="col-md-4">
          <div class="widget-small primary coloured-icon"><i class='icon bx bxs-user-account fa-3x'></i>
            <div class="info">
              <h4>Tổng khách hàng</h4>
              <p><b><?= $tongkh['tongkh'] ?></b> khách hàng</p>
              <p class="info-tong">Tổng số khách hàng được quản lý.</p>
            </div>
          </div>
        </div>
        <!-- col-6 -->
        <div class="col-md-4">
          <div class="widget-small info coloured-icon"><i class='icon bx bxs-data fa-3x'></i>
            <div class="info">
              <h4>Tổng sản phẩm</h4>
              <p><b><?= $tongsp['slsp'] ?> </b>sản phẩm</p>
              <p class="info-tong">Tổng số sản phẩm được quản lý.</p>
            </div>
          </div>
        </div>
        <!-- col-6 -->
        <div class="col-md-4">
          <div class="widget-small warning coloured-icon"><i class='icon bx bxs-shopping-bags fa-3x'></i>
            <div class="info">
              <h4>Tổng đơn hàng</h4>
              <p><b><?= $tongsldh['tongdh'] ?> đơn hàng</b></p>
              <p class="info-tong">Tổng số hóa đơn bán hàng trong tháng.</p>
            </div>
          </div>
        </div>
        
        <!-- col-12 -->
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Tình trạng đơn hàng</h3>
            <div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID đơn hàng</th>
                    <th>Tên khách hàng</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($tinhtrangdonhang as $key => $value) : ?>
                    <tr>
                    <td><?=$value['id_dh']?></td>
                    <td><?=$value['tenkh']?></td>
                    <td>
                    <?=number_format($value['tongtien'])?> đ
                    </td>
                    <?php if ($value['idtientrinh']==1) { ?>
                    <td><span class="badge bg-info">Chờ xử lý</span></td>
                     
                 <?php   }else if ($value['idtientrinh']==2) { ?>
                  <td><span class="badge bg-warning">Đang vận chuyển</span></td>

                  <?php  }else{ ?>
                    <td><span class="badge bg-success">Đã hoàn thành</span></td>

                  <?php  } ?>
                  </tr>
                  <?php endforeach ?>
                  
                  <!-- <tr>
                    <td>ER3835</td>
                    <td>Nguyễn Thị Mỹ Yến</td>
                    <td>
                      16.770.000 đ
                    </td>
                    <td><span class="badge bg-warning">Đang vận chuyển</span></td>
                  </tr>
                  <tr>
                    <td>MD0837</td>
                    <td>Triệu Thanh Phú</td>
                    <td>
                      9.400.000 đ
                    </td>
                    <td><span class="badge bg-success">Đã hoàn thành</span></td>
                  </tr> -->
                 
                </tbody>
              </table>
            </div>
            <!-- / div trống-->
          </div>
        </div>
        <!-- / col-12 -->
        <!-- col-12 -->
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Khách hàng mới</h3>
            <div>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên khách hàng</th>
                    <th>Ngày sinh</th>
                    <th>Số điện thoại</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($khachhangmoi as $key => $khachhang) { ?>
                    <tr>
                      <td><?= $khachhang['id_kh'] ?></td>
                      <td><?= $khachhang['tenkh'] ?></td>
                      <td><?= date('d-m-Y', strtotime($khachhang['ngaysinh'])) ?></td>
                      <td><?= $khachhang['sodienthoai'] ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>

          </div>
        </div>
        <!-- / col-12 -->
      </div>
    
    <!--END left-->
    <!--Right-->
    
    <!--END right-->
 



</main>


