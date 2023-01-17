<html>
    <head></head>
    <body>
        <h1> Tambah Data Matakuliah</h1>
        <form method="post" action="#">
        <p><label>Kode Matkul : </label><input name="kd_matkul" type="number"></p>
        <p><label>Matakuliah : </label><input name="nama" type="text"></p>
        <p><label>SKS : </label><input name="sks" type="text"></p>
        <p><button name="simpan">Simpan</button></p>
        </form>
    <?php
    include('class_matkul.php');
    $matkul = new class_matkul;
    if (isset($_POST['simpan'])) {
        $kd_matkul = $_POST['kd_matkul'];
        $nama = $_POST['nama'];
        $sks = $_POST['sks'];
        $matkul-> addMatkul($kd_matkul, $nama, $sks);
        header('location:index.php');
    }
    ?>

    </body>
</html>