<?php
include('../config.php');

$id = intval($_POST['id']);
$namaPesanan = mysqli_real_escape_string($connection, $_POST['namaPemesan']);
$nomorHp = mysqli_real_escape_string($connection, $_POST['noHP']);
$tanggal = mysqli_real_escape_string($connection, $_POST['tanggal']);
$jumlahHari = intval($_POST['jumlahHari']);
$jumlahPeserta = intval($_POST['jumlahPeserta']);

$penginapan = isset($_POST['penginapan']) ? 'Y' : 'N';
$transportasi = isset($_POST['transportasi']) ? 'Y' : 'N';
$servis = isset($_POST['servis']) ? 'Y' : 'N';

$hargaPaket = ($penginapan === 'Y' ? 1000000 : 0) + ($transportasi === 'Y' ? 1200000 : 0) + ($servis === 'Y' ? 500000 : 0);
$jumlahTagihan = $jumlahHari * $jumlahPeserta * $hargaPaket;

$query = "UPDATE pesanan SET 
    namaPemesan = '$namaPesanan', 
    noHP = '$nomorHp', 
    tanggal = '$tanggal', 
    jumlahHari = $jumlahHari, 
    penginapan = '$penginapan', 
    transportasi = '$transportasi', 
    servis = '$servis', 
    jumlahPeserta = $jumlahPeserta, 
    totalPaket = $hargaPaket, 
    totalTagihan = $jumlahTagihan 
    WHERE id = $id";

mysqli_query($connection, $query);

if (mysqli_affected_rows($connection) > 0) {
    echo "<script>
    alert('Data Berhasil DIubah');
    document.location.href = 'modifikasi.php';
    </script>";
} else {
    echo "Data Gagal Diubah<br>";
    echo mysqli_error($connection);
}

mysqli_close($connection); ?>
