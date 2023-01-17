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
        <h1> Data KRS</h1>
        <p><a href="tambah.php"><button>Tambah</button></a></p>

        <table>
        <tr>
                <th>No</th>
                <th>ID</th>
                <th>KODE JADWAL</th>
                <th>NIM</th>
                <th>KODE SEMESTER</th>
                <th>Aksi</th>
            </tr> 
            <?php
            include('class_krs.php');
            $krs = new class_krs;
            $data = $krs->getAll();
            $no = 0;
            while($rec=$data->fetch_array()){
                $no++;?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $rec['id'];?></td>
                    <td><?php echo $rec['kd_jurusan'];?></td>
                    <td><?php echo $rec['nim'];?></td>
                    <td><?php echo $rec['kd_semester'];?></td>
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