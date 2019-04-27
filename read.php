<?php

include '../connect.php';

$query = "SELECT * FROM peminjaman";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

?>
<!DOCTYPE html>

<body>
    <table border = '1'>
    <h2>Data Peminjam</h2>
    <tr>
        <th>No.</th>
        <th>Nama Peminjam</th>
        <th>Kelas</th>
        <th>Ruang</th>
        <th>Jam</th>
    </tr>


   <?php
        if($num > 0){
            $no = 1;
            while($data = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $data['nama'] . "</td>";
                echo "<td>" . $data['kelas'] . "</td>";
                echo "<td>" . $data['ruang'] . "</td>";
                echo "<td>" . $data['jam'] . "</td>";

                echo "<td><a href = 'form-update.php?id=" . $data['id'] . "'>Edit</a> |";
                echo"<td><a href = 'delete.php?id=".$data['id']."'onclick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Hapus</a></td>";
                echo "</tr>";
                $no++;
            }
        }
        else{
            echo "<td colspan='3'>Tidak ada data</td>";
        }
    ?>
    </table>
    <br>
    <a href="../Login/logout.php"><button>Logout</button></a>
    </body>