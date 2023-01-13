<?php

include('database/registrasi.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Akun [APLIKASI]</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>
    <div class="container">

        <nav class="navbar navbar-light navbar-expand-lg">
            <a class="navbar-brand" href="home.php"><img src="assets/img/2.jpg" height="50px" width="50px" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profil.php">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <form action="database/registrasi.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputnama">Nama Panjang</label>
                    <input type="text" class="form-control" id="inputnama" name="nama">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" name="password">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">tempat lahir</label>
                <input type="text" class="form-control" id="inputTempat_lahir" placeholder="Masukkan tempat lahir anda" name="tempat_lahir">
            </div>
            <div class="form-group">
                <label for="inputAddress2">tanggal lahir</label>
                <input type="text" class="form-control" id="inputTanggal_lahir" placeholder="Masukkan tanggal lahir anda" name="tanggal_lahir">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputCity">NIK</label>
                    <input type="text" class="form-control" id="inputNIK" name="NIK">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">tabing</label>
                    <input type="text" class="form-control" id="inputCity" name="alamat">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputZip">pekerjaan</label>
                    <input type="text" class="form-control" id="inputPekerjaan" name="pekerjaan">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>