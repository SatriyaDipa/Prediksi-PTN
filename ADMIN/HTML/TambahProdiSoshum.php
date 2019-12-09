<?php
include('../../koneksi.php');
session_start();
if(@$_SESSION['status'] != "adm") {
    echo "<script type='text/javascript'>alert('Login terlebih dahulu!');window.location.href='../../index.php';</script>";
}
?>
<html>
<head>
    <title>Tambah Data Prodi Soshum</title>
    <?php include "NavbarAdmin.php" ?>
</head>
<body background="../IMAGE/bgPendidikan4.jpg" style="background-size: cover">
<br>
<div class="text-center">
    <h1>Tambah Data Prodi Soshum</h1>
</div>
<br>
<div class="container">
    <form action="tambahsaintek_aksi.php" method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="inputKode">Kode</label>
                    <input type="number" class="form-control" id="inputKode" name="kode" placeholder="Masukkan kode ptn">
                </div>
                <div class="form-group">
                    <label for="inputProdi">Program Studi - PTN</label>
                    <input type="text" class="form-control" id="inputProdi" name="prodi" placeholder="Masukkan nama prodi - ptn">
                </div>
                <div class="form-group">
                    <label for="inputUTBK">UTBK</label>
                    <input type="number" class="form-control" id="inputUTBK" name="utbk" placeholder="Masukkan nilai utbk">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="inputDTB">Daya Tampung 2019</label>
                    <input type="number" class="form-control" id="inputDTB" name="tampung_baru" placeholder="Masukkan jumlah daya tampung 2019">
                </div>
                <div class="form-group">
                    <label for="inputPL">Peminat 2018</label>
                    <input type="number" class="form-control" id="inputPL" name="minat_lama" placeholder="Masukkan jumlah peminat pada 2018">
                </div>
                <div class="form-group">
                    <label for="inputRatio">Ratio</label>
                    <input type="number" class="form-control" id="inputRatio" name="ratio" placeholder="Masukkan ratio">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="inputPMB">Prediksi Peminat 2019</label>
                    <input type="number" class="form-control" id="inputPMB" name="minat_baru" placeholder="Masukkan prediksi peminat 2019">
                </div>
                <div class="form-group">
                    <label for="inputRTPen">Ranking Terendah Pendaftar</label>
                    <input type="number" class="form-control" id="inputRTPen" name="rankrendah_pendaftar" placeholder="Masukkan ranking terendah pendaftar">
                </div>
                <div class="form-group"
                <label for="inputRTPel">Ranking Terendah Peluang</label>
                <input type="number" class="form-control" id="inputRTPel" name="rankrendah_peluang" placeholder="Masukkan ranking terendah peluang">
            </div>
            <br>
            <input type="submit" class="btn btn-primary float-right" name="btnSubmit" value="Submit">
        </div>
</div>
</form>
</div>
</body>
</html>
