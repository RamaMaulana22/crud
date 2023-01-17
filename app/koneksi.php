<?php
 class koneksi{
    public $con;

    function __construct(){
        $this->con = new mysqli("localhost", "root", "", "db_pelatihan");
    }

    function get_user($username,$password){
        $data=$this->con->query("select * from tbl_user where username='$username' and password='$password'");
        return $data;
    }

 }