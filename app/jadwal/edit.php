<?php
 include('class_jadwal.php');
 $jadwal = new class_jadwal;
 $id = $_GET['id'];
 $data=$jadwal->getById($id);
$dataEdit = $data->fetch_assoc();
$dataDosen = $jadwal->getDosen();
$dataMatkul = $jadwal->getMatkul();



?>
<html>
    <head></head>
    <body>
        <h1> Edit Data Jadwal</h1>
        <form method="post" action="#">
        <p><label>ID Jadwal: </label><input name="id" type="number" value="<?php echo $dataEdit['id'];?>" disabled ></p>
        <p><label>Pilih Dosen : </label><select name="kd_dosen">
            <option value="<?php echo $dataEdit['kd_dosen'];?>"><?php echo $dataEdit['kd_dosen'];?></option>
            <?php while($rec=$dataDosen->fetch_array()){?>
                <option value="<?php echo $rec['kd_dosen'];?>"><?php echo $rec['kd_dosen'];?></option>   
            <?php }?>
        </select></p>

        <p><label>Pilih Matkul : </label><select name="kd_matkul">
            <option value="<?php echo $dataEdit['kd_matkul'];?>"><?php echo $dataEdit['nama_matkul'];?></option>
            <?php while($rec=$dataMatkul->fetch_array()){?>
                <option value="<?php echo $rec['kd_matkul'];?>"><?php echo $rec['nama'];?></option>   
            <?php }?>
        </select></p>
        <p><label>Ruang : </label><input name="ruang" type="text" value="<?php echo $dataEdit['ruang'];?>"  ></p>
        <p><label>Waktu : </label><input name="waktu" type="text" value="<?php echo $dataEdit['waktu'];?>"  ></p>
        <p><button name="simpan">Simpan</button></p>
        </form>
    <?php
   
    if (isset($_POST['simpan'])) {
        //$id = $_POST['id'];
        $kd_dosen = $_POST['kd_dosen'];
        $kd_matkul = $_POST['kd_matkul'];
        $ruang = $_POST['ruang'];
        $waktu = $_POST['waktu'];
      
        $jadwal->Updatejadwal($id, $kd_dosen, $kd_matkul, $ruang, $waktu);
        header('location:index.php');
    }
    ?>

    </body>
</html>