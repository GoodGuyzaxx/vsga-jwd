<?php
include("koneksi.php");

$id = $_GET['id'];

$sql = "DELETE from tb_pesanan WHERE id = '$id'";
$query = mysqli_query($db, $sql);

if ($query) {
    header("location:ListPemesanan.php");
}
