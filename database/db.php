<?php
//program untuk menghubungkan database dari MySQL ke PHP
$servername = "localhost";
$database = "db_testlogin";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
