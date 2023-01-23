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
    @extends('navbar.navbaradmin')
    <!-- Navbar End -->

    <!-- Context -->
    @section('container')
    <div class="container">
        <div class="judul">
            <h4 class="text-center mt-3">Surat Pengantar Domisili</h4>
        </div>
        <div class="konten">
            <form action="" method="POST" autocomplete="on" name="form">
                <div class="row mt-4">
                     <!-- Left -->
                    <div class="col-6">
                        <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Default" >
                        </div>
                        <br>
                        <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Default" >
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="pengantarKel">Surat Pengantar Kelurahan</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="button-addon2">
                                <button class="btn btn-secondary" type="button" id="button-addon2">Unduh</button>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="KTP">Kartu Tanda Penduduk</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="button-addon2">
                                <button class="btn btn-secondary" type="button" id="button-addon2">Unduh</button>
                            </div>
                        </div>
                        <br>

                    </div>
                    <!-- End Left -->

                    <!-- Right -->
                    <div class="col-6">
                        <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="Default" >
                        </div>
                        <br>
                        <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="kelurahan">Kelurahan</label>
                            <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Default" >
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="kk">Kartu Keluarga</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="button-addon2">
                                <button class="btn btn-secondary" type="button" id="button-addon2">Unduh</button>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="lain">Berkas Lain</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="button-addon2">
                                <button class="btn btn-secondary" type="button" id="button-addon2">Unduh</button>
                            </div>
                        </div>
                        <br>
                    </div>

                </div>

                <div class="col-auto d-grid gap-2 d-flex justify-content-end">
                        <button type="submit" name="submit" value="submit" class="btn btn-outline-success">Terima</button>
                        <button type="submit" name="submit" value="submit" class="btn btn-outline-danger">Tolak</button>
                        <button type="submit" name="submit" value="submit" class="btn btn-outline-primary">Kembali</button>
                </div>

                <!-- End Right -->
            </form>
        </div>

    </div>
    @endsection
    <!-- Context End -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
