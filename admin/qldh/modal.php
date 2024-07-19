<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách đơn hàng</li>

        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Quản lý đơn hàng</h3>
                <div class="tile-body">

                    <form action="?act=editdonhang&id_dh=<?=$_GET['id_dh']?>" method="post" enctype="multipart/form-data">
                        <div class="form-group col-md-3">
                            <label class="control-label">Id đơn hàng</label>
                            <input class="form-control mb-3" value="<?=$getonedonhang['id_dh']?>" name="iddh"
                                type="text">
                            <label class="control-label" for="">Trang thái đơn hàng</label>
                            <select class="form-control mb-3" name="tientrinh" id="">
                                <option value="<?= $getonedonhang['idtientrinh']?>"><?=$getonedonhang['tentientrinh']?>
                                </option>

                                <?php
             foreach ($tientrinh as $key => $value) { ?>
                                <?php  if ($value['idtientrinh']!==$getonedonhang['idtientrinh']) { ?>
                                <option value="<?= $value['idtientrinh']?>"><?=$value['tentientrinh']?></option>
                                <?php  }?>
                                <?php  }
             ?>
                            </select>
                            <button class="btn btn-save" type="submit" name="btnsubmit">Lưu lại</button>
                            <a class="btn btn-cancel" href="?act=quanlydonhang">Hủy bỏ</a>
                        </div>
                    </form>







                </div>

            </div>
</main>