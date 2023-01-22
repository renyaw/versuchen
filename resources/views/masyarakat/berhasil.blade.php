<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Berhasil</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        </head>
    <body>
    <!-- Navbar -->
    @extends('navbar.navbaruser')
    <!-- Navbar End -->

    <!-- Context -->
    @section('container')
    <div class=" container position-relative">
        <div class=" position-absolute top-0 start-50 translate-middle" style="margin-top:350px;">
            <div class="d-grid gap-2 d-md-flex justify-content-md-center" >
                <img src="img/checked.png" width="200" height="200"/>
            </div>

            <figure class="text-center" >
                <blockquote class="blockquote">
                    <p>Data Anda berhasil diunggah</p>
                </blockquote>
                <blockquote class="blockquote">
                    <p>Permintaan akan segera diproses dan silakan lakukan konfirmasi ulang dengan klik WhatsApp dibawah </p>
                </blockquote>
            </figure>

            <div class="d-grid gap-1 d-md-flex justify-content-md-center" style="margin-bottom:40px">
                <a href="https://wa.me/085712573818"><img src="img/whatsapp.png"  width="100" height="100"/></a>
            </div>

            <div class="d-grid gap-1 d-md-flex justify-content-md-center">
                <a href="beranda" class="btn btn-primary">Kembali ke Dashboard</a>
            </div>
        </div>
    </div>
    @endsection

    <!-- Context -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
