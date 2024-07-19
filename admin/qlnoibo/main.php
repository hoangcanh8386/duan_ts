<main class="app-content">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item active"><a href="#"><b>Quản lý nội bộ</b></a></li>
        </ul>
        <div id="clock"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row element-button">
                <div class="col-sm-2">
  
                  <a class="btn btn-add btn-sm" href="form-add-bi-cam.html" title="Thêm"><i class="fas fa-plus"></i>
                    Tạo mới</a>
                </div>
               
                <div class="col-sm-2">
                  <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                      class="fas fa-trash-alt"></i> Xóa tất cả </a>
                </div>
              </div>
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th width="10"><input type="checkbox" id="all"></th>
                    <th>Họ và Tên</th>
                    <th>Ngày sinh</th>
                    <th>Chức vụ</th>
                    <th>Lý do cấm</th>
                    <th>Tình trạng</th>
                    <th>Chức năng</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                    <td>Kiều Thái Anh</td>
                    <td>10/09/1998</td>
                    <td>Thu Ngân</td>
                    <td>Gian lận trong công việc đã lấy trộm tiền của công ty và thái độ không ăn năn hối lỗi</td>
                    <td><span class="badge bg-danger">Sa thải</span></td>
                    <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i></button>
                      <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i class="fa fa-edit"></i></button></td>
                  </tr>
                  <tr>
                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                    <td>Nguyễn Thị Kim Yến</td>
                    <td>02/12/1999</td>
                    <td>Thu Ngân</td>
                    <td>Gian lận trong công việc đã lấy trộm tiền của công ty và thái độ không ăn năn hối lỗi</td>
                    <td><span class="badge bg-danger">Sa thải</span></td>
                    <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i></button>
                      <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i class="fa fa-edit"></i></button></td>
                  </tr>
                  <tr>
                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                    <td>Nguyễn Hoàng Thái Nhật</td>                
                    <td>07/02/1996</td>
                    <td>Quản kho</td>
                    <td>Tự ý thay đổi thông tin nhân viên và không báo cáo quản lý</td>
                    <td><span class="badge bg-warning">Khóa tài khoản</span></td>
                    <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i></button>
                      <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i class="fa fa-edit"></i></button></td>
                  </tr>
                  <tr>
                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                    <td>Võ Thành Nam</td>
                    <td>19/09/1999</td>
                    <td>Dịch vụ</td>
                    <td>Phá hỏng 9 sản phẩm của công ty, có kháng cự khi bị bắt (bồi thường 125.000.000 đ)</td>
                    <td><span class="badge bg-danger">Sa thải</span></td>
                    <td><button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i class="fas fa-trash-alt"></i></button>
                      <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"><i class="fa fa-edit"></i></button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>