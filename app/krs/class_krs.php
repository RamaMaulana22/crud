<?php
include("../koneksi.php");
class class_krs{
    public $con;
    function __construct(){
        $koneksi = new koneksi;
        $this->con = $koneksi->con;
    }

    function getAll(){
        $data=$this->con->query("select * from tbl_krs");
        return $data;
    }

    function addKrs($id,$kd_jadwal,$nim,$kd_semester){
        $this->con->query("insert into tbl_krs(id,kd_jadwal,nim,kd_semester) values('$id','$kd_jadwal','$nim','kd_semester')");
        return true;
    }

    function delKrs($id){
        $this->con->query("delete from tbl_krs where id=$id");
        return true;
    }

    function getById($id){
        $data=$this->con->query("select * from tbl_krs where id='$id
            '");
        return $data;
    }

    function UpdateKrs($id,$kd_jadwal,$nim,$kd_semester){
        $this->con->query("update tbl_krs set kd_jadwal='$kd_jadwal', nim='$nim', kd_semester='$kd_semester' where id='$id'");
        return true;
    }


}
?>