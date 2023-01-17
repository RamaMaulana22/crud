<?php
 include('class_jadwal.php');
 $jadwal = new class_jadwal;
$dataDosen = $jadwal->getDosen();
$dataMatkul = $jadwal->getMatkul();



?>
<html>
    <head></head>
    <body>
        <h1> Tambah Data Jadwal</h1>
        <form method="post" action="#">
        
        <p><label>Pilih Dosen : </label><select name="kd_dosen">
           
            <?php while($rec=$dataDosen->fetch_array()){?>
                <option value="<?php echo $rec['kd_dosen'];?>"><?php echo $rec['kd_dosen'];?></option>   
            <?php }?>
        </select></p>

        <p><label>Pilih Matkul : </label><select name="kd_matkul">
          
            <?php while($rec=$dataMatkul->fetch_array()){?>
                <option value="<?php echo $rec['kd_matkul'];?>"><?php echo $rec['nama'];?></option>   
            <?php }?>
        </select></p>
        <p><label>Ruang : </label><input name="ruang" type="text"  ></p>
        <p><label>Waktu : </label><input name="waktu" type="text" </p>
        <p><button name="simpan">Simpan</button></p>
        </form>
    <?php
    
    if (isset($_POST['simpan'])) {
        $kd_dosen = $_POST['kd_dosen'];
        $kd_matkul = $_POST['kd_matkul'];
        $ruang = $_POST['ruang'];
        $waktu = $_POST['waktu'];    
        $jadwal->addJadwal($kd_dosen, $kd_matkul, $ruang, $waktu);
        header('location:index.php');
    }
    ?>

    </body>
</html>