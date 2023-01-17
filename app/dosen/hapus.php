<?php
include('class_dosen.php');
$dosen = new class_dosen;
$kd_dosen = $_GET['kd_dosen'];
$dosen->delDosen($kd_dosen);
header('location:index.php');


?>