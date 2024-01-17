<?php
    include "functions.php";
    $idNg = $_GET["idNganh"];
    $rsKhoabyNganh = getKhoaByNganh($idNg);
?>
<option disabled selected value="">-----Chọn Khoa------</option>
<?php
while ($rowKhoa = mysqli_fetch_assoc($rsKhoabyNganh)){
?>
<option value="<?php echo $rowKhoa["makh"] ?>"><?php echo $rowKhoa["tenkh"] ?></option>
<?php
}   
?>