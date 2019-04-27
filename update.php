<?php
    include '../connect.php';
    $id_dosen = $_POST['id_peminjaman'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $ruang = $_POST['ruang'];
    $jam = $_POST['jam'];

    $query = "UPDATE peminjaman SET nama = '$nama' , kelas = '$kelas', ruang = '$ruang', jam = '$jam' WHERE id = '$id_dosen'";

    $result = mysqli_query($connect, $query);

    $num = mysqli_affected_rows($connect);

    if($num > 0){
        echo "Berhasil update data <br>";
    } else {
        echo "Gagal update data <br>";
    }
    echo "<a href = 'read.php'>Lihat Data</a>";
?>