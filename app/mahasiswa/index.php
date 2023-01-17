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
        <h1> Data Mahasiswa</h1>
        <p><a href="tambah.php"><button>Tambah</button></a></p>

        <table>
        <tr>
                <th>No</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>JURUSAN</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr> 
            <?php
            include('class_mahasiswa.php');
            $mahasiswa = new class_mahasiswa;
            $data = $mahasiswa->getAll();
            $no = 0;
            while($rec=$data->fetch_array()){
                $no++;?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $rec['nim'];?></td>
                    <td><?php echo $rec['nama'];?></td>
                    <td><?php echo $rec['jurusan'];?></td>
                    <td><?php echo $rec['alamat'];?></td>
                    <td>
                    <a href="edit.php?nim=<?php echo $rec['nim'];?>">Edit</a>
                    <a href="hapus.php?nim=<?php echo $rec['nim'];?>">hapus</a>
                </td>
                </tr>
           <?php
            }
            ?>
        </table>
    </body>
</html>