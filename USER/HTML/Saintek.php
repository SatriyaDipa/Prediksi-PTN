<?php
include('../../ADMIN/HTML/koneksi.php');
session_start();
if (@$_SESSION['status'] != "usr") {
    echo "<script type='text/javascript'>alert('Login terlebih dahulu!');window.location.href='../../index.php';</script>";
}
?>
<html>
<head>
    <title>Jalur Saintek</title>
    <?php include "Navbar.php" ?>
</head>

<body background="../IMAGE/bgPendidikan4.jpg" style="background-size: cover;">
<br>
<div class="text-center">
    <h2>Prediksi Prodi Saintek</h2>
</div>
<br>
<div class="card container" style="background-color: transparent; ">
    <br>
    <div class="container">
        <form method="post" action="input-saintek.php">
        <div class="form-group">
            <label for="prodi">Pilih Prodi</label>
            <select class="form-control form-control" name="prodi">
                <option value="INFORMATIKA INSTITUT TEKNOLOGI SEPULUH NOPEMBER">INFORMATIKA INSTITUT TEKNOLOGI SEPULUH NOPEMBER

                </option>
                <option value="KEDOKTERAN UNIVERSITAS GADJAH MADA">KEDOKTERAN UNIVERSITAS GADJAH MADA

                </option>
                <option value="TEKNIK LINGKUNGAN UNIVERSITAS INDONESIA">TEKNIK LINGKUNGAN UNIVERSITAS INDONESIA

                </option>
                <option value="TEKNIK SIPIL UNIVERSITAS BRAWIJAYA">TEKNIK SIPIL UNIVERSITAS BRAWIJAYA

                </option>
                <option value="ARSITEKTUR UNIVERSITAS BRAWIJAYA">ARSITEKTUR UNIVERSITAS BRAWIJAYA

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
                        <label for="rataSaintek">Rata-rata</label>
                        <input class="form-control" name="rataSaintek" disabled value="<?php echo @$_GET['rata']; ?>">
                    </div>

            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="inputMatSaintek">Matematika</label>
                    <input type="number" class="form-control" name="inputMatSaintek"
                           placeholder="Masukkan nilai matematika">
                </div>
                <div class="form-group">
                    <label for="inputFis">Fisika</label>
                    <input type="number" class="form-control" name="inputFis" placeholder="Masukkan nilai fisika">
                </div>
                <div class="form-group">
                    <label for="inputKim">Kimia</label>
                    <input type="number" class="form-control" name="inputKim" placeholder="Masukkan nilai kimia">
                </div>
                <div class="form-group">
                    <label for="inputBio">Biologi</label>
                    <input type="number" class="form-control" name="inputBio" placeholder="Masukkan nilai biologi">
                </div>
                <div class="form-group">
                    <label for="skorAkhirSaintek">Skor Akhir</label>
                    <input class="form-control" name="skorAkhirSaintek" disabled value="<?php echo @$_GET['sa']; ?>">
                </div>

                <input type="submit" name="btnGenerate" value="Generate" class="btn btn-warning">
                <input type="hidden" name="ssid" value="<?php echo $_SESSION['id']; ?>">
                <input type="hidden" name="rank1" value="<?php echo $_GET['rank']; ?>">
                <input type="submit" name="btnSubmit" value="Simpan" class="btn btn-primary">

            </div>

            <div class="col-md-4">

                <div class="form-group">
                    <label for="outRankSaintek">Ranking</label>
                    <textarea class="form-control" disabled name="outRankSaintek"
                              rows="1"><?php echo @$_GET['rank']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="ket">Status</label>
                    <input class="form-control" disabled name="ket" value="<?php echo @$_GET['status']; ?>">
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>
