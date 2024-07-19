<?php 
function listgt(){
    $sql="SELECT * FROM `gioitinh`";
    return pdo_query($sql);
}
?>