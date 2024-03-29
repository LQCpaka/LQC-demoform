<?php

    include_once("functions.php");
    $txtTenSP = "";
    $txtDonGia = "";
    $cboLoaiSP = "";
    $radAnHien = 1;
    $hinh = "";
    // $errTenSP = "";
    // $errDonGia = "";
    $errArr = ['tenSP'=>'','donGia'=>''];
    if (isset($_POST["btnGhi"])) {
        // var_dump($_POST);
        $txtTenSP = $_POST["txtTenSP"];
        $txtDonGia = $_POST["txtDonGia"];
        $cboLoaiSP = $_POST["cboLoaiSP"];
        $radAnHien = $_POST["radAnHien"];
        $picSP = $_FILES["picSP"];
        $hinh = $picSP["name"];

        
        // move_uploaded_file($picSP["tmp_name"], "img/$hinh");
        // ghiSP($txtTenSP, $txtDonGia, $cboLoaiSP, $radAnHien, $hinh);

        
        if(empty($txtTenSP)){
            $errArr['tenSP'] = "(*) Ten San Pham Khong Duoc Rong";
        }
        if(empty($txtDonGia)){
            $errArr['donGia'] = "(*) Don Gia Khong Duoc Rong";
        } elseif(!is_numeric($txtDonGia)){
            $errArr['donGia'] = "(*) Don Gia khong dung kieu du lieu";
        }
    }
    $checkedHien = $radAnHien == 1 ? "checked" : "";
    $checkedAn = $radAnHien == 0 ? "checked" : "";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" >
</head>

<body>
    <div class="container mt-4 " style="width: 800; margin: auto;">
        <h1 class="text-center">Xử lý sản phẩm</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Tên Sản phẩm</label>
                <input type="text" class="form-control" name="txtTenSP" value="<?php echo $txtTenSP; ?>">
                <small class="text-danger font-italic"><?php echo $errArr['tenSP']; ?></small>
            </div>
            <div class="form-group">
                <label>Đơn Giá</label>
                <input type="text" class="form-control" name="txtDonGia" value="<?php echo $txtDonGia; ?>">
                <small class="text-danger font-italic"><?php echo $errArr['donGia']; ?></small>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Chọn loại sản phẩm</label>
                <select class="form-control" name="cboLoaiSP">
                    <?php
                    $rsLoaiSP = getAllLoaiSp();
                    while ($rowLoai = mysqli_fetch_assoc($rsLoaiSP)) {
                        $selected = $cboLoaiSP == $rowLoai["id"] ? "selected" : "";
                    ?>
                        <option value="<?php echo $rowLoai["id"]; ?>" <?php echo $selected; ?>><?php echo $rowLoai["tenloai"]; ?></option>
                    <?php } ?>

                </select>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="radAnHien" value="1" <?php echo $checkedHien; ?>>
                <label class="form-check-label">Hiện</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" name="radAnHien" value="0" <?php echo $checkedAn; ?>>
                <label class="form-check-label">Ẩn</label>
            </div>
            <div class="form-group">
                <label>Chọn hình ảnh</label>
                <input type="file" class="form-control-file" name="picSP" value="abc">
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" name="btnGhi" value="Ghi Mới">
                <input type="reset" class="btn btn-primary" name="btnThem" value="Thêm">
            </div>

        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>