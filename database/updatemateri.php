<?php
include('db.php');

if (isset($_POST['judul'])) {
    $ubahjudul = $_POST['judul'];
    $ubahdeskripsi = $_POST['deskripsi'];
    $ubahbelajar_pertama_kali = $_POST['belajar_pertama_kali'];
    if (isset($_GET['id'])) {
        $ubahid = $_GET['id'];
    }
    // echo "ubah nama jadi $ubahjudul, passwordnya $ubahdeskripsi dan email $ubahbelajar_pertama_kali";
    $sql = "UPDATE materi SET judul = '$ubahjudul', deskripsi='$ubahdeskripsi', belajar_pertama_kali='$ubahbelajar_pertama_kali' WHERE id='$ubahid'";
    if ($conn->query($sql) === TRUE) {
        header("Location:../home.php?ubah");
    } else {
        echo "Data gagal diubah" . $conn->error;
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Materi</title>
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
        <h3>Ubah Data</h3>
        <form action="updatemateri.php" method="post">
            <label for="judul">Masukkan judul yang akan diubah:</label>
            <input type="text" id="judul" name="judul"><br><br>
            <label for="deskripsi">Masukkan deskripsi:</label>
            <input type="text" id="deskripsi" name="deskripsi"><br><br>
            <label for="belajar_pertama_kali">Masukkan Data waktu terbaru :</label>
            <input type="date" id="belajar_pertama_kali" name="belajar_pertama_kali"><br><br>
            <input type="submit" value="Submit">
        </form>
        <a href="../home.php">kembali</a>
    </div>

    <?php include('template/footer.php'); ?>
</body>

</html>