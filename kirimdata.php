<?php
include("koneksi.php");

if (isset($_POST['simpan'])) {
    $nama = $_POST['namaPemesan'];
    $nohp = $_POST['nomorTelp'];
    $durasi = $_POST['durasiPelaksanaan'];
    $peserta = $_POST['jmlPeserta'];
    $diskon = $_POST['diskon'];
    $paket = count($_POST['paket']);
    $harga = $_POST['hargaPaket'];
    $paketTaghian = $_POST['paketTagihan'];
}

$sql = "INSERT INTO tb_pesanan (nama_pemesan,no_telp,durasi,jlh_peserta,diskon,paket,harga,jumlah) 
    VALUE ('$nama','$nohp','$durasi','$peserta','$diskon','$paket','$harga','$paketTaghian')";
$query = mysqli_query($db, $sql);

if ($query) {
    echo "<script type='text/javascript'>alert('Berhasil Menambah Data'); 
    window.location.href='pemesanan.php' </script>";
} else {
    die(mysqli_error($db));
}
