<?php
include("koneksi.php");

//Cek apakah ada pengiriman data dari Formulir
if (isset($_POST['simpan'])) {
    //Ambil data dari formulir
    $nama = $_POST['namaPemesan'];
    $nohp = $_POST['nomorTelp'];
    $durasi = $_POST['durasi'];
    $peserta = $_POST['peserta'];
    $paket = $_POST['pilihan'];
    $diskon = $_POST['diskon'];
    $harga_paket = $_POST['hargaPaket'];
    $total_biaya = $_POST['totalBiaya'];

    $sql = "INSERT INTO tb_pesanan 
    (nama_pemesan, no_telp, durasi, jlh_peserta, diskon, paket, harga, jumlah) 
    VALUE 
    ('$nama', '$nohp', '$durasi', '$peserta', '$diskon', '$paket', '$harga_paket', '$total_biaya')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header("location:pemesanan.php");
        echo "Data Berhasil disimpan";
    } else {
        echo "Data Gagal Disimpan";
    }
} else if (isset($_POST['edit'])) {
    //Ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $durasi = $_POST['durasi'];
    $peserta = $_POST['peserta'];
    $diskon = $_POST['diskon'];
    $paket = $_POST['pilihan'];
    $harga_paket = $_POST['harga_paket'];
    $total_biaya = $_POST['total_biaya'];

    $sql = "UPDATE pesanan SET nama_pemesan='$nama', no_telp='$nohp', durasi='$durasi', jlh_peserta='$peserta', diskon='$diskon', paket='$paket', harga='$harga_paket', jumlah='$total_biaya' WHERE id=$id";
    $query = mysqli_query($connect, $sql);

    if ($query) {
        echo "Data Berhasil diubah";
        header("location:ListPemesanan.php");
    } else {
        echo "Data Gagal diubah";
    }
} else {
    die("Akses Dilarang...");
}
