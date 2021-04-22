<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
        $con = mysqli_connect("localhost","root","") or die ("unable to connect");
        mysqli_select_db($con,'auction');
        

        
    ?>
</body>
</html>