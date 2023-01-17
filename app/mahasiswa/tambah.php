<html>
    <head></head>
    <body>
        <h1> Tambah Data Mahasiswa</h1>
        <form method="post" action="#">
        <p><label>NIM : </label><input name="nim" type="number"></p>
        <p><label>Nama : </label><input name="nama" type="text"></p>
        <p><label>Jurusan : </label><input name="jurusan" type="text"></p>
        <p><label>Alamat : </label><input name="alamat" type="text"></p>
        <p><button name="simpan">Simpan</button></p>
        </form>
    <?php
    include('class_mahasiswa.php');
    $mahasiswa = new class_mahasiswa;
    if (isset($_POST['simpan'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];
        $mahasiswa->addMahasiswa($nim,$nama,$jurusan,$alamat);
        header('location:index.php');
    }
    ?>

    </body>
</html>