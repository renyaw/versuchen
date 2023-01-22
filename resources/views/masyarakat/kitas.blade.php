<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KITAS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        </head>
    <body>
    <!-- Navbar -->
    @extends('navbar.navbaruser')
    <!-- Navbar End -->

    <!-- Context -->
    @section('container')
    <div class="container">
        <div class="judul">
            <h4 class="text-center mt-3">Surat Permohonan Kartu Izin Tinggal Terbatas/Sementara (KITAS)</h4>
        </div>
        <div class="konten">
            <form action="" method="POST" autocomplete="on" name="form">
            <!-- Sebelum Text -->
            <div class="row mt-4">
                    <div class="col-6">
                    <div class="form-group">
                            <!-- Default -->
                            <label for="nama">Nama Penjamin (WNI)</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Default" >
                        </div>
                        <br>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                            <!-- Default diambil dari daftar -->
                            <label for="nik">NIK Penjamin (WNI)</label>
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="Default" >
                        </div>
                        <br>
                    </div>
                </div>
                <!-- Text -->
                <h5>Permohonan KITAS untuk :</h5>
                <!-- Text Selesai -->
                <!-- Setelah text -->
                <div class="row mt-4">
                     <!-- Left -->
                    <div class="col-6">
                    <div class="form-group">
                            <!-- Default -->
                            <label for="nama">Nama (WNA)</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Isi Nama" >
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="pengantarKel">Surat Pengantar Kelurahan <a href="">Unduh</a></label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="inputGroupFile02" name="pengantarKel" placeholder="Input">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="paspor">Paspor</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="inputGroupFile02" name="paspor" placeholder="Input">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="foto">Foto Berwarna (3x4)</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="inputGroupFile02" name="foto" placeholder="Input">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="kesbangpol">Surat Rekomendasi dari Kesbangpol</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="inputGroupFile02" name="kesbangpol" placeholder="Input">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                        </div>
                        <br>
                    </div>
                    <!-- End Left -->

                    <!-- Right -->
                    <div class="col-6">

                        <div class="form-group">
                            <label for="kepolisian">Surat Tanda Lapor dari Kepolisian</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="inputGroupFile02" name="kepolisian">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="formwna">Form WNA</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="inputGroupFile02" name="formwna">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="visa">Visa</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="inputGroupFile02" name="visa">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="kitaspej">Kitas dari Pejabat Imigrasi atau Kawin Campur/Anak</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="inputGroupFile02" name="kitaspej">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="kemigrasian">Surat Rekomendasi dari Kantor Kemigrasian</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="inputGroupFile02" name="kemigrasian">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                        </div>
                        <br>

                    </div>

                </div>
                <div class="col-auto d-flex justify-content-end">
                        <button type="submit" name="submit" value="submit" class="btn btn-outline-success">Submit</button>
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
