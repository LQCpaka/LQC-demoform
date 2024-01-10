<?php
    function connect(){
        return mysqli_connect("localhost","root","","qlsp");
    }
    function disconnect($conn){
        return mysqli_close($conn);
    }
    function getAllLoaiSp(){
        $conn = connect();
        $sql = "SELECT * FROM loaisp";
        $rs = mysqli_query($conn, $sql);
        return $rs;
    }

    function ghiSP($tenSP,$donGia,$loaiSP,$anHien,$hinh){
        $conn = connect();
        $sql = "INSERT INTO sanpham(tensp,dongia,anhien,idLoai,hinh)
                VALUES ('$tenSP','$donGia','$anHien','$loaiSP','$hinh')";

        $rs = mysqli_query($conn, $sql);
        disconnect($conn);
        return $rs;
    }
    // if(isset($_POST["cboLoaiSP"])) {
    //     $cboLoaiSP = $_POST["cboLoaiSP"];
    //     echo $cboLoaiSP;
    // } else {
    //     echo "Không nhận được giá trị từ cboLoaiSP";
    // }
    
?>