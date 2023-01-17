<?php
 include('class_dosen.php');
 $dosen = new class_dosen;
 $kd_dosen = $_GET['kd_dosen'];
 $data=$dosen->getById($kd_dosen);
 $dataEdit=$data->fetch_assoc();


?>
<html>
    <head></head>
    <body>
        <h1> Edit Data Dosen</h1>
        <form method="post" action="#">
        <p><label>Kode Dosen : </label><input name="kd_dosen" type="number" value="<?php echo $dataEdit['kd_dosen'];?>" disabled ></p>
        <p><label>Nama Dosen : </label><input name="nama" type="text"value="<?php echo $dataEdit['nama'];?>"></p>
        <p><label>Alamat : </label><input name="alamat" type="text"value="<?php echo $dataEdit['alamat'];?>"></p>
        <p><button name="simpan">Simpan</button></p>
        </form>
    <?php
   
    if (isset($_POST['simpan'])) {
        //$kd_dosen = $_POST['kd_dosen'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $dosen->UpdateDosen($kd_dosen, $nama, $alamat);
        header('location:index.php');
    }
    ?>

    </body>
</html>