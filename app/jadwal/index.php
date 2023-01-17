<html>
    <head>
    <style>
        table, td, th {
            border: 1px solid;
            }

        table {
            width: 70%;
            border-collapse: collapse;
            text-align: center;
            }
        </style>
    </head>
    <body>
        <h1> Jadwal Mengajar</h1>
        <p><a href="tambah.php"><button>Tambah jadwal</button></a></p>

        <table>
        <tr>
                <th>No</th>
             
                <th>Kode Dosen</th>
                <th>Nama Matkul</th>
                <th>Ruang</th>
                <th>Waktu</th>
                <th>Opsi</th>
            </tr> 
            <?php
             include('class_jadwal.php');
             $jadwal = new class_jadwal;
             $data=$jadwal->getAll();
             
            $no = 0;
            while($rec=$data->fetch_array()){
                $no++;?>
                <tr>
                    <td><?php echo $no;?></td>
                    
                    <td><?php echo $rec['kd_dosen'];?></td>
                    <td><?php echo $rec['nama'];?></td>
                    <td><?php echo $rec['ruang'];?></td>
                    <td><?php echo $rec['waktu'];?></td>
                    <td>
                    <a href="edit.php?id=<?php echo $rec['id'];?>">Edit</a>
                    <a href="hapus.php?id=<?php echo $rec['id'];?>">hapus</a>
                </td>
                </tr>
           <?php
            }
            ?>
        </table>
    </body>
</html>