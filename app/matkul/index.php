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
        <h1> Data Matakuliah</h1>
        <p><a href="tambah.php"><button>Tambah</button></a></p>

        <table>
        <tr>
                <th>No</th>
                <th>Kode Matkul</th>
                <th>Matakuliah</th>
                <th>sks</th>
                <th>Aksi</th>
            </tr> 
            <?php
            include('class_matkul.php');
            $matkul = new class_matkul;
            $data = $matkul->getAll();
            $no = 0;
            while($rec=$data->fetch_array()){
                $no++;?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $rec['kd_matkul'];?></td>
                    <td><?php echo $rec['nama'];?></td>
                    <td><?php echo $rec['sks'];?></td>
                    <td>
                    <a href="edit.php?kd_matkul=<?php echo $rec['kd_matkul'];?>">Edit</a>
                    <a href="hapus.php?kd_matkul=<?php echo $rec['kd_matkul'];?>">hapus</a>
                </td>
                </tr>
           <?php
            }
            ?>
        </table>
    </body>
</html>