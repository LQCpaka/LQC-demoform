<?php
    function connect(){
        return mysqli_connect("localhost","root","","qlsp");
    }
    function disconnect($conn){
        return mysqli_close($conn);
    }
    function getAllLoaiSp(){
        $conn = connect();
        $sql = "SELECT * FROM loaiSP";
        $rs = mysqli_query($conn, $sql);
        return $rs;
    }
?>