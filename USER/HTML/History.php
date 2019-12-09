<?php
include('../../ADMIN/HTML/koneksi.php');
session_start();
if (@$_SESSION['status'] != "usr") {
    echo "<script type='text/javascript'>alert('Login terlebih dahulu!');window.location.href='../../index.php';</script>";
}
?>
<html>

<head>
    <title>History Log</title>
    <?php include "Navbar.php" ?>
</head>

<body background="../IMAGE/bg1.png" style="background-size: cover;">
<br>
<div class="text-center">
    <h1>Riwayat Konsultasi</h1>
</div>
<br>
<?php
$sql = "SELECT * FROM history";
$result = mysqli_query($db, $sql);
$no = 1;
?>
<div class="container">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th class="text-center" scope="col">Prodi Dipilih</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($data = mysqli_fetch_assoc($result)) {


            ?>
            <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['prodi']; ?></td>
                <td><?php echo $data['status']; ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>

</body>

</html>
