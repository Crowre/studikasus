<?php
session_start();
include('db.php');

if (isset($_SESSION['nama'])) {
    $usernama = $_SESSION['nama'];
    $userNIK = $_SESSION['NIK'];
    $usertempat_lahir = $_SESSION['tempat_lahir'];
    $usertanggal_lahir = $_SESSION['tanggal_lahir'];
    $useralamat = $_SESSION['alamat'];
    $userpekerjaan = $_SESSION['pekerjaan'];
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
    }
    $sql = "UPDATE datauser SET nama = '$usernama', NIK='$userNIK', tempat_lahir='$usertempat_lahir', alamat='$useralamat', pekerjaan='$userpekerjaan' WHERE email='$email'";
    if ($conn->query($sql) === TRUE) {
        header("Location:../profil.php?edit");
    } else {
        echo "Data gagal diubah" . $conn->error;
    }
}
