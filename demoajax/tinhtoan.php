<!-- Yeu cau:   + Nhap vao 2 so a va b trong cac the input text.
                + Thiet ke cac button +, -, x, / .
                + Su dung ky thuat ajax de thuc hien cac phep toan tren va in ket qua vao mot the div-->

<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Form Ajax</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4 " style="width: 800; margin: auto;">
        <h1 class="text-center">Xử Lý Phép Toán</h1>
        <!-- <form action="" method="POST" enctype="multipart/form-data"> -->
            <div class="form-group">
                <label>Số Thứ Nhất</label>
                <input type="text" class="form-control" id="txtSo1" name="txtSo1">
            </div>
            <div class="form-group">
                <label>Số Thứ Hai</label>
                <input type="text" class="form-control" id="txtSo2" name="txtSo2">
            </div>
            <div id="ketqua" class="text-success font-weight-bold"></div>
            <div class="text-center">
                <input type="button" class="btn btn-primary" id="btnCong" name="btnCong" value="Cộng">
                <input type="button" class="btn btn-primary" id="btnTru" name="btnTru" value="Trừ">
                <input type="button" class="btn btn-primary" id="btnNhan" name="btnNhan" value="Nhân">
            </div>

        <!-- </form> -->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $('document').ready(function(){
            $('#btnCong').click(function(){
                var txtSo1 = $('#txtSo1').val();
                var txtSo2 = $('#txtSo2').val();

                $.get(
                    "xulytinhtoan.php",
                    {
                        S1:txtSo1,
                        S2:txtSo2,
                        pt: "+"
                    },
                    function(data){
                        $('#ketqua').html(data);
                    }
                );
            });
            $('#btnTru').click(function(){
                var txtSo1 = $('#txtSo1').val();
                var txtSo2 = $('#txtSo2').val();

                $.get(
                    "xulytinhtoan.php",
                    {
                        S1:txtSo1,
                        S2:txtSo2,
                        pt: "-"
                    },
                    function(data){
                        $('#ketqua').html(data);
                    }
                );
            });
        });
    </script>
</body>

</html>