<?php
function loadsp() {
    $sql = "SELECT * FROM sanphamct";
}
function loadspsale() {
    $sql = "SELECT * FROM sanphamct JOIN san_pham
     ON san_pham.id_sp = sanphamct.idsp WHERE dacbiet > 0 ";
   return pdo_query($sql);
}
function loaddm() {
    $sql = "SELECT * FROM danh_muc";
    return pdo_query($sql);
}
function loadsptheoluotxem() {
    $sql = "SELECT * FROM sanphamct 
    JOIN san_pham ON san_pham.id_sp = sanphamct.idsp ORDER BY luotxem DESC LIMIT 12";
    return pdo_query($sql);
}
function chitietsp($id_spct){
    $sql = "SELECT * FROM sanphamct 
    JOIN san_pham ON san_pham.id_sp=sanphamct.idsp WHERE id_spct = $id_spct";
    return pdo_query_one($sql);
}
function getsizetheosp($idsp){
   $sql="SELECT * FROM `chitietsize` 
   JOIN size ON size.id_size=chitietsize.idsize 
   JOIN san_pham ON san_pham.id_size=size.id_size WHERE san_pham.id_sp=$idsp;";
   return pdo_query($sql);
}

function getoneidsp() {
    $sql = "SELECT  * FROM san_pham";
    return pdo_query($sql);
}
function loadspcungloai($id_sp,$id_spct) {
    $sql = " SELECT * FROM sanphamct JOIN san_pham ON 
    sanphamct.idsp = san_pham.id_sp WHERE id_sp = $id_sp and 
    id_spct <> $id_spct";
    return pdo_query($sql);
}
function capnhatluotxem($idspct,$luotxem){
    $sql="UPDATE `sanphamct` SET `luotxemspct`=$luotxem WHERE id_spct=$idspct";
    pdo_execute($sql);
}

?>
