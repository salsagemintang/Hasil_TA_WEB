<?php

include'../connect.php';

    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $ruang = $_POST['ruang'];
    $jam = $_POST['jam'];

    $query = "INSERT INTO peminjaman(nama, kelas, ruang, jam)
                VALUES('$nama' , '$kelas', '$ruang', '$jam')";

    $result = mysqli_query($connect , $query);
    $num = mysqli_affected_rows($connect);
header("location:../aku/read.php");
?>
  