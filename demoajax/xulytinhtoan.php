<?php 
    $txtSo1= $_GET["S1"];
    $txtSo2= $_GET["S2"];
    $pt = $_GET["pt"];
    if($pt== "+"){
        echo "Tổng hai số:". $txtSo1+$txtSo2;
    }elseif($pt== "-"){
        echo "Hiệu hai số:". $txtSo1-$txtSo2;
    }
?>