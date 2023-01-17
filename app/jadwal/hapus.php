<?php
include('class_jadwal.php');
$jadwal = new class_jadwal;
$id = $_GET['id'];
$jadwal->delJadwal($id);
header('location:index.php');


?>