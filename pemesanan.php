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

    <form action="kirimdata.php" method="POST">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h1 class="d-flex justify-content-center">Form Pemesan</h1>
                    <div class="mb-3">
                        <label class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control" id="namaPemesan" placeholder="Masukan Nama" name="namaPemesan">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nomor Telepon/HP</label>
                        <input type="text" class="form-control" id="nomorTelp" placeholder="Masukan Nama" name="nomorTelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Durasi Pelaksanaan Hari</label>
                        <div class="col-sm-3 input-group">
                            <input class="form-control col-sm-4" id="durasiPelaksanaan" placeholder="Hari" name="durasiPelaksanaan">
                            <span class="input-group-text">hari</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jumlah Peserta</label>
                        <div class="col-sm-3 input-group">
                            <input type="text" class="form-control" id="jmlPeserta" placeholder="1" name="jmlPeserta">
                            <span class="input-group-text">Orang</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Diskon</label>
                        <div class="col-sm-4 input-group">
                            <input type="text" class="form-control" id="diskon" placeholder="%" name="diskon">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pelayanaan Paket Perjalanan</label>
                        <div class="mb-3">
                            <div class="col-md-1">
                                <div class="form-check">
                                    <input class="form-check-input" name="paket[]" type="checkbox" value="" id="cbPenginapan">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Penginapan
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-check">
                                    <input class="form-check-input" name="paket[]" type="checkbox" value="" id="cbTransport">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Transport
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-check">
                                    <input class="form-check-input" name="paket[]" type="checkbox" value="" id="cbMakanan">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Makanan
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 col-auto">
                            <label class="form-label">Harga Paket Perjalanan</label>
                            <div class=col-sm-3>
                                <input type="text" class="form-control" id="hargaPaket" name="hargaPaket">
                            </div>
                        </div>
                        <div class="mb-3 col-auto">
                            <label class="form-label">Paket Tagihan</label>
                            <div class=col-sm-3>
                                <input type="text" class="form-control" id="paketTagihan" name="paketTagihan">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-sm-7">
                                <button type="submit" name="simpan" id="simpan" class="btn btn-success">Simpan</button>
                                <button type="submit" class="btn btn-danger">Batal</button>
                                <a class="btn btn-info" href="ListPemesanan.php" role="button">Lihat Pemesanan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>