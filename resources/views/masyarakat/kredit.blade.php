<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kredit</title>
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
            <h4 class="text-center mt-3">Surat Pengantar Kredit</h4>
        </div>
        <div class="konten">
            <form action="{{route('kredit.store')}}" method="POST" autocomplete="on" name="form">
                {{ csrf_token() }}
                @method('put')
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
                            <label for="pengantarKel">Surat Pengantar Kelurahan <a href="">Unduh</a></label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="pengantarKel" name="pengantarKel" placeholder="Input">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="KTP">Kartu Tanda Penduduk</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="ktp" name="KTP" placeholder="Input">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
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
                                <input type="file" class="form-control" id="kk" name="kk">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="lain">Berkas Lain</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="lain" name="lain" placeholder="Input">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                        </div>
                        <br>
                    </div>

                </div>
                <!-- End Right -->
                <div class="col-auto d-flex justify-content-end">

                        <button type="submit" name="submit" value="submit" class="btn btn-outline-success">Submit</button>
                    </div>

            </form>
        </div>

    </div>
    @endsection
    <!-- Context End -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
