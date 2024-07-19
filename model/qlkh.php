<?php

function listkh() {
    $sql ="SELECT * FROM khachhang";
   $result = pdo_query($sql);
   return $result;
}
function load_kh() {
    $sql ="SELECT * FROM khachhang limit 3 OFFSET 2";
   $result = pdo_query($sql);
   return $result;
}
function deletekh($id_kh) {
    $sql = "DELETE  FROM khachhang WHERE id_kh = $id_kh";
    pdo_execute($sql);
}

