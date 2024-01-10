<?php
    include_once("functions.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4 " style="width: 800; margin: auto;">
        <h1 class="text-center">Xử lý sản phẩm</h1>
        <form action="xulyform01.php" method="POST">
            <div class="form-group">
                <label>Tên Sản phẩm</label>
                <input type="text" class="form-control" name="txtTenSP">
            </div>
            <div class="form-group">
                <label>Đơn Giá</label>
                <input type="text" class="form-control" name="txtDonGia">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Chọn loại sản phẩm</label>
                <select class="form-control" id="cboLoaiSP">
                    <?php 
                        $rsLoaiSP = getAllLoaiSp();
                        while($rowLoai = mysqli_fetch_assoc($rsLoaiSP) ){
                    ?>
                    <option value="<?php echo $rowLoai["id"] ?>"><?php echo $rowLoai["tenloai"] ?></option>
                    <? } ?>

                </select>
            </div>
            <div class="form-group form-check">
                <input type="radio" class="form-check-input" name="radAnHien" value="1" checked>
                <label class="form-check-label" for="exampleCheck1">Hiện</label>
            </div>
            <div class="form-group form-check">
                <input type="radio" class="form-check-input" name="radAnHien" value="2">
                <label class="form-check-label">Ẩn</label>
            </div>
            <div class="form-group">
                <label>Chọn hình ảnh</label>
                <input type="file" class="form-control-file" name="picSP">
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Ghi Mới">
                <input type="submit" class="btn btn-primary" value="Thêm">
            </div>

        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>