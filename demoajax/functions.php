<?php
    function connect(){
        return mysqli_connect("localhost","root","","qlsv2");
    }
    function disconnect($conn){
        return mysqli_close($conn);
    }
    function getAllNganh(){
        $conn = connect();
        $sql = "SELECT * FROM nganhhoc";
        $rs = mysqli_query($conn, $sql);
        return $rs;
    }
    function getKhoaByNganh($idng){
        $conn = connect();
        $sql = "SELECT * FROM khoa WHERE idnganh = $idng";
        $rs = mysqli_query($conn, $sql);
        return $rs;
    }

    
    
    
?>