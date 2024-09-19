<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wisata Indonesia</title>
    <link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="stylesheet.css" rel="stylesheet">

    <script>
        //Fungsi Untuk Memilih Paket Melalui Combo Box
        function pilihPaket(pkt) {
            var selectedpaket = "";
            var jumlahPaket = 0;
            var potongan = 0;
            var hargaPaket = 0;
            var durasi = document.getElementById("durasi").value; //nilai dari input text durasi
            var peserta = document.getElementById("peserta").value; //nilai dari input text peserta

            //hitung panjang array
            for (i = 0; i < pkt.paket.length; i++) {
                if (pkt.paket[i].checked) {
                    selectedpaket += pkt.paket[i].value + "";

                    //jumlah paket untuk menetapkan potongan, dibagi 3 karena berada dalam perulangan
                    jumlahPaket += pkt.paket.length / 3;

                    //logika penentuan diskon, jika memilih 2 paket diberikan diskon 5% dan jika 3 paket 10%
                    potongan = (jumlahPaket - 1) * 5;
                }
            }

            //menetapkan harga paket menggunakan seleksi kondisi
            if (pkt.paket[0].checked && pkt.paket[1].checked && pkt.paket[2].checked) {
                hargaPaket = 2000000;
            } else if (pkt.paket[0].checked && pkt.paket[1].checked) {
                hargaPaket = 1500000;
            } else if (pkt.paket[0].checked && pkt.paket[2].checked) {
                hargaPaket = 1500000;
            } else if (pkt.paket[1].checked && pkt.paket[2].checked) {
                hargaPaket = 1000000;
            } else if (pkt.paket[1].checked) {
                hargaPaket = 500000;
            } else if (pkt.paket[2].checked) {
                hargaPaket = 500000;
            } else if (pkt.paket[0].checked) {
                hargaPaket = 1000000;
            }

            //menghitung total biaya - diskon
            var total = (durasi * peserta * hargaPaket) - ((durasi * peserta * hargaPaket) * (potongan / 100));

            //tampilkan hasil pada form
            document.getElementById("pilihan").value = selectedpaket;
            document.getElementById("diskon").value = potongan;
            document.getElementById("hargaPaket").value = hargaPaket;
            document.getElementById("totalBiaya").value = total;
        }
    </script>
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
                <h4 class=" text-center">Form Pemesanan</h4>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control" id="namaPemesan" placeholder="Nama Pemesan" name="namaPemesan" required>
                    </div>
                    <div class="mb-3">
                        <label for="nohp" class="form-label">Nomor HP</label>
                        <input type="text" class="form-control" id="nomorTelp" placeholder="Nomor HP" name="nomorTelp" required>
                    </div>
                    <label for="durasi" class="form-label">Durasi Perjalanan</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="durasi" placeholder="0" name="durasi" oninput="pilihPaket(this.form)" required>
                        <span class="input-group-text" id="basic-addon2">Hari</span>
                    </div>
                    <label for="peserta" class="form-label">Jumlah Peserta</label> &nbsp;
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="peserta" name="peserta" oninput="pilihPaket(this.form)" required>
                        <span class="input-group-text" id="basic-addon2">Orang</span>
                    </div>

                    <label for="peserta" class="form-label">Paket Perjalanan</label><br>
                    <div class="form-check form-check-inline">
                        <input name="paket" class="form-check-input" type="checkbox" id="penginapan" onclick="pilihPaket(this.form)" value="P">
                        <label class="form-check-label" for="inlineCheckbox1">Penginapan</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input name="paket" class="form-check-input" type="checkbox" id="transportasi" onclick="pilihPaket(this.form)" value="T">
                        <label class="form-check-label" for="inlineCheckbox2">Transportasi</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input name="paket" class="form-check-input" type="checkbox" id="makan" onclick="pilihPaket(this.form)" value="M">
                        <label class="form-check-label" for="inlineCheckbox2">Makan</label>
                    </div>
                    <input type="text" class="form-control visually-hidden" id="pilihan" placeholder="" name="pilihan">
                    <br><br>
                    <label for="peserta" class="form-label">Diskon</label> &nbsp;
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="diskon" placeholder="0" name="diskon" readonly>
                        <span class="input-group-text" id="basic-addon2">%</span>
                    </div>
                    <label for="peserta" class="form-label">Harga Paket</label><br>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp</span>
                        <input type="text" class="form-control" name="hargaPaket" id="hargaPaket" readonly>
                        <span class="input-group-text">.00</span>
                    </div>
                    <label for="peserta" class="form-label">Jumlah Tagihan</label><br>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp</span>
                        <input type="text" class="form-control" name="totalBiaya" id="totalBiaya" readonly>
                        <span class="input-group-text">.00</span>
                    </div>
                    <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                    <a href="index.php" type="button" class="btn btn-danger">Batal</a>
                    <div class="col-7 mt-3">
                        <a href="ListPemesanan.php" type="button" class="btn btn-info">Lihat Pesanan</a>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>