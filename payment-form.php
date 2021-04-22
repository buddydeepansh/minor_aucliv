
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
</head>
<body>

    <?php
    
    if(isset($_POST['addmoney'])){
        $amount=$_POST['amount'];
        $name=$_POST['user_name'];
        $userid=$_POST['user_id'];
        $useremail=$_POST['user_email'];
        $userphone=$_POST['user_phone'];
        $curamount=$_POST['user_cur_amount'];

    }
    ?>

    <form action="pay.php" method="post">
    Price :<input type="number" name="price" value="<?php echo $amount; ?>" readonly><br>
    Name:<input type="text" name="name" value="<?php echo $name; ?>" readonly><br>
    email:<input type="email" name="email" value="<?php echo $useremail; ?>" readonly><br>
    contact:<input type="number" name="contact" value="<?php echo $userphone; ?>" readonly><br>

    <input type="hidden" name="current_amount" value="<?php echo $curamount; ?>">

    <input type="submit" name="submit" value=" Proceed to Pay">    
    
</form>




</body>
</html>