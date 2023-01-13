<?php
//Program untuk memilih table testlogin dari database MySQL 
include('db.php');

$sql = "SELECT * FROM testlogin";
$hasil = $conn->query($sql);

mysqli_close($conn);
