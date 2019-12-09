<?php
include('koneksi.php');
session_start();
if(@$_SESSION['status'] == "usr") {
    echo "<script type='text/javascript'>window.location.href='USER/HTML/HOME.php';</script>";
} else if (@$_SESSION['status'] == "adm") {
    echo "<script type='text/javascript'>window.location.href='ADMIN/HTML/HOME.php';</script>";
}
?>
<html>
    <head>
        <title>Prediksi PTN</title>
        <?php include "koneksi.php"; 
              require "functions.php";
              
              if(isset($_POST['submit'])){
                  login($_POST);
              }
        ?>       
        <link rel="stylesheet" type="text/css" href="HOME.css">
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Sign In</h3>
                    </div>
                    <div class="card-body">
                        <form action="" class="inner-login" Method="POST" enctype="multipart/form-data">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="username" name="username">

                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="password" name="password">
                            </div>
                            <div class="form-group">
                                <input type="submit" Name="submit" value="Login" class="btn login_btn float-right">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center">
                            <a href="#">Lupa password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Lupa Password?</strong> Silahkan Hubungi Guru BK.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </body>
