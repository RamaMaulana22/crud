<?php
 include('class_matkul.php');
 $matkul = new class_matkul;
 $kd_matkul = $_GET['kd_matkul'];
 $data=$matkul->getById($kd_matkul);
$dataEdit = $data->fetch_assoc();


?>
<html>
    <head></head>
    <body>
        <h1> Edit Data Matakuliah</h1>
        <form method="post" action="#">
        <p><label>Kode Matkul : </label><input name="kd_matkul" type="number" value="<?php echo $dataEdit['kd_matkul'];?>" disabled ></p>
        <p><label>Matakuliah : </label><input name="nama" type="text"value="<?php echo $dataEdit['nama'];?>"></p>
        <p><label>SKS : </label><input name="sks" type="text"value="<?php echo $dataEdit['sks'];?>"></p>
        <p><button name="simpan">Simpan</button></p>
        </form>
    <?php
   
    if (isset($_POST['simpan'])) {
        //$kd_matkul = $_POST['kd_matkul'];
        $nama = $_POST['nama'];
        $sks = $_POST['sks'];
        $matkul->UpdateMatkul($kd_matkul, $nama, $sks);
        header('location:index.php');
    }
    ?>

    </body>
</html>