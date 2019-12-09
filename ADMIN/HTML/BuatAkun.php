<?php
include('../../koneksi.php');
session_start();
if(@$_SESSION['status'] != "adm") {
    echo "<script type='text/javascript'>alert('Login terlebih dahulu!');window.location.href='../../index.php';</script>";
}
?>
<html>
    <head>
        <title></title>
        <?php include "koneksi.php" ?>
        <?php include "NavbarAdmin.php" ?>
    </head>
    <body background="../IMAGE/bgPendidikan4.jpg" style="background-size: cover;">
      <br>
      <div class="text-center">
        <h1>Buat Akun</h1>
      </div>
      <br>
      <div class="card container" style="background-color: transparent;">
        <br>
        <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <form class="" action="input-aksi.php" method="post">
                <div class="form-group">
                    <label for="inputUser">Username</label>
                    <input type="text" class="form-control" id="inputUser" name="username" placeholder="Masukkan username">
                </div>
                <div class="form-group">
                    <label for="inputPass">Password</label>
                    <input type="password" class="form-control" id="inputPass" name="password" placeholder="Masukkan password">
                </div>
                <div class="form-group">
                    <label for="user_type">User Type</label>
                    <input type="password" class="form-control" id="user_type" name="user_type" placeholder="admin / user">
                </div>
                <input type="submit" class="btn btn-primary float-right" name="btnSubmit" value="Submit">
              </form>
            </div>
            <div class="col-md-4"></div>
          </div>
        </div>
        <br>
      </div>
      <br>
    </body>
</html>
