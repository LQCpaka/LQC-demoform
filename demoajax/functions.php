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

    function ghiSV($maSV, $hoSV,$tenSV,$radPhai,$ngaySinh,$noiSinh,$cboKhoa,$hocBong,$hinh){
        $conn = connect();
        $sql = "INSERT INTO sinhvien(masv,hosv,tensv,phai,ngaysinh,noisinh,makh,hocbong,hinh)
                VALUES ('$maSV', '$hoSV','$tenSV','$radPhai','$ngaySinh','$noiSinh','$cboKhoa','$hocBong','$hinh')";
        $rs = mysqli_query($conn, $sql);
        return $rs;
    }
    
    
    
?>