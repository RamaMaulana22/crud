<?php
include("../koneksi.php");
class class_dosen{
    public $con;
    function __construct(){
        $koneksi = new koneksi;
        $this->con = $koneksi->con;
    }

    function getAll(){
        $data=$this->con->query("select * from tbl_dosen");
        return $data;
        
    }
    function addDosen($kd_dosen,$nama,$alamat){
        $this->con->query("insert into tbl_dosen(kd_dosen,nama,alamat) values('$kd_dosen','$nama','$alamat')");
        return true;
    }

    function delDosen($kd_dosen){
        $this->con->query("delete from tbl_dosen where kd_dosen=$kd_dosen");
        return true;
    }

    function getById($kd_dosen){
        $data=$this->con->query("select * from tbl_dosen where kd_dosen='$kd_dosen'");
        return $data;
    }

    function UpdateDosen($kd_dosen,$nama,$alamat){
        $this->con->query("update tbl_dosen set nama='$nama', alamat='$alamat' where kd_dosen='$kd_dosen'");
        return true;
    }
}
?>