<main class="app-content">
  <div class="app-title">
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item">Danh sách sản phẩm</li>
      <li class="breadcrumb-item"><a href="#">Thêm sản phẩm</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Tạo mới sản phẩm chi tiết</h3>
        <div class="tile-body">
          
          <form action="?act=addspchitiet&idsp=<?=$_GET['idsp']?>" enctype="multipart/form-data" class="row" method="post">
            <div class="form-group col-md-3">
              <label class="control-label">Tên sản phẩm chi tiết</label>
              <input name="tenspchitiet" class="form-control" type="text">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Số lượng</label>
              <input name="soluong" class="form-control" type="text">
            </div>
            <!-- <div class="form-group col-md-3">
              <label class="control-label">Size</label>
              <input name="size" class="form-control" type="text">
            </div>

            <div class="form-group col-md-3">
              <label class="control-label">Giới tính</label>
              <input name="gioitinh" class="form-control" type="text">
            </div> -->
            <div class="form-group col-md-3">
              <label class="control-label">Giá</label>
              <input name="gia" class="form-control" type="text">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Mô tả</label>
              <textarea name="mota" id="" cols="30" rows="10"></textarea>
             
            </div>
            
            
            
          
            <div class="form-group col-md-12">
              <label class="control-label">Ảnh sản phẩm chi tiết</label><br>
              <input type="file" name="hinhanh">

            </div>
          
            <button class="btn btn-save mr-3" name="btnsubmit" type="submit">Lưu lại</button>
            <a class="btn btn-cancel" href="?act=chitietsp&idsp=<?=$_GET['idsp']?>">Hủy bỏ</a>
          </form>
        </div>

      </div>
</main>