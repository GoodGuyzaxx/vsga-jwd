Baru! Pintasan keyboard … Pintasan keyboard Drive telah diperbarui untuk memberi Anda navigasi huruf pertama
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Latihan JWD</title>
    <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.css" />

    <script>
        function pilihPaket(pkt) {
            var selectedpaket = 0;
            //hitung panjang array
            for (i = 0; i < pkt.paket.length; i++) {
                if (pkt.paket[i].checked) {
                    selectedpaket += parseInt(pkt.paket[i].value);
                }
            }
            //tampilkan hasil pada array
            document.getElementById("pilihan").value = selectedpaket;
        }
    </script>


</head>

<body>
    <div class="container">
        <img src="img/banner.jpg" class="img-fluid" />
    </div>

    <div class="container">
        <nav class="navbar navbar-dark bg-dark">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="pemesanan.php">Pemesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="galery.html">Galery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </nav>
    </div>
    <br>
    <form action="kirim_data.php" method="POST">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama Pemesan" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="nohp" class="form-label">Nomor HP</label>
                        <input type="text" class="form-control" id="nohp" placeholder="Nama Pemesan" name="nohp">
                    </div>
                    <label for="durasi" class="form-label">Durasi Perjalanan</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="durasi" placeholder="0" name="durasi">
                        <span class="input-group-text" id="basic-addon2">Hari</span>
                    </div>
                    <label for="peserta" class="form-label">Jumlah Peserta</label> &nbsp;
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="peserta" name="peserta">
                        <span class="input-group-text" id="basic-addon2">Orang</span>
                    </div>
                    <label for="peserta" class="form-label">Diskon</label> &nbsp;
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="peserta" placeholder="0" name="diskon">
                        <span class="input-group-text" id="basic-addon2">%</span>
                    </div>
                    <label for="peserta" class="form-label">Paket Perjalanan</label><br>
                    <div class="form-check form-check-inline">
                        <input name="paket" class="form-check-input" type="checkbox" id="penginapan" onclick="pilihPaket(this.form)" value=1000000>
                        <label class="form-check-label" for="inlineCheckbox1">Penginapan</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input name="paket" class="form-check-input" type="checkbox" id="transportasi" onclick="pilihPaket(this.form)" value=500000>
                        <label class="form-check-label" for="inlineCheckbox2">Transportasi</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input name="paket" class="form-check-input" type="checkbox" id="makan" onclick="pilihPaket(this.form)" value=500000>
                        <label class="form-check-label" for="inlineCheckbox2">Makan</label>
                    </div>
                    <div class="mb-3">
                        <label for="nohp" class="form-label">Pilihan Anda</label>
                        <input type="text" class="form-control" id="pilihan" placeholder="" name="pilihan">
                    </div>
                    <br><br>
                    <label for="peserta" class="form-label">Harga Paket</label><br>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp</span>
                        <input type="text" class="form-control" name="harga_paket">
                        <span class="input-group-text">.00</span>
                    </div>
                    <label for="peserta" class="form-label">Jumlah Tagihan</label><br>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp</span>
                        <input type="text" class="form-control" name="total_biaya">
                        <span class="input-group-text">.00</span>
                    </div>
                    <button type="button" class="btn btn-primary">Lihat Pesanan</button>
                    <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                    <button type="button" class="btn btn-danger">Batal</button>
                </div>
            </div>
        </div>
    </form>

    <script>
        function
    </script>

    <script src="bs/js/bootstrap.bundle.min.js"></script>
</body>

</html>