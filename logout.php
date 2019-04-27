<?php
session_start();
session_destroy();
header("location:../Peminjam/form-register.php");
?>