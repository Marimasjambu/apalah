<?php 
require '../auth/cek_login.php';
include ('../config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM pesanan WHERE id= $id";

    if ($connection->query($sql) === TRUE) {
        echo "<script> alert('Pesanan Berhasil Dihapus!');
        document.location.href = 'modifikasi.php';
        </script>";
    }
}
