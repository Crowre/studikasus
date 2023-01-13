<?php

include('db.php');

$idhapus = $_GET['id'];
$sql = "DELETE FROM materi where id=$idhapus";

// if($conn->query($sql)===TRUE){
//     echo "sudah dihapus";
// }else{
//     echo "error";
// }

if ($conn->query($sql) === TRUE) {
    header("Location: ../home.php?hapus");
} else {
    echo "error" . $conn->error;
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus data?</title>
</head>
<body>
    <a href="../studikasus/home.php">Kembali</a>
</body>
</html> -->