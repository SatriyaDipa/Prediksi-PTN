<?php
    ini_set("display_errors", 0);
    session_start();
    include "koneksi.php";
    if($_SESSION['user_type']=="admin"){
        include ('./ADMIN/HTML/HOME.php');
    }
    else{
        include ('./USER/HTML/HOME.php');
    }
?>