<?php
    include_once("functions.php");
    $txtTenSP = $_POST["txtTenSP"];
    $txtDonGia = $_POST["txtDonGia"];
    $cboLoaiSP = $_POST["cboLoaiSP"];
    $radAnHien = $_POST["radAnHien"];
    $picSP = $_FILES["picSP"];
    $hinh = $picSP["name"];
    echo $txtTenSP, "<br>";
    echo $txtDonGia, "<br>";
    echo $cboLoaiSP, "<br>";
    echo $hinh, "<br>";
    
    move_uploaded_file($picSP["tmp_name"], "img/$hinh");
    if(ghiSP($txtTenSP,$txtDonGia,$cboLoaiSP,$radAnHien,$hinh)){
        header("location:form01.php");
        var_dump($_POST);
    } else{
        echo "Ghi Thất Bại";
    }
    


?>