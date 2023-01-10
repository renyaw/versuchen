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
        <div class="container-fluid">
            <a class="navbar-brand" href="signup" style="">
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
    <div class="container h-100 pt-4" >
      <div class="row align-items-center h-100">
        <div class="col-6 mx-auto">
          <div class="card p-4 shadow-lg" style="border-radius: 1rem; border-color:#87CEFA; border-width: 3px;">
            <div class="container text-center mt-3">
              <img src="img/logo.png" alt="Logo" width="170" height="115" class="d-inline-block" />
              <br />
              <br />
              <h3><b>MASUK</b></h3>
            </div>
            <br />
            <div class="container">
              <div class="form-control bg-color=white shadow-lg" style="border-radius: 1rem; border-color:#87CEFA; border-width: 2px;">
                <br />
                <form name="form" method="POST" autocomplete="off" action="cek_login.php">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">
                        <b>Username</b>    
                    </label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" />
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">
                        <b>Kata Sandi</b>    
                    </label>
                    <input type="password" class="form-control" id="password" name="password"/>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="#" >Lupa kata sandi?</a>
                  </div>
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-center" >
                    <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Masuk" />
                  </div>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                  <a>Belum punya akun?</a>  
                  <a href="signup" >Daftar disini</a>
                  </div>
                </form>
                <br />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Context -->

    <h1></h1>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
