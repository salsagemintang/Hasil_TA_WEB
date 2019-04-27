<?php 
include '../connect.php';
$id_dosen = $_GET['id'];
 $query = "DELETE FROM peminjaman WHERE id = $id_dosen";
    $result = mysqli_query($connect , $query);
    $num = mysqli_affected_rows($connect);

header("location:read.php?pesan=hapus");
?>