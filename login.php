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
                        <a class="nav-link" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pemesanan.php">Form Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeri.html">Galeri</a>
                    </li>
                </ul>
                <a class="btn btn-outline-light active" type="button" href="login.php">Login</a>
            </div>
        </div>
    </nav>

    <br>
    <div class="row justify-content-center">
        <div class="col-3">
            <div class="mb-3">
                <label for="nama" class="form-label">Masukkan Username</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama Pemesan" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="userPasswrod" class="form-label">Masukkan Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-3">
            <br>
            <button type="submit" class="btn btn-primary">LOGIN</button>
        </div>
    </div>
    </div>

    <br>
    <div class="bg-dark">
        <br>
        <p class="text-light text-center">Pelatihan Junior Web Developer <br> Jayapura, September 2024</p>
        <br>
    </div>

</body>

</html>