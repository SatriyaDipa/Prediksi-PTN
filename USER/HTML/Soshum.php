<?php
include('../../ADMIN/HTML/koneksi.php');
session_start();
if (@$_SESSION['status'] != "usr") {
    echo "<script type='text/javascript'>alert('Login terlebih dahulu!');window.location.href='../../index.php';</script>";
}
?>
<html>

<head>
    <title>Jalur Soshum</title>
    <?php include "Navbar.php" ?>
</head>

<body background="../IMAGE/bgPendidikan4.jpg" style="background-size: cover;">

<br>
<div class="text-center">
    <h2>Prediksi Prodi Soshum</h2>
</div>
<br>

<div class="card container" style="background-color: transparent;">
    <br>
    <div class="container">
        <form method="post" action="input-soshum.php">
        <div class="form-group">
            <label for="prodi">Pilih Prodi</label>
            <select class="form-control form-control" name="prodi">
                <option value="AKUNTANSI UNIVERSITAS NEGERI MALANG">AKUNTANSI UNIVERSITAS NEGERI MALANG
                </option>
                <option value="SASTRA JEPANG UNIVERSITAS INDONESIA">SASTRA JEPANG UNIVERSITAS INDONESIA
                </option>
                <option value="MANAJEMEN UNIVERSITAS PADJAJARAN">MANAJEMEN UNIVERSITAS PADJAJARAN
                </option>
                <option value="AKUNTANSI UNIVERSITAS INDONESIA">AKUNTANSI UNIVERSITAS INDONESIA
                </option>
                <option value="AKUNTANSI UNIVERSITAS BRAWIJAYA">AKUNTANSI UNIVERSITAS BRAWIJAYA
                </option>
            </select>
        </div>
    </div>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-4">

                    <div class="form-group">
                        <label for="inputKPU">KPU</label>
                        <input type="number" class="form-control" name="inputKPU" placeholder="Masukkan nilai KPU">
                    </div>
                    <div class="form-group">
                        <label for="inputPK">PK</label>
                        <input type="number" class="form-control" name="inputPK" placeholder="Masukkan nilai PK">
                    </div>
                    <div class="form-group">
                        <label for="inputPPU">PPU</label>
                        <input type="number" class="form-control" name="inputPPU" placeholder="Masukkan nilai PPU">
                    </div>
                    <div class="form-group">
                        <label for="inputKMDM">KMDM</label>
                        <input type="number" class="form-control" name="inputKMDM" placeholder="Masukkan nilai KMDM">
                    </div>
                    <div class="form-group">
                        <label for="rataSoshum">Rata-rata</label>
                        <input class="form-control" disabled name="rataSoshum" value="<?php echo @$_GET['rata']; ?>">
                    </div>

            </div>
            <div class="col-md-4">

                <div class="form-group">
                    <label for="inputMatSoshum">Matematika</label>
                    <input type="number" class="form-control" name="inputMatSoshum"
                           placeholder="Masukkan nilai matematika">
                </div>
                <div class="form-group">
                    <label for="inputGeo">Geografi</label>
                    <input type="number" class="form-control" name="inputGeo" placeholder="Masukkan nilai geografi">
                </div>
                <div class="form-group">
                    <label for="inputSej">Sejarah</label>
                    <input type="number" class="form-control" name="inputSej" placeholder="Masukkan nilai Sejarah">
                </div>
                <div class="form-group">
                    <label for="inputSos">Sosiologi</label>
                    <input type="number" class="form-control" name="inputSos" placeholder="Masukkan nilai sosiologi">
                </div>
                <div class="form-group">
                    <label for="inputEko">Ekonomi</label>
                    <input type="number" class="form-control" name="inputEko" placeholder="Masukkan nilai ekonomi">
                </div>
                <div class="form-group">
                    <label for="skorAkhirSoshum">Skor Akhir</label>
                    <input class="form-control" disabled name="skorAkhirSoshum" value="<?php echo @$_GET['so']; ?>">
                </div>
                <input type="submit" name="btnGenerate" value="Generate" class="btn btn-warning">
                <input type="hidden" name="ssid" value="<?php echo $_SESSION['id']; ?>">
                <input type="hidden" name="rank1" value="<?php echo $_GET['rank']; ?>">
                <input type="submit" name="btnSubmit" value="Simpan" class="btn btn-primary">

            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="outRankSoshum">Ranking</label>
                    <textarea class="form-control" disabled name="outRankSoshum"
                              rows="1"><?php echo @$_GET['rank']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="ket">Status</label>
                    <input class="form-control" name="ket" disabled value="<?php echo @$_GET['status']; ?>">
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>
