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
        <h3 class="tile-title">Tạo mới sản phẩm</h3>
        <div class="tile-body">
         
          <form action="?act=addsp" enctype="multipart/form-data" class="row" method="post">
            <div class="form-group col-md-3">
              <label class="control-label">Tên sản phẩm</label>
              <input name="tensp" class="form-control" type="text">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Lượt xem</label>
              <input name="luotxem" class="form-control" type="text">
            </div>
            <div class="form-group col-md-3">
              <label class="control-label">Tình trạng</label>
              <input name="dacbiet" class="form-control" type="text">
            </div>

           
            
            <div class="form-group col-md-3">
              <label for="exampleSelect1" class="control-label">Danh mục</label>
              <select class="form-control" id="exampleSelect1"  name="danhmuc">
                <option>-- Chọn danh mục --</option>
                <?php
                foreach ($getdm as $key => $dm) :
                ?>
                  <option value="<?= $dm['id_dm'] ?>"><?= $dm['tendm'] ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="exampleSelect1" class="control-label">Giới tính</label>
              <select class="form-control" id="exampleSelect1"  name="gioitinh">
                <option>-- Chọn Giới tính --</option>
                <?php
                foreach ($getgt as $key => $gt) :
                ?>
                  <option value="<?= $gt['id_gt'] ?>"><?= $gt['ten_gt'] ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="form-group col-md-3">
              <label for="exampleSelect1" class="control-label">size</label>
              <select class="form-control" id="exampleSelect1"  name="size">
                <option>-- Chọn size --</option>
                <?php
                foreach ($getsize as $key => $size) :
                ?>
                  <option value="<?= $size['id_size'] ?>"><?= $size['tensptheosize'] ?></option>
                <?php endforeach ?>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label class="control-label">Ảnh sản phẩm</label><br>
              <input type="file" name="hinhanh">

            </div>
          
           
            <button class="btn btn-save mr-3" name="btnsubmit" type="submit">Lưu lại</button>
            <a class="btn btn-cancel" href="?act=quanlysanpham">Hủy bỏ</a>
          </form>
        </div>

      </div>
</main>