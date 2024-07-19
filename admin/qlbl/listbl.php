<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Quản lý khách hàng</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">

                        </div>


                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>

                                <th>Id bình luận</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Tên khách hàng</th>
                                <th>Ảnh khách hàng</th>
                                <th>Nội dung bình luận</th>
                                <th>Chức năng</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listbl as $key => $bl) { ?>
                                <tr>
                                    <th><?= $bl['id_bl'] ?></th>
                                    <th><?= $bl['tenspchitiet'] ?></th>
                                    <th>
                                        <img style="width: 200px;" src="<?= $bl['hinhanhchitiet'] ?>" alt="">
                                    </th>
                                    <th><?= $bl['tenkh'] ?></th>
                                    <th> <img style="width: 200px;" src="../<?= $bl['hinhanhkh'] ?>" alt="">
                                    </th>
                                    <th><?= $bl['noidung'] ?></th>
                                    <th><a class="delete" id=<?php echo $bl['id_bl'] ?>><button class="btn btn-primary" name="btn" type="button"><i class="fas fa-trash-alt"></i></button></a></th>

                                </tr>
                            <?php  } ?>
                        </tbody>



                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    var btnDelete = document.querySelectorAll(".delete");
    
    btnDelete.forEach(function(item) {
        item.addEventListener('click', function() {
            let x = item.getAttribute('id');
            let check = confirm("Bạn có muốn xóa khách hàng này?");
            if (check) {
                let href = item.setAttribute('href', '?act=deletebl&id_bl=' + x);
            }
        })
    });
</script>