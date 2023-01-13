<?php

include('database/dbgetprofil.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit profil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

    <!-- contoh 1 -->
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
        <form action="database/dbgetprofil.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputnama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="inputnama" value="" name="nama">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputemail">Email</label>
                    <input type="email" class="form-control" id="inputemail" value="" name="email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputalamat">Alamat</label>
                <input type="text" class="form-control" id="inputalamat" placeholder="Masukkan kota dan provinsi anda" value="" name="alamat">
            </div>
            <div class="form-group">
                <label for="inputAddress2">pekerjaan</label>
                <input type="text" class="form-control" id="inputpekerjaan" value="" name="pekerjaan">
            </div>
            <!-- <div class="form-row"> -->
            <div class="form-group col-md-4">
                <label for="inputCity">NIK</label>
                <input type="number" class="form-control" id="inputNIK" placeholder="Masukkan NIK anda" value="" name="NIK">
            </div>
            <div class="form-group col-md-4">
                <label for="inputCity">Tempat Lahir</label>
                <input type="text" class="form-control" id="inputtempat_lahir" placeholder="Masukkan tempat lahir anda" value="" name="alamat">
            </div>
            <div class="form-group col-md-4">
                <label for="inputCity">Tanggal Lahir</label>
                <input type="date" class="form-control" id="inputtanggal_lahir" placeholder="Masukkan tanggal lahir anda" value="" name="tanggal_lahir">
            </div>
            <!-- <div class="form-group col-md-4">
                    <label for="inputState">Nomor Mobile</label>
                    <input type="number" class="form-control" id="inputnomor_mobile" name="nomor_mobile">
                </div> -->
            <!-- <div class="form-group col-md-4">
                    <label for="inputZip">Nomor Telepon</label>
                    <input type="number" class="form-control" id="inputnomor_telepon" name="nomor_telepon"> -->
            <!-- </div>
                <div class="form-group col-md-4">
                    <label for="inputZip">Github</label>
                    <input type="text" class="form-control" id="inputgithub" name="github">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputZip">Twitter</label>
                    <input type="text" class="form-control" id="inputtwitter" name="twitter">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputZip">Instagram</label>
                    <input type="text" class="form-control" id="inputinstagram" name="instagram">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputZip">Facebook</label>
                    <input type="text" class="form-control" id="inputfacebook" name="facebook">
                </div> -->
            <!-- </div> -->
            <button type="submit" class="btn btn-primary">EDIT</button>
        </form>
    </div>
    <? include('template/footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>