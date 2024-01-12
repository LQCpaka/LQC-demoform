<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang A</title>
</head>
<body>
    <h1>AAA</h1>
    <form action="">
        Nhập số thứ nhất: <input type="text" id="so1" value="5"> <br> <br>
        Nhập số thứ hai: <input type="text" id="so2" value="10"> <br> <br>
    </form>
    <br>
    <div id="d0">...</div>
    

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script>
        // Code
        $('document').ready(function(){
            var soA = $('#so1').val();
            var soB = $('#so2').val();
            
            $.get("bb.php",{hsA:soA,hsB:soB},function(data) {
                $('#d0').html(data);
            });
        });
    </script>
</body>
</html>