<?php 
function tongsp(){
    $sql="SELECT COUNT(*) AS 'slsp' FROM `sanphamct`;";
    return pdo_query_one($sql);
}
function tongkh(){
    $sql="SELECT COUNT(*) AS 'tongkh' FROM `khachhang`;";
    return pdo_query_one($sql);
    
}
function khachhangmoi(){
    $sql="SELECT * FROM `khachhang` ORDER BY id_kh DESC LIMIT 4;";
    return pdo_query($sql);
}
function tinhtrangdonhang(){
    $sql="SELECT * FROM `donhang` 
    JOIN chitietdonhang ON donhang.id_dh=chitietdonhang.iddh 
    JOIN khachhang ON khachhang.id_kh=donhang.idkh;";
    return pdo_query($sql);
}
?>