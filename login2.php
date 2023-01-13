<?php
// session_start();

// $email = $_POST['email'];
// $password = $_POST['password'];

// if (empty($email) && empty($password)) {
//     header("location:index.php?empty_all");
// } elseif (empty($email) && !empty($password)) {
//     header("location:index.php?empty_email");
// } elseif (!empty($email) && empty($password)) {
//     header("location:index.php?empty_password");
// } else {
//     if ($email == 'wildanauliya101@gmail.com' && $password == 'wildan1013') {
//         $_SESSION['session_email'] = $email;
//         header("location:home.php");
//     } else {
//         header("location:index.php?failed");
//     }
// }
// session_start();
session_start();
include('database/db.php');

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // $sql = "SELECT * FROM datauser WHERE email=$email";

    if (empty($email) && empty($password)) {
        header("location:index.php?empty_all");
    } elseif (empty($email) && !empty($password)) {
        header("location:index.php?empty_email");
    } elseif (!empty($email) && empty($password)) {
        header("location:index.php?empty_password");
    } else {
        $sql = "SELECT * FROM datauser WHERE email='$email' AND password='$password'";
        // $hasil = $conn->query($sql);

        $hasil = $conn->query($sql);
        $result = mysqli_fetch_assoc($hasil);
        if ($result['email'] == $email && $result['password'] == $password) {
            $_SESSION['email'] = $email;
            $_SESSION["test"] = "GET_Kuciang";
            header("location:home.php");
        } else {
            header("location:index.php?failed");
        }
    }
}
session_start();
