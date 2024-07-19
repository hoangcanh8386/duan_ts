<?php 
function dangky($tenkh,$email,$sodienthoai,$diachi,$matkhau,$anh){
    $sql="INSERT INTO `khachhang`( `tenkh`, `email`, `sodienthoai`, `diachi`, `matkhau`, `hinhanhkh`) 
    VALUES ('$tenkh','$email','$sodienthoai','$diachi','$matkhau','$anh')";
    pdo_execute($sql);
    return "đăng ký thành công";
}
function dangnhap($email,$pass){
    $sql="SELECT * FROM `khachhang` WHERE khachhang.email like '$email' AND khachhang.matkhau like '$pass'";
    return pdo_query_one($sql);
    
}
function quenmk($email){
$sql="SELECT * FROM `khachhang` WHERE email like '$email'";
return pdo_query_one($sql);
}
function addkhkhimuahang($tenkh,$email,$sodienthoai){
    $sql="INSERT INTO `khachhang`( `tenkh`, `email`, `sodienthoai`) 
    VALUES ('$tenkh','$email','$sodienthoai')";
    pdo_execute($sql);
}
function getkhmax(){
    $sql="SELECT MAX(id_kh) AS 'id_kh' FROM khachhang;";
return pdo_query_one($sql);
}
?>