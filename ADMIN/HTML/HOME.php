<?php
include('../../koneksi.php');
session_start();
if(@$_SESSION['status'] != "adm") {
    echo "<script type='text/javascript'>alert('Login terlebih dahulu!');window.location.href='../../index.php';</script>";
}
?>
<html>
    <head>
        <title>Prediksi PTN</title>
        <?php include "koneksi.php";
              include "NavbarAdmin.php";                            
        ?>
        
        <link rel="stylesheet" type="text/css" href="HOME.css">
    </head>

    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <h1 style="color: FFFFFF">WELCOME ADMIN!</h1>
            </div>
        </div>

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Lupa Password?</strong> Silahkan Hubungi Guru BK.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </body>

</html>
