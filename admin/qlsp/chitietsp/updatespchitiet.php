<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách sản phẩm</li>
            <li class="breadcrumb-item"><a href="#">Sửa sản phẩm chi tiết</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Tạo mới sản phẩm</h3>
                <div class="tile-body">

                    <form class="row" action="?act=updatespchitiet&idspchitiet=<?=$getspchitiet['id_spct']?>&idsp=<?=$_GET['idsp']?>" method="post" enctype="multipart/form-data">
                        <div class="form-group col-md-3">
                            <label class="control-label">Tên sản phẩm chi tiết</label>
                            <input class="form-control mb-3" value="<?= $getspchitiet['tenspchitiet'] ?>" 
                            name="tenspchitiet" type="text">

                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">số lượng</label>
                            <input class="form-control mb-3" value="<?= $getspchitiet['soluong']  ?>" 
                            name="soluong" type="text">

                        </div>
                        <!-- <div class="form-group col-md-3">
                            <label class="control-label">Size</label>
                            <input class="form-control mb-3" value="<?= $getspchitiet['size']  ?>" 
                            name="size" type="text">

                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Giới tính</label>
                            <input class="form-control mb-3" value="<?= $getspchitiet['gioitinh']  ?>" 
                            name="gioitinh" type="text">

                        </div> -->
                        <div class="form-group col-md-3">
                            <label class="control-label">Giá </label>
                            <input class="form-control mb-3" value="<?= $getspchitiet['gia']  ?>" 
                            name="gia" type="text">

                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Mô tả</label>
                            <input class="form-control mb-3" value="<?= $getspchitiet['mota']  ?>" 
                            name="mota" type="text">

                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Hình ảnh chi tiết</label>
                            <input class="form-control mb-3"  
                            name="hinhanhchitiet" type="file">
                            <img width="40px" src="<?=$getspchitiet['hinhanhchitiet'] ?>" alt="">
                        </div>
               
                       
   
                        <div class="form-group col-md-12">
                            <button class="btn btn-save mr-3" type="submit" name="btnsubmit">Lưu lại</button>
                            <a class="btn btn-cancel" href="?act=chitietsp&idsp=<?=$_GET['idsp']?>">Hủy bỏ</a>

                        </div>

                    </form>







                </div>

            </div>
</main>