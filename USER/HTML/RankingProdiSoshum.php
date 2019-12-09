<?php
include('../../koneksi.php');
session_start();
if(@$_SESSION['status'] != "usr") {
    echo "<script type='text/javascript'>alert('Login terlebih dahulu!');window.location.href='../../index.php';</script>";
}
?>
<html>
    <head>
        <title>List Prodi Soshum</title>
        <?php include "koneksi.php" ?>
        <?php include "Navbar.php" ?>
    </head>

    <body background="../IMAGE/bgPendidikan4.jpg">
    <div class="container">
        <br>
        <h2 style="text-align: center">List Program Studi Soshum</h2>
        <br>
        <table border="1">
            <tr style="text-align: center">
                <th>NO</th>
                <th>KODE</th>
                <th>PRODI - PTN</th>
                <th>PG UTBK</th>
                <th>DAYA TAMPUNG 2019</th>
                <th>PEMINAT 2018</th>
                <th>RATIO</th>
                <th>PREDIKSI PEMINAT 2019</th>
                <th>RANKING TERENDAH PENDAFTAR</th>
                <th>RANKING TERENDAH PELUANG</th>
            </tr>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'prediksiptn');
            $list = 'SELECT id_prodisoshum, kode_ptn, prodi_ptn, utbk, dayatampung_baru, peminat_lama, ratio, 
peminat_baru, rankrendah_pendaftar, rankrendah_peluang FROM prodisoshum';
            $query = mysqli_query($conn, $list);
            while ($row = mysqli_fetch_array($query)){
                echo '<tr style="text-align: center">
                                <td>'.$row['id_prodisoshum'].'</td>
                                <td>'.$row['kode_ptn'].'</td>
                                <td>'.$row['prodi_ptn'].'</td>
                                <td>'.$row['utbk'].'</td>
                                <td>'.$row['dayatampung_baru'].'</td>
                                <td>'.$row['peminat_lama'].'</td>
                                <td>'.$row['ratio'].'</td>
                                <td>'.$row['peminat_baru'].'</td>
                                <td>'.$row['rankrendah_pendaftar'].'</td>
                                <td>'.$row['rankrendah_peluang'].'</td>
                            </tr>';
            }
            mysqli_free_result($query);
            ?>
        </table>
    </div>

    </body>

</html>
