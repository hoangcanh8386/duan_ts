<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách sản phẩm</li>
            <li class="breadcrumb-item"><a href="#">Sửa sản phẩm</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Tạo mới sản phẩm</h3>
                <div class="tile-body">

                    <form class="row" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group col-md-3">
                            <label class="control-label">Tên sản phẩm</label>
                            <input class="form-control mb-3" value="<?= $getsp['tensp'] ?>" 
                            name="tensp" type="text">

                        </div>
               
                        <div class="form-group col-md-3">
                            <label class="control-label">Hình ảnh</label>

                            <input class="form-control mb-3" name="hinhanh" type="file">
                            <img src="<?= $getsp['hinhanh'] ?>" alt="" width="100px;">

                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Đặc biệt</label>
                            <input class="form-control mb-3" value="<?= $getsp['dacbiet'] ?>"
                             name="dacbiet" type="text">

                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Tên danh mục</label>
                            <select class="form-control" id="exampleSelect1" name="danhmuc" id="">
                               <option value="<?=$getsp['id_dm']?>"><?=$getsp['tendm']?></option>
                                <?php foreach ($listdm as $dm) : ?>
                                    <?php if ($getsp['id_dm'] != $dm['id_dm']) { ?>
                                        <option value="<?=$dm['id_dm']?>"><?=$dm['tendm']?></option>
                                    <?php } ?>
                                <?php endforeach ?>
                            </select>

                        </div>
                        <div class="form-group col-md-12">
                            <button class="btn btn-save mr-3" type="submit" name="btnsubmit">Lưu lại</button>
                            <a class="btn btn-cancel" href="?act=quanlysanpham">Hủy bỏ</a>

                        </div>

                    </form>







                </div>

            </div>
</main>