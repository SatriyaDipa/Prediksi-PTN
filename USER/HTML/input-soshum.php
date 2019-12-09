<?php
include('../../ADMIN/HTML/koneksi.php');
if (isset($_POST['btnGenerate'])) {
    $inputKPU = $_POST['inputKPU'];
    $inputPK = $_POST['inputPK'];
    $inputPPU = $_POST['inputPPU'];
    $inputKMDM = $_POST['inputKMDM'];

    $inputMatSoshum = $_POST['inputMatSoshum'];
    $inputGeo = $_POST['inputGeo'];
    $inputSej = $_POST['inputSej'];
    $inputSos = $_POST['inputSos'];
    $inputEko = $_POST['inputEko'];

    $rataRata = ($inputKPU + $inputPK + $inputPPU + $inputKMDM) / 4;
    $rataRataSoshum = ($inputMatSoshum + $inputGeo + $inputSej + $inputSos + $inputEko) / 5;
    $skorAkhir = (0.6*$rataRata) + (0.4*$rataRataSoshum);

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
        $frek = 7717;
    } elseif ($skorAkhir >= 301 && @$skorAkhir <= 400) {
        $frek = 70988;
    } elseif ($skorAkhir >= 401 && @$skorAkhir <= 500) {
        $frek = 214616;
    } elseif ($skorAkhir > 501 && @$skorAkhir <= 600) {
        $frek = 181215;
    } elseif ($skorAkhir > 601 && @$skorAkhir <= 700) {
        $frek = 56161;
    } elseif ($skorAkhir > 701 && @$skorAkhir <= 800) {
        $frek = 9836;
    } elseif ($skorAkhir >= 801 && $skorAkhir <=900 ) {
        $frek = 1178;
    }

    $jmlfrek = 0;
    if ($skorAkhir <= 300) {
        $jmlfrek = 0;
    } elseif ($skorAkhir <= 400) {
        $jmlfrek = 7717;
    } elseif ($skorAkhir <= 500) {
        $jmlfrek = 70988 + 7717;
    } elseif ($skorAkhir <= 600) {
        $jmlfrek = 214616 + 70988 + 7717;
    } elseif ($skorAkhir <= 700) {
        $jmlfrek = 181215 + 214616 + 70988 + 7717;
    } elseif ($skorAkhir <= 800) {
        $jmlfrek = 56161 + 181215 + 214616 + 70988 + 7717;
    } elseif ($skorAkhir <=900 ) {
        $jmlfrek = 9836 + 56161 + 181215 + 214616 + 70988 + 7717;
    }

    $outRankSoshum = (541911 - (($skorAkhir-$TB)*$frek/100+$jmlfrek));
    header("Location:Soshum.php?type=Generate&rata=".$rataRata."&so=".$skorAkhir."&rank=".$outRankSoshum."");
}

if (isset($_POST['btnSubmit'])) {
    $prodi = $_POST['prodi'];
    $ssid = $_POST['ssid'];
    $outRankSaintek1 = $_POST['rank1'];

    $sql = "SELECT * FROM multi_login WHERE id = '" . $ssid . "'";
    $result = mysqli_query($db, $sql);
    $data = mysqli_fetch_assoc($result);
    $nama = $data['username'];

    $prodi1 = 82779;
    $prodi2 = 15426;
    $prodi3 = 27220;
    $prodi4 = 183;
    $prodi5 = 7624;
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

    header("Location:Soshum.php?type=Submit&status=".$status."");
}
?>