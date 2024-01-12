<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang A</title>
</head>
<body>
    <h1>AAA</h1>
    <br>
    <div id="d0">...</div>
    

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script>
        // Code
        $('document').ready(function(){
            $.get("d.php",function(data) {
                $('#d0').html(data);
            });
        });
    </script>
</body>
</html>