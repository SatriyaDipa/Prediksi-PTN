<?php
session_start();
session_destroy();
echo "<script type='text/javascript'>alert('Logout berhasil!');window.location.href='../../index.php';</script>";
?>
