<?php
function loadallDH()
{
    $sql = "SELECT donhang.*, chitietdonhang.*, khachhang.*,sanphamct.*,san_pham.*,tientrinh.* FROM donhang 
    JOIN khachhang ON donhang.idkh = khachhang.id_kh 
    JOIN chitietdonhang ON donhang.id_dh = chitietdonhang.iddh 
    JOIN sanphamct ON chitietdonhang.idspct = sanphamct.id_spct 
    JOIN san_pham ON sanphamct.idsp = san_pham.id_sp
     JOIN tientrinh ON tientrinh.idtientrinh=donhang.idtientrinh;";

    $listdh = pdo_query($sql);
    // $tongTien = $giasp * $soluongchitiet;
    return $listdh;
}
function xoadonhang($id_dh)
{
    $sql = "DELETE donhang, chitietdonhang FROM donhang
    INNER JOIN chitietdonhang 
    ON donhang.id_dh = chitietdonhang.iddh WHERE id_dh=" . $id_dh;
    return pdo_execute($sql);
}

?>