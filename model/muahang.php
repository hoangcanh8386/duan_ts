<?php 
function getmuahangtheospct($idspct){
$sql="SELECT * FROM `sanphamct` WHERE id_spct=$idspct";
return pdo_query_one($sql);
}
function getdh($id_kh){
    $sql="SELECT MAX(donhang.id_dh) AS 'iddh',donhang.* FROM `donhang` WHERE idkh=$id_kh";
    return pdo_query_one($sql);
}
function getmagiamgia(){
    $sql="SELECT * FROM `giamgia`";
    return pdo_query($sql);
}
function thanhtien(){

}
function adddh($diachinhan,$ngaydathang,$sodienthoai,$pttt,$idkh,$idtientrinh,$idgiamgia){
    $sql="INSERT INTO `donhang`( `diachinhan`,ngaydathang, `sodienthoai`, `phuongthuctt`, `idkh`,idtientrinh,idmagiamgia) 
    VALUES ('$diachinhan','$ngaydathang','$sodienthoai','$pttt',$idkh,$idtientrinh,$idgiamgia)";
    pdo_execute($sql);
}
function addchitietdh($slchitiet,$giasp,$tongtien,$iddh,$idspct,$idchitietsize){
    $sql="INSERT INTO `chitietdonhang`
    ( `soluongchitiet`, `giasp`, `tongtien`, `iddh`, `idspct`,idchitietsize) 
    VALUES ($slchitiet,$giasp,$tongtien,$iddh,$idspct,$idchitietsize)";
    pdo_execute($sql);
    
}
?>