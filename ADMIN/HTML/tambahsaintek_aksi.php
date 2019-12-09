<?php
include 'koneksi.php';
$kode = $_POST['kode'];
$prodi = $_POST['prodi'];
$utbk = $_POST['utbk'];
$tampung_baru = $_POST['tampung_baru'];
$minat_lama = $_POST['minat_lama'];
$ratio = $_POST['ratio'];
$minat_baru = $_POST['minat_baru'];
$rankrendah_pendaftar = $_POST['rankrendah_pendaftar'];
$rankrendah_peluang = $_POST['rankrendah_peluang'];

$sql = "INSERT INTO prodisaintek (kode_ptn, prodi_ptn, utbk, dayatampung_baru, peminat_lama, ratio, peminat_baru, rankrendah_pendaftar, rankrendah_peluang) 
        VALUES ('$kode','$prodi', '$utbk', '$tampung_baru', '$minat_lama', '$ratio', '$minat_baru', '$rankrendah_pendaftar', '$rankrendah_peluang')";

mysqli_query($db, $sql);

header("location:TambahProdiSaintek.php?pesan=input");
?>