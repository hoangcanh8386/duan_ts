<?php 
//  function listsp(){
//     $sql="SELECT * FROM `danh_muc` JOIN san_pham ON san_pham.id_dm=danh_muc.id_dm JOIN sanphamct ON sanphamct.idsp=san_pham.id_sp;";
//     return pdo_query($sql);
//  }

 function listsp(){
   $sql="SELECT * FROM `san_pham` JOIN danh_muc ON danh_muc.id_dm=san_pham.id_dm JOIN gioitinh ON gioitinh.id_gt=san_pham.id_gt JOIN size ON size.id_size=san_pham.id_size;";
   return pdo_query($sql);
}
 function addsp($tensp,$hinhanh,$luotxem,$dacbiet,$id_dm,$id_gt,$size){
   $sql="INSERT INTO `san_pham`(`tensp`, `hinhanh`, `luotxem`, `dacbiet`, `id_dm`,id_gt,id_size) 
   VALUES ('$tensp','$hinhanh',$luotxem,'$dacbiet',$id_dm,$id_gt,$size)";
   pdo_execute($sql);
 }
 function deletesp($idsp){
   $sql="DELETE FROM `san_pham` WHERE id_sp=$idsp";
   pdo_execute($sql);
 }
 function deleteall(){
   $sql="DELETE FROM `san_pham`";
   pdo_execute($sql);
 }

 function getsp($idsp){
$sql="SELECT * FROM `san_pham` join danh_muc ON danh_muc.id_dm=san_pham.id_dm WHERE id_sp=$idsp";
return pdo_query_one($sql);
 }
 function updatesp($idsp,$tensp,$hinhanh,$dacbiet,$id_dm){
  $sql="UPDATE `san_pham` 
  SET `tensp`='$tensp',
  `hinhanh`='$hinhanh',
  `dacbiet`='$dacbiet',`id_dm`='$id_dm' WHERE id_sp=$idsp";
  pdo_execute($sql);
 }

//  chi tiết sản phẩm
function listchitietsp($idsp){
  $sql="SELECT * FROM `san_pham` JOIN gioitinh ON gioitinh.id_gt=san_pham.id_gt JOIN size ON size.id_size=san_pham.id_size JOIN chitietsize ON chitietsize.idsize
  =size.id_size JOIN sanphamct ON sanphamct.idsp=san_pham.id_sp  WHERE san_pham.id_sp=$idsp ; ";
  return pdo_query($sql);
}
function addspchitiet($soluong,$gia,$mota,$tenchitietsp,$hinhanhchitiet,$idsp){
  $sql="INSERT INTO `sanphamct`( `soluong`,
    `gia`, `mota`, `tenspchitiet`, 
   `hinhanhchitiet`, `idsp`) VALUES (
   $soluong,$gia,
   '$mota','$tenchitietsp','$hinhanhchitiet',$idsp)";
   pdo_execute($sql);
}
function deletespchitiet($idspchitiet){
  $sql="DELETE FROM `sanphamct` WHERE id_spct=$idspchitiet";
  pdo_execute($sql);
}
function getchitietsp($idspchitiet){
  $sql="SELECT*FROM sanphamct where id_spct=$idspchitiet";
  return pdo_query_one($sql);
}
function updatechitietsp($idspchitiet,$sl,$gia,$mota,
$tenchitietsp,$hinhanhchitiet){
  $sql="UPDATE `sanphamct` SET
  `soluong`=$sl,`gia`=$gia,
  `mota`='$mota',`tenspchitiet`='$tenchitietsp',
  `hinhanhchitiet`='$hinhanhchitiet' WHERE id_spct=$idspchitiet ";
  pdo_execute($sql);
}
function size(){
  $sql="SELECT * FROM `size`";
  return pdo_query($sql);
}
?>

