<?php


require 'connect.php';
function hapus ($id) {
    global $conn;
    mysqli_query($conn, " DELETE FROM barang WHERE id_barang = $id" );
    return mysqli_affected_rows($conn);
// }
// function md5enkrip($a,$password)
// {
//    $b = $a.$password;
//    return  md5($b);
// 
}

?>