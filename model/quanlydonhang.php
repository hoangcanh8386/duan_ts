<?php 
function quanlydonhang($idkh){
    $sql="SELECT giamgia.*, chitietdonhang.*, khachhang.*,sanphamct.*,san_pham.*,tientrinh.*,chitietsize.* FROM donhang  
    JOIN giamgia ON giamgia.idgiamgia=donhang.idmagiamgia
    JOIN khachhang ON donhang.idkh = khachhang.id_kh 
    JOIN chitietdonhang ON donhang.id_dh = chitietdonhang.iddh 
    JOIN sanphamct ON chitietdonhang.idspct = sanphamct.id_spct 
    JOIN san_pham ON sanphamct.idsp = san_pham.id_sp
    JOIN chitietsize ON chitietdonhang.idchitietsize = chitietsize.id_chitietsize
     JOIN tientrinh ON tientrinh.idtientrinh=donhang.idtientrinh where donhang.idkh=$idkh  ORDER BY donhang.id_dh DESC ";
    return pdo_query($sql);
}
function getonedonhang($iddh){
$sql="SELECT * FROM `donhang` JOIN tientrinh ON tientrinh.idtientrinh=donhang.idtientrinh WHERE id_dh=$iddh";
return pdo_query_one($sql);
}
function tientrinh(){
    $sql="SELECT * FROM `tientrinh`";
    return pdo_query($sql);
}
function updatedonhang($iddh,$idtientrinh){
    $sql="UPDATE `donhang` SET `idtientrinh`=$idtientrinh WHERE id_dh=$iddh";
    pdo_execute($sql);
}
function tongtientientrinh($idkh,$iddh){
    $sql="SELECT SUM(tongtien) AS 'tongtientientrinh' FROM `chitietdonhang` 
    JOIN donhang ON donhang.id_dh=chitietdonhang.iddh WHERE donhang.idkh=$idkh and donhang.id_dh=$iddh;";
    return pdo_query_one($sql);
}
function tongtientheoiddh($iddh){
    $sql="SELECT SUM(tongtien) as 'tongtientheoiddh' FROM `chitietdonhang` WHERE iddh=$iddh";
    return pdo_query_one($sql);
}
function alldonhang($idkh){
    $sql="SELECT * FROM `donhang` JOIN giamgia ON giamgia.idgiamgia=donhang.idmagiamgia 
    JOIN tientrinh ON tientrinh.idtientrinh=donhang.idtientrinh
    where idkh=$idkh ORDER BY donhang.id_dh DESC";
    return pdo_query($sql);
}

?>