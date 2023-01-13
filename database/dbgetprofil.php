<?php
session_start();
include('db.php');

$sql = "SELECT * FROM datauser";
$hasil = $conn->query($sql);

mysqli_close($conn);
