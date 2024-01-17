<?php

include_once("functions.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4 " style="width: 800; margin: auto;">
        <h1 class="text-center">Xử lý sản phẩm</h1>
        <form id="fghi" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Mã Sinh Viên</label>
                <input  id="txtMaSV" type="text" class="form-control" name="txtMaSV">
                <small class="text-danger font-italic"></small>
            </div>
            <div class="form-group">
                <label>Họ Sinh Viên</label>
                <input id="txtHoSV" type="text" class="form-control" name="txtHoSV">
                <small class="text-danger font-italic"></small>
            </div>
            <div class="form-group">
                <label>Tên Sinh Viên</label>
                <input id="txtTenSV" type="text" class="form-control" name="txtTenSV">
                <small class="text-danger font-italic"></small>
            </div>
            <div class="form-group">
                <label>Giới Tính</label>
                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" name="radPhai" value="1" >
                    <label class="form-check-label">Nam</label>
                </div>
                <div class="form-check-inline">
                    <input type="radio" class="form-check-input" name="radPhai" value="0" >
                    <label class="form-check-label">Nữ</label>
                </div>
            </div>
            <div class="form-group">
                <label>Ngày Sinh</label>
                <input type="text" class="form-control" name="txtNgaySinh">
                <small class="text-danger font-italic"></small>
            </div>
            <div class="form-group">
                <label>Nơi Sinh</label>
                <input type="text" class="form-control" name="txtNoiSinh">
                <small class="text-danger font-italic"></small>
            </div>
            
            <div class="form-group">
                <label ">Chọn Ngành</label>
                <select id="cboNganh" class="form-control" name="cboNganh">
                <option disabled selected value="">-----Chọn Ngành------</option>
                <?php 
                    $rsNganh = getAllNganh();
                    while($rowNganh = mysqli_fetch_assoc($rsNganh)){

                ?>
                    <option value="<?php echo $rowNganh["id"]; ?>"><?php echo $rowNganh["tenng"] ?></option>
                <?php
                    }
                ?>
                </select>
            </div>
            <div class="form-group">
                <label ">Chọn Khoa</label>
                <select id="cboKhoa" class="form-control" name="cboKhoa">
                    <option disabled selected value="">-----Chọn Khoa------</option>
                    <option value="AV">Anh Văn</option>
                    <option value="TH">Tin Học</option>
                </select>
            </div>
            <div class="form-group">
                <label>Học bổng</label>
                <input type="text" class="form-control" name="txtHocBong">
                <small class="text-danger font-italic"></small>
            </div>
            <div class="form-group">
                <label>Chọn hình ảnh</label>
                <input type="file" class="form-control-file" id="picSV" name="picSV">
            </div>
            <div class="text-center">
                <input id="btnGhi" type="submit" class="btn btn-primary" name="btnGhi" value="Ghi Mới">
                <input type="reset" class="btn btn-primary" name="btnThem" value="Thêm">
            </div>

        </form>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#cboNganh").change(function(e){
                var idNg = $("#cboNganh").val();
                $.ajax({
                    url:"xulykhoa.php",
                    type:"GET",
                    data:{idNganh:idNg},
                    success:function(data){
                        $("#cboKhoa").html(data);
                    }
                });
            });
            $("#btnGhi").click(function(){
                var picSV = $("#picSV")['0'].files['0'];
                var fd = new FormData();
                var maSV = $("#txtMaSV").val();
                var hoSV = $("#txtHoSV").val();
                fd.append("pic",picSV);
                fd.append("maSV",maSV);
                fd.append("hoSV",hoSV);
                $.ajax({
                    url:"xulyhinh.php",
                    type:"POST",
                    data:fd,
                    contentType:false,
                    processData:false,
                    success: function(data){
                        console.log(data);
                    }
                });
                // console.dir($("#picSV")['0'].files['0']);
            }); 
            $("#fghi").submit(function(e){
                e.preventDefault();
                $.ajax({
                    url:"xulyhinh.php",
                    type:"POST",
                    data:new FormData(this),
                      contentType:false,
                    processData:false,
                    success: function(data){
                        console.log(data);
                    }
                });
            });
        });
    </script>
</body>

</html>