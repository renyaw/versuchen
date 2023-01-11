<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Masuk</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        </head>
    <body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg " style="background-color:#87CEFA;">
        <div class="container">
            <a class="navbar-brand" href="#" style="">
                <img src="img/Logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">Kota Salatiga
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Context -->
    <div class="container">
        <div class="judul">
            <h4 class="text-center mt-3">Perbarui Data Diri</h4>
        </div>
        <div class="konten">
            <form action="" method="POST" autocomplete="on" name="form">
                <div class="row mt-4">
                     <!-- Left -->
                    <div class="col-6">
                        <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Default tp bisa diganti" >
                        </div>
                        <br>
                        <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="ibu">Nama Ibu</label>
                            <input type="text" class="form-control" id="ibu" name="ibu" placeholder="Default tp bisa diganti" >
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <select class="form-select" name="kecamatan" id="kecamatan">
                                <option value="0">-- Pilih Kecamatan --</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="alamat">Alamat Lengkap</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Default tp bisa diganti" >
                        </div>
                        <br>
                    </div>
                    <!-- End Left -->

                    <!-- Right -->
                    <div class="col-6">
                        <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="Default tp bisa diganti" >
                        </div>
                        <br>
                        <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="tgl">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl" name="tgl"  >
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="kelurahan">Kelurahan</label>
                            <select class="form-select" name="kelurahan" id="kelurahan">
                                <option value="0">-- Pilih Kelurahan --</option>
                            </select>
                        </div>
                        <br>

                        <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="notelp">Nomor Telepon (WA)</label>
                            <input type="text" class="form-control" id="nama" name="notelp" placeholder="Default tp bisa diganti" >
                        </div>
                        <br>
                    </div>

                </div>
                <div class="col-auto d-flex justify-content-end">
                        <button type="submit" name="submit" value="submit" class="btn btn-outline-success">Simpan</button>
                        <button type="submit" name="submit" value="submit" class="btn btn-outline-success">Kembali</button>
                    </div>
                <!-- End Right -->
            </form>
        </div>

    </div>

    <!-- Context End -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
