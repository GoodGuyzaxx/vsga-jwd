<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Latihan JWD</title>
    <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.css" />

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
            document.getElementById("harga_paket").value = hargaPaket;
            document.getElementById("total_biaya").value = total;
        }
    </script>
</head>

<body>
    <br>
    <?php
    include("koneksi.php");
    $id = $_GET['id']; //Mengambil id yang dikirim dari halaman tabel pesanan

    $data = mysqli_query($db, "SELECT * from tb_pesanan WHERE id='$id' ");
    $row = mysqli_fetch_assoc($data);
    //var_dump($row);

    ?>
    <form action="kirimdata.php" method="PATCH">
        <div class="container">
            <div class="row justify-content-center">
                <h4 class=" text-center">Silahkan Isikan Data Pemesanan Anda</h4>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama Pemesan" name="namaPemesan" value="<?php echo $row['nama_pemesan']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nohp" class="form-label">Nomor HP</label>
                        <input type="text" class="form-control" id="nohp" placeholder="Nomor HP" name="nomorTelp" value="<?php echo $row['no_telp']; ?>">
                    </div>
                    <label for="durasi" class="form-label">Durasi Perjalanan</label>
                    <div class="input-group mb-3">
                        <input class="form-control" id="durasi" placeholder="0" name="durasiPelaksanaan" oninput="pilihPaket(this.form)" value="<?php echo $row['durasi']; ?>" required>
                        <span class="input-group-text" id="basic-addon2">Hari</span>
                    </div>
                    <label for="peserta" class="form-label">Jumlah Peserta</label> &nbsp;
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="peserta" name="jmlPeserta" oninput="pilihPaket(this.form)" value="<?php echo $row['jlh_peserta']; ?>" required>
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
                        <input type="text" class="form-control" id="diskon" placeholder="0" name="diskon" disabled>
                        <span class="input-group-text" id="basic-addon2">%</span>
                    </div>
                    <label for="peserta" class="form-label">Harga Paket</label><br>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp</span>
                        <input type="text" class="form-control" name="hargaPaket" id="harga_paket" disabled>
                        <span class="input-group-text">.00</span>
                    </div>
                    <label for="peserta" class="form-label">Jumlah Tagihan</label><br>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp</span>
                        <input type="text" class="form-control" name="paketTagihan" id="total_biaya" disabled>
                        <span class="input-group-text">.00</span>
                    </div>
                    <button type="submit" class="btn btn-success" name="edit">EDIT</button>
                    <a href="ListPemesanan.php"><button type="button" class="btn btn-danger">Batal</button></a>
                </div>
            </div>
        </div>
    </form>

    <br>
    <div class="container bg-dark">
        <br>
        <p class="text-light text-center">Pelatihan Junior Web Developer <br> Jayapura, September 2024</p>
        <br>
    </div>
</body>

</html>