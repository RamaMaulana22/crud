<?php
include("../koneksi.php");
class class_matkul{
    public $con;
    function __construct(){
        $koneksi = new koneksi;
        $this->con = $koneksi->con;
    }

    function getAll(){
        $data=$this->con->query("select * from tbl_matkul");
        return $data;
    }

    function addMatkul($kd_matkul,$nama,$sks){
        $this->con->query("insert into tbl_matkul(kd_matkul,nama,sks) values('$kd_matkul','$nama','$sks')");
        return true;
    }

    function delMatkul($kd_matkul){
        $this->con->query("delete from tbl_matkul where kd_matkul=$kd_matkul");
        return true;
    }

    function getById($kd_matkul){
        $data=$this->con->query("select * from tbl_matkul where kd_matkul='$kd_matkul'");
        return $data;
    }

    function UpdateMatkul($kd_matkul,$nama,$sks){
        $this->con->query("update tbl_matkul set nama='$nama', sks='$sks' where kd_matkul='$kd_matkul'");
        return true;
    }

}
?>