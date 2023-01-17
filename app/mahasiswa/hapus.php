<?php
include('class_mahasiswa.php');
$mahasiswa = new class_mahasiswa;
$nim = $_GET['nim'];
$mahasiswa->delMahasiswa($nim);
header('location:index.php');


?>