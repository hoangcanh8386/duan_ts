<?php
// load sản phẩm theo danh mục
// function Trangsucvang(){
//     $sql="SELECT * FROM `danh_muc`";
//     return pdo_query($sql);

// }
function search($ten){
    $sql="SELECT * FROM `san_pham` JOIN sanphamct ON san_pham.id_sp=sanphamct.idsp JOIN danh_muc ON danh_muc.id_dm=san_pham.id_dm 
    WHERE san_pham.tensp LIKE '%$ten%' 
    OR danh_muc.tendm LIKE '%$ten%' OR sanphamct.tenspchitiet LIKE '%$ten%' ;";
    return pdo_query($sql);
}
