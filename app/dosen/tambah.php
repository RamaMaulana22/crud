<html>
    <head></head>
    <body>
        <h1> Tambah Data Dosen</h1>
        <form method="post" action="#">
        <p><label>Kode Dosen : </label><input name="kd_dosen" type="number"></p>
        <p><label>Nama Dosen : </label><input name="nama" type="text"></p>
        <p><label>Alamat : </label><input name="alamat" type="text"></p>
        <p><button name="simpan">Simpan</button></p>
        </form>
    <?php
    include('class_dosen.php');
    $dosen = new class_dosen;
    if (isset($_POST['simpan'])) {
        $kd_dosen = $_POST['kd_dosen'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $dosen->addDosen($kd_dosen,$nama,$alamat);
        header('location:index.php');
    }
    ?>

    </body>
</html>