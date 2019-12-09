<?php
    include 'koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];
    $sql = "INSERT INTO multi_login (username, user_type, password) VALUES ('$username','$user_type',md5('$password'))";

    mysqli_query($db, $sql);

    header("location:BuatAkun.php?pesan=input");
?>