<?php

include('db.php');

if (isset($_POST['judul'])) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $belajar_pertama_kali = $_POST['belajar_pertama_kali'];

    // memasukkan data baru
    $sql = "INSERT INTO materi (judul,deskripsi,belajar_pertama_kali) VALUES ('$judul','$deskripsi','$belajar_pertama_kali')";
    // if ($conn->query($sql) === TRUE){
    //     echo "data baru sudah ditambah";
    // }else{
    //     echo "error". $conn->error;
    // }
    if ($conn->query($sql) === TRUE) {
        header("Location: ../home.php?tambah");
    } else {
        echo "error" . $conn->error;
    }
}

?>

<!-- menampilkan data yang akan diubah ke html -->

<?php include('template/header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <h3>Tambah Data</h3>
        <form action="tambahmateri.php" method="post">
            <label for="nama">Masukkan Judul Baru:</label>
            <input type="text" id="judul" name="judul"><br><br>
            <label for="deskripsi">Masukkan Deskripsi</label>
            <input type="text" id="deskripsi" name="deskripsi"><br><br>
            <label for="belajar_pertama_kali">Kapan Belajar pertama kali</label>
            <input type="date" id="belajar_pertama_kali" name="belajar_pertama_kali"><br><br>
            <input type="submit" value="Submit">
        </form>
        <a href="../home.php">Kembali</a>
    </div>
</body>

<?php include('template/footer.php'); ?>
</body>

</html>