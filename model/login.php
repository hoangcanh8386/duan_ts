<?php 
function nhanvien(){
    $sql="SELECT * FROM  nhanvien";
    return pdo_query($sql);
}

// function updatemk($id,$matkhau){
// $sql="UPDATE `nhanvien` SET `matkhau`='$matkhau' WHERE id_nv=$id";
// pdo_execute($sql);
// }
// function updatemkceo($id,$matkhauceo){
//     $sql="UPDATE `ceo` SET `mk`='$matkhauceo' WHERE id_ceo=$id";
//     pdo_execute($sql);
// }
function login($email){
    $sql="SELECT * FROM `nhanvien` WHERE email like '$email'  ";
   return pdo_query_one($sql);
}


?>