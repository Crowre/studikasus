<?php

//Program untuk memilih table datauser dari database MySQL 
include('db.php');

$sql = "SELECT * FROM datauser";
$hasil = $conn->query($sql);

mysqli_close($conn);
