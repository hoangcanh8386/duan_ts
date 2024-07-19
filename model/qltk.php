<?php
function qltk($idkh)
{
    $sql = "SELECT * FROM `khachhang` WHERE id_kh=$idkh";
    return pdo_query_one($sql);
}
function updatetk($idkh, $tenkh, $email, $sdt, $diachi, $matkhau, $tentk, $hinhanhkh,$ngaysinh)
{
    $sql = "UPDATE `khachhang` SET `tenkh`='$tenkh',
    `email`='$email',`sodienthoai`='$sdt',`diachi`='$diachi',
    `matkhau`='$matkhau',`tentk`='$tentk', ngaysinh='$ngaysinh',
    `hinhanhkh`='$hinhanhkh' WHERE id_kh=$idkh";
    pdo_execute($sql);
}
