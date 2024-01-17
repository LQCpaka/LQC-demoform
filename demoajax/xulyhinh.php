<?php
    include_once("functions.php");
    $txtMaSV = $_POST["txtMaSV"];
    $txtHoSV = $_POST["txtHoSV"];
    $txtTenSV = $_POST["txtTenSV"];
    $radPhai = $_POST["radPhai"];
    $txtNgaySinh = $_POST["txtNgaySinh"];
    $txtNoiSinh = $_POST["txtNoiSinh"];
    $cboKhoa = $_POST["cboKhoa"];
    $txtHocBong = $_POST["txtHocBong"];
    $picSV = $_FILES["picSV"];
    $hinh = $picSV["name"];
    
     
    move_uploaded_file($picSV["tmp_name"], "img/$hinh");
    if(ghiSV($txtMaSV,$txtHoSV,$txtTenSV,$radPhai,$txtNgaySinh,$txtNoiSinh, $cboKhoa, $txtHocBong, $hinh)){
        echo "Ghi Mau Tin Thanh Cong";
    } else{
        echo "Ghi Mau Tin That Bai";
    }


    
?>