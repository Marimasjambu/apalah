<?php
include('../auth/cek_login.php');
include('../config.php');

$id = intval($_GET['id']);
$sql = "SELECT * FROM pesanan WHERE id=$id";
$result = $connection->query($sql);
$data = $result->fetch_assoc();

include('../layout/header.php');
?>

<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Pemesanan Paket Wisata</h4>
        </div>
        <div class="card-body">
            <form action="proses-simpan.php" method="POST">
                <input type="hidden" name="id" value="<?= $data['id']; ?>">
                <div class="form-group mb-3">
                    <label for="nama">Nama Pemesan:</label>
                    <input type="text" class="form-control" id="namaPemesan" value="<?= $data['nama']; ?>" name="namaPemesan" required>
                </div>
                <div class="form-group mb-3">
                    <label for="nomorHp">Nomor HP/Telp:</label>
                    <input type="text" class="form-control" value="<?= $data['phone']; ?>" id="nomorHp" name="nomorHp" required>
                </div>
                <div class="form-group mb-3">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" value="<?= $data['alamat']; ?>" id="alamat" name="alamat" required>
                </div>                
                <div class="form-group mb-3">
                    <label>Pilih Menu Minuman</label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" <?= $data['tehmanis'] === 'Y' ? 'checked' : ''; ?> id="tehmanis" name="tehmanis">
                        <label class="form-check-label" for="tehmanis">Es Teh Manis (Rp 5.000)</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" <?= $data['lemontea'] === 'Y' ? 'checked' : ''; ?> id="lemontea" name="lemontea">
                        <label class="form-check-label" for="lemontea">Lemon Tea (Rp 8.000)</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" <?= $data['tehmelati'] === 'Y' ? 'checked' : ''; ?> id="tehmelati" name="tehmelati">
                        <label class="form-check-label" for="tehmelati">Es Teh Melati (Rp 6.000)</label>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="jumlahpesanan">Jumlah Pesanan:</label>
                    <input type="number" class="form-control" value="<?= $data['jumlahpesanan']; ?>" id="jumlahpesanan" name="jumlahpesanan" required>
                </div>
                <div class="form-group mb-3">
                    <label for="hargaPaket">Harga Pesanan:</label>
                    <input type="text" class="form-control" id="hargaPaket" name="hargapesanan" readonly>
                </div>        
                <div class="form-group mb-3">
                    <label for="jumlahTagihan">Jumlah Tagihan:</label>
                    <input type="text" class="form-control" id="jumlahTagihan" name="jumlahTagihan" readonly>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-success" onclick="hitung()">Hitung</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </div>
    </div>
</div>

<script>
    function hitung() {
        var tehmanis = document.getElementById('tehmanis').checked ? 5000 : 0;
        var lemontea = document.getElementById('lemontea').checked ? 8000 : 0;
        var tehmelati = document.getElementById('tehmelati').checked ? 6000 : 0;
        var jumlahpesanan = parseInt(document.getElementById('jumlahpesanan').value) || 0;

        var hargapesanan = tehmanis + lemontea + tehmelati;
        var jumlahTagihan = jumlahpesanan * hargapesanan;

        document.getElementById('hargapesanan').value = hargapesanan;
        document.getElementById('jumlahTagihan').value = jumlahTagihan;
    }

    document.querySelectorAll('input[type=checkbox], input[type=number]').forEach(input => {
        input.addEventListener('change', hitung);
    });

    document.addEventListener('DOMContentLoaded', hitung);
</script>

<?php include('../layout/footer.php'); ?>
