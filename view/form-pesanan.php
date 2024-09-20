<?php 
include ('../layout/header.php'); 
?>

<div class="container mt-3">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Form Pemesanan Paket Wisata</h4>
        </div>
        <div class="card-body">
            <form action="proses-simpan.php" method="POST">
                <div class="form-group mb-3">
                    <label for="namaPemesaan">Nama Pemesan:</label>
                    <input type="text" class="form-control" id="namaPemesan" name="namaPemesan" required>
                </div>
                <div class="form-group mb-3">
                    <label for="noHp">Nomor HP/Telp:</label>
                    <input type="text" class="form-control" id="noHp" name="noHp" required>
                </div>
                <div class="form-group mb-3">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>                
                <div class="form-group mb-3">
                    <label>Pilih Menu Minuman</label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="tehmanis" name="tehmanis">
                        <label class="form-check-label" for="tehmanis">Es Teh Manis (Rp 5.000)</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="lemontea" name="lemontea">
                        <label class="form-check-label" for="lemontea">Lemon Tea (Rp 8.000)</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="tehmelati" name="tehmelati">
                        <label class="form-check-label" for="tehmelati">Es Teh Melati (Rp 6.000)</label>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="jumlahpesanan">Jumlah Pesanan:</label>
                    <input type="number" class="form-control" id="jumlahpesanan" name="jumlahpesanan" required>
                </div>
                <div class="form-group mb-3">
                    <label for="hargapesanan">Harga Pesanan:</label>
                    <input type="text" class="form-control" id="hargapesanan" name="hargapesanan" readonly>
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
</script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#hitungBtn').click(function() {
            var tehmanis = $('#tehmanis').is('checked') ? 1000000 : 0;
            var lemontea = $('#lemontea').is('checked') ? 1200000 : 0;
            var servitehmelati = $('#servitehmelati').is('checked') ? 500000 : 0;
            var jumlahpesanan = parseInt($('#jumlahpesanan').val()) || 0;

            var hargapesanan = tehmanis + lemontea + servisMakan;
            var jumlahTagihan = jumlahpesanan  * hargapesanan;

            $('#hargapesanan').val(hargapesanan);
            $('#jumlahTagihan').val(jumlahTagihan);
        });
    });
</script>