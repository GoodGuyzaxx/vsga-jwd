<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wisata Indonesia</title>
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="stylesheet.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- Navbar content -->
        <div class="container">
            <a class="navbar-brand" href="#">Wisata Indonesia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Form Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeri.html">Galeri</a>
                    </li>
                </ul>
                <button class="btn btn-outline-light" type="button">Login</button>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pemesan</th>
                            <th scope="col">No Telp</th>
                            <th scope="col">Durasi</th>
                            <th scope="col">Peserta</th>
                            <th scope="col">Total Biaya</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $data_pesanan = mysqli_query($db, "SELECT * from tb_pesanan");
                        $no = 1;
                        foreach ($data_pesanan as $pesanan) { ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $pesanan['nama_pemesan']; ?></td>
                                <td><?php echo $pesanan['no_telp']; ?></td>
                                <td><?php echo $pesanan['durasi']; ?></td>
                                <td><?php echo $pesanan['jlh_peserta']; ?></td>
                                <td><?php echo $pesanan['jumlah']; ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $pesanan['id']; ?>" class="btn btn-warning">EDIT</a>
                                    <a href="delete.php?id=<?php echo $pesanan['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')">HAPUS</a>
                                </td>
                            </tr>

                        <?php $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</body>

</html>