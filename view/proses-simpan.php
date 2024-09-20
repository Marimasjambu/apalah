<?php
include('../config.php');

$nama = $_POST['namaPemesan'];
$phone = $_POST['noHp'];
$alamat = $_POST['alamat'];
$jumlahpesanan = $_POST['jumlahpesanan'];
$tehmanis = isset($_POST['tehmanis']) ? 'Y' : 'N';
$lemontea = isset($_POST['lemontea']) ? 'Y' : 'N';
$tehmelati = isset($_POST['tehmelati']) ? 'Y' : 'N';

$hargatehmanis = ($tehmanis == 'Y') ? 1000000 : 0;
$hargalemontea = ($lemontea == 'Y') ? 1200000 : 0;
$hargatehmelati = ($tehmelati == 'Y') ? 500000 : 0;
$totalPaket = $hargatehmanis + $hargalemontea + $hargatehmelati;
$totalTagihan = $jumlahpesanan * $totalPaket;

$sql = "INSERT INTO pesanan (namaPemesan, nomorHP, alamat, jumlahpesanan, tehmanis, lemontea, tehmelati, totalPaket, totalTagihan) VALUES ('$nama', '$phone','$jumlahpesanan','$tehmanis', '$lemontea', '$tehmelati', '$totalPaket', '$totalTagihan')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
    alert('Data Berhasil Ditambahkan');
    document.location.href = '../index.php';
    </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
