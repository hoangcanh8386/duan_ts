<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="/images/hay.jpg" width="50px" alt="User Image">
            <div>
                  <p class="app-sidebar__user-name"><b><?= $_SESSION['user'] ?></b></p>
                  <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
            </div>
      </div>
      <hr>
      <ul class="app-menu">

            <li><a class="app-menu__item active" href="?act=bangdieukhien"><i class='app-menu__icon bx bx-tachometer'></i><span class="app-menu__label">Bảng điều khiển</span></a></li>


            <li><a class="app-menu__item" href="?act=quanlynhanvien"><i class='app-menu__icon bx bx-id-card'></i> <span class="app-menu__label">Quản lý nhân viên</span></a></li>
            <li><a class="app-menu__item" href="?act=quanlykhachhang"><i class='app-menu__icon bx bx-user-voice'></i><span class="app-menu__label">Quản lý khách hàng</span></a></li>
            <li><a class="app-menu__item" href="?act=quanlybinhluan"><i class='app-menu__icon bx bx-user-voice'></i><span class="app-menu__label">Quản lý bình luận</span></a></li>

            <li><a class="app-menu__item" href="?act=quanlydanhmuc"><i class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý danh mục</span></a>
            </li>
            <li><a class="app-menu__item" href="?act=quanlysanpham"><i class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý sản phẩm</span></a>
            </li>
            <li><a class="app-menu__item" href="?act=quanlydonhang"><i class='app-menu__icon bx bx-task'></i><span class="app-menu__label">Quản lý đơn hàng</span></a></li>



            <li><a class="app-menu__item" href="?act=baocaodoanhthu"><i class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Báo cáo doanh thu</span></a>
            </li>



      </ul>
</aside>