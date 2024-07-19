<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">

                            <a class="btn btn-add btn-sm" href="?act=addspchitiet&idsp=<?=$_GET['idsp']?>" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới sản phẩm</a>
                        </div>

                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm" type="button" title="Xóa" style="color: black;" href="?act=deleteall"><i class="fas fa-trash-alt"></i> Xóa tất cả </a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <!-- <th width="10"><input type="checkbox" id="all"></th> -->
                                <th>Số thứ tự</th>
                                <th>Mã sản phẩm chi tiết</th>
                                <th>Tên sản phẩm chi tiết</th>
                                <th>Hình ảnh</th>
                                <th>Size</th>
                                <th>Giới tính</th>
                                <th>Giá</th>
                                <th>số lượng</th>
                                <th>Mô tả</th>
                                <th>Thể loại sản phẩm</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listchitietsp as $key => $value) : ?>
                                <tr>
                                    <td><?=$key+1?></td>
                                    <td><?=$value['id_spct']?></td>
                                    <td><?=$value['tenspchitiet']?></td>
                                    <td><img src="<?= $value['hinhanhchitiet'] ?>" alt="" width="100px;"></td>
                                    <td><?=$value['bankinh']?></td>
                                    <td><?=$value['ten_gt']?></td>
                                    <td><?=number_format($value['gia']) ?></td>
                                    <td><?=$value['soluong']?></td>
                                    <td><?=$value['mota']?></td>
                                    <td><?=$value['tensp']?></td>
                                    <td><a href="?act=deletespchitiet&idspchitiet=<?= $value['id_spct'] ?>">
                                            <button class="btn btn-primary btn-sm trash" type="button">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </a>
                                        <a href="?act=updatespchitiet&idspchitiet=<?= $value['id_spct'] ?>&idsp=<?=$_GET['idsp']?>">
                                            <button class="btn btn-primary btn-sm edit" type="button"><i class="fas fa-edit"></i></button>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>