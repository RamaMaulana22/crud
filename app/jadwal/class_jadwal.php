<?php
include("../koneksi.php");
class class_jadwal{
    public $con;
    function __construct(){
        $koneksi = new koneksi;
        $this->con = $koneksi->con;
    }

    function getAll(){
        $data=$this->con->query("select *,m.nama as nama_matkul, 
        d.nama as nama_dosen from tbl_jadwal j 
        INNER JOIN tbl_dosen d ON d.kd_dosen=j.kd_dosen inner JOIN 
        tbl_matkul m on m.kd_matkul=j.kd_matkul");
        return $data;
    }
    function getById($id){
        $data=$this->con->query("select *,m.nama as nama_matkul, 
        d.nama as nama_dosen from tbl_jadwal j 
        INNER JOIN tbl_dosen d ON d.kd_dosen=j.kd_dosen inner JOIN 
        tbl_matkul m on m.kd_matkul=j.kd_matkul where j.id='$id'");
        return $data;
    }

    function getDosen(){
        $data=$this->con->query("select * from tbl_dosen");
        return $data;
    }
    function getMatkul(){
        $data=$this->con->query("select * from tbl_matkul");
        return $data;
    }

    function addjadwal($kd_dosen,$kd_matkul,$ruang,$waktu){
        $this->con->query("insert into tbl_jadwal(kd_dosen,kd_matkul,ruang,waktu) 
        values('$kd_dosen','$kd_matkul','$ruang','$waktu')");
        return true;
    }

    function deljadwal($id){
        $this->con->query("delete from tbl_jadwal where id=$id");
        return true;
    }
    

    function Updatejadwal($id,$kd_dosen,$kd_matkul,$ruang,$waktu){
        $this->con->query("update tbl_jadwal set kd_dosen='$kd_dosen', kd_matkul='$kd_matkul', ruang='$ruang',waktu='$waktu' 
        where id='$id'");
        return true;
    }

}
?>