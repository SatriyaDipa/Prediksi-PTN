<?php
    session_start();
    include "koneksi.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $q = "SELECT * FROM multi_login WHERE username='$username' && password = '$password'";
    $result = mysqli_query($mysqli,$q);
    $data = mysqli_fetch_array($result);
    $cek = mysqli_num_rows($result);

    if($cek == 1){
        $_SESSION['username'] = $data['username'];
        $_SESSION['id_user'] = $data['id'];
        $_SESSION['user_type'] = $data['user_type'];
        include "menu.php";
    }
    else{
        echo "<script>alert('username/password salah');
        document.location.href='login.php';
        </script>";
    }

    
?>