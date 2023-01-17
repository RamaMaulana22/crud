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
        <h1> Data Dosen</h1>
        <p><a href="tambah.php"><button>Tambah</button></a></p>

        <table>
        <tr>
                <th>No</th>
                <th>Kode Dosen</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr> 	
            <?php
            include('class_dosen.php');
            $dosen = new class_dosen;
            $data = $dosen->getAll();
            $no = 0;
            while($rec=$data->fetch_array()){
                $no++;?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $rec['kd_dosen'];?></td>
                    <td><?php echo $rec['nama'];?></td>
                    <td><?php echo $rec['alamat'];?></td>
                    <td>
                    <a href="edit.php?kd_dosen=<?php echo $rec['kd_dosen'];?>">Edit</a>
                    <a href="hapus.php?kd_dosen=<?php echo $rec['kd_dosen'];?>">hapus</a>
                </td>
                </tr>
           <?php
            }
            ?>
        </table>
    </body>
</html>