<?php
//Program untuk memilih table materi dari database MySQL testlogin
include 'db.php';

$sql = "SELECT * FROM materi";
$hasil = $conn->query($sql);

mysqli_close($conn);
