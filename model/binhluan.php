<?php

function binhluan($id)
{
    $sql = "SELECT * FROM binhluan 
    JOIN khachhang on binhluan.idkh =khachhang.id_kh 
    JOIN sanphamct on binhluan.idspct = sanphamct.id_spct
    WHERE sanphamct.id_spct = $id
    ";
    return pdo_query($sql);
}
// function getidkh($id_kh) {
//   $sql = "SELECT * FROM khachhang WHERE id_kh = $id_kh";
//   return pdo_query($sql);
// }
function guibinhluan($idkh, $id_spct, $binhluan)
{
    $date = date('Y-m-d');
    // echo  $date;
    $sql = "INSERT INTO binhluan(idkh,thoigian,idspct,noidung)
     VALUES($idkh,'$date',$id_spct,'$binhluan');
";
    pdo_execute($sql);
}

function updatebl($noidung, $id_bl)
{
    $sql = "UPDATE binhluan SET noidung = '$noidung' WHERE id_bl = $id_bl";
    pdo_execute($sql);
}
// bên admin
function listbltoadmin()
{
    $sql = "SELECT * FROM binhluan 
JOIN khachhang on binhluan.idkh =khachhang.id_kh 
JOIN sanphamct on binhluan.idspct = sanphamct.id_spct";
    return pdo_query($sql);
}
function deletebl($idbl)
{
    $sql = "DELETE FROM `binhluan` WHERE id_bl=$idbl";
    pdo_execute($sql);
}
