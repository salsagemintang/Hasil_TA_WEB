<?php
    
    include '../connect.php';

    $id_dosen = $_GET['id'];
    
    $query = "SELECT * FROM peminjaman WHERE id = $id_dosen";
    
    $result = mysqli_query($connect , $query);
    
    $row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<body>
    <form action = "update.php" method = "post">
        <table>
        <tr>
            <td><label for = "nama">Nama</label></td>
            <td>:</td>
            <td><input type = "text" name="nama" id="nama" value="<?php echo $row['nama'];?>"></td>
        </tr>

        <tr>
            <td><label for = "kelas">Kelas</label></td>
            <td>:</td>
            <td><input type = "text" name="kelas" id="kelas" value="<?php echo $row['kelas'];?>"></td>
        </tr>
        <tr>
            <td><label for = "ruang">Ruang</label></td>
            <td>:</td>
            <td><input type = "text" name="ruang" id="kelas" value="<?php echo $row['ruang'];?>"></td>
        </tr>
        <tr>
            <td><label for = "jam">Jam</label></td>
            <td>:</td>
            <td><input type = "text" name="jam" id="Jam" value="<?php echo $row['jam'];?>"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type = "hidden" name = "id_peminjaman" value="<?php echo $id_dosen; ?>"></td>
            <td><input type = "submit" value = "Simpan" name = "btnSimpan"></td>
        </tr>
        </table>
    </form>