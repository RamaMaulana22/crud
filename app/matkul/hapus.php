<?php
include('class_matkul.php');
$matkul = new class_matkul;
$kd_matkul = $_GET['kd_matkul'];
$matkul->delMatkul($kd_matkul);
header('location:index.php');


?>