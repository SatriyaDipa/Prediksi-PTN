<?php
include('../../ADMIN/HTML/koneksi.php');
$inputKPU = $_POST['inputKPU'];
$inputPK = $_POST['inputPK'];
$inputPPU = $_POST['inputPPU'];
$inputKMDM = $_POST['inputKMDM'];

$inputMatSaintek = $_POST['inputMatSaintek'];
$inputFis = $_POST['inputFis'];
$inputKim = $_POST['inputKim'];
$inputBio = $_POST['inputBio'];


if (isset($_POST['btnGenerate'])) {
    $rataRata = ($inputKPU + $inputPK + $inputPPU + $inputKMDM) / 4;
    $rataRataSaintek = ($inputMatSaintek + $inputFis + $inputKim + $inputBio) / 4;
    $skorAkhir = (0.6 * $rataRata) + (0.4 * $rataRataSaintek);

    $TB = 0;
    if ($skorAkhir > 300 && @$skorAkhir <= 400) {
        $TB = 300.5;
    } elseif ($skorAkhir > 400 && @$skorAkhir <= 500) {
        $TB = 400.5;
    } elseif ($skorAkhir > 500 && @$skorAkhir <= 600) {
        $TB = 500.5;
    } elseif ($skorAkhir > 600 && @$skorAkhir <= 700) {
        $TB = 600.5;
    } elseif ($skorAkhir > 700 && @$skorAkhir <= 800) {
        $TB = 700.5;
    } elseif ($skorAkhir > 800 && @$skorAkhir <= 900) {
        $TB = 800.5;
    } elseif ($skorAkhir > 900) {
        $TB = 900.5;
    }

    $frek = 0;
    if ($skorAkhir >= 201 && @$skorAkhir <= 300) {
        $frek = 4992;
    } elseif ($skorAkhir >= 301 && @$skorAkhir <= 400) {
        $frek = 69248;
    } elseif ($skorAkhir >= 401 && @$skorAkhir <= 500) {
        $frek = 229535;
    } elseif ($skorAkhir > 501 && @$skorAkhir <= 600) {
        $frek = 210328;
    } elseif ($skorAkhir > 601 && @$skorAkhir <= 700) {
        $frek = 75274;
    } elseif ($skorAkhir > 701 && @$skorAkhir <= 800) {
        $frek = 15508;
    } elseif ($skorAkhir >= 801 && $skorAkhir <= 900) {
        $frek = 2002;
    }

    $jmlfrek = 0;
    if ($skorAkhir <= 300) {
        $jmlfrek = 0;
    } elseif ($skorAkhir <= 400) {
        $jmlfrek = 4992;
    } elseif ($skorAkhir <= 500) {
        $jmlfrek = 69248 + 4992;
    } elseif ($skorAkhir <= 600) {
        $jmlfrek = 229535 + 69248 + 4992;
    } elseif ($skorAkhir <= 700) {
        $jmlfrek = 210328 + 229535 + 69248 + 4992;
    } elseif ($skorAkhir <= 800) {
        $jmlfrek = 75274 + 210328 + 229535 + 69248 + 4992;
    } elseif ($skorAkhir <= 900) {
        $jmlfrek = 15508 + 75274 + 210328 + 229535 + 69248 + 4992;
    }

    $outRankSaintek = (607007 - (($skorAkhir - $TB) * $frek / 100 + $jmlfrek));
    header("Location:Saintek.php?type=Generate&rata=" . $rataRata . "&sa=" . $skorAkhir . "&rank=" . $outRankSaintek . "");
}

if (isset($_POST['btnSubmit'])) {
    $prodi = $_POST['prodi'];
    $ssid = $_POST['ssid'];
    $outRankSaintek1 = $_POST['rank1'];

    $sql = "SELECT * FROM multi_login WHERE id = '" . $ssid . "'";
    $result = mysqli_query($db, $sql);
    $data = mysqli_fetch_assoc($result);
    $nama = $data['username'];

    $prodi1 = 1273;
    $prodi2 = 5458;
    $prodi3 = 13522;
    $prodi4 = 20266;
    $prodi5 = 20266;
    $status = "";


    if ($outRankSaintek1 <= $prodi1) {
        $status = "Memungkinkan diterima";
    } else if ($outRankSaintek1 <= $prodi2) {
        $status = "Memungkinkan diterima";
    } else if ($outRankSaintek1 <= $prodi3) {
        $status = "Memungkinkan diterima";
    } else if ($outRankSaintek1 <= $prodi4) {
        $status = "Memungkinkan diterima";
    } else if ($outRankSaintek1 <= $prodi5) {
        $status = "Memungkinkan diterima";
    } else {
        $status = "Coba prodi lain";
    }

    $sql1 = "INSERT INTO history (nama, prodi, status) VALUES ('$nama', '$prodi', '$status')";
    $result1 = mysqli_query($db, $sql1);

    header("Location:Saintek.php?type=Submit&status=".$status."");
}
?>