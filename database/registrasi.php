<?php

include('db.php');

if (isset($_POST['email'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tempat_lahir'];
    $NIK = $_POST['NIK'];
    $pekerjaan = $_POST['pekerjaan'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // memasukkan data baru
    $sql = "INSERT INTO datauser (nama,alamat,tempat_lahir,tanggal_lahir,NIK,pekerjaan,email,password) 
    VALUES ('$nama','$alamat','$tempat_lahir','$tanggal_lahir','$NIK','$pekerjaan','$email','$password')";
    // if ($conn->query($sql) === TRUE){
    //     echo "data baru sudah ditambah";
    // }else{
    //     echo "error". $conn->error;
    // }
    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php?usertambah");
    } else {
        echo "error" . $conn->error;
    }
}
