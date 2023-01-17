<?php
include("../koneksi.php");
class class_mahasiswa{
    public $con;
    function __construct(){
        $koneksi = new koneksi;
        $this->con = $koneksi->con;
    }

    function getAll(){
        $data=$this->con->query("select * from tbl_mahasiswa");
        return $data;
    }

    function addMahasiswa($nim,$nama,$jurusan,$alamat){
        $this->con->query("insert into tbl_mahasiswa(nim,nama,jurusan,alamat) values('$nim','$nama','$jurusan','alamat')");
        return true;
    }

    function delMahasiswa($nim){
        $this->con->query("delete from tbl_mahasiswa where nim=$nim");
        return true;
    }

    function getById($nim){
        $data=$this->con->query("select * from tbl_mahasiswa where nim='$nim
            '");
        return $data;
    }

    function UpdateMahasiswa($nim,$nama,$jurusan,$alamat){
        $this->con->query("update tbl_mahasiswa set nama='$nama', jurusan='$jurusan', alamat='$alamat' where nim='$nim'");
        return true;
    }


}
?>