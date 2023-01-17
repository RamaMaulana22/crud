<?php
 include('class_mahasiswa.php');
 $mahasiswa = new class_mahasiswa;
 $nim = $_GET['nim'];
 $data=$mahasiswa->getById($nim);
 $dataEdit = $data->fetch_assoc();


?>
<html>
    <head></head>
    <body>
        <h1> Edit Data Mahasiswa</h1>
        <form method="post" action="#">
        <p><label>NIM : </label><input name="nim" type="number" value="<?php echo $dataEdit['nim'];?>"  ></p>
        <p><label>NAMA : </label><input name="nama" type="text"value="<?php echo $dataEdit['nama'];?>"></p>
        <p><label>JURUSAN : </label><input name="jurusan" type="text"value="<?php echo $dataEdit['jurusan'];?>"></p>
        <p><label>ALAMAT : </label><input name="alamat" type="text"value="<?php echo $dataEdit['alamat'];?>"></p>
        <p><button name="simpan">Simpan</button></p>
        </form>
    <?php
   
    if (isset($_POST['simpan'])) {
        //$kd_matkul = $_POST['kd_matkul'];
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];
        $mahasiswa->UpdateMahasiswa($nim, $nama, $jurusan, $alamat);
        header('location:index.php');
    }
    ?>

    </body>
</html>