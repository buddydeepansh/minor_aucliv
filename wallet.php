<?php
include 'db_config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background:#E8E8E8">
    <?php
    session_start();
    if(empty($_SESSION['user_id'])){
        header("location:http://localhost/MINOR/index.php");  
    }
    include 'userheader.php';
    ?>

    <?php
    
    $userid=$_SESSION['user_id'];
    
    $q=mysqli_query($con,"select user_sec_amt,user_name,user_email,user_phone from user where user_id=$userid");

    while($r=mysqli_fetch_array($q)){
        $amount=$r['user_sec_amt'];
        $user_name=$r['user_name'];
        $user_email=$r['user_email'];
        $user_phone=$r['user_phone'];

    }
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
    <div class="wallet" align="center" style="padding:100px">
    <div align="left" class="wallettop">
    <div class="image">
    <img src="images/wallet.png" width="80px" height="80px" alt="image not found"><b>AucLiv Wallet</b>
    <p class="amount">&#x20B9; <?php echo $amount; ?></p>


    <hr>
    Add Money to AucLiv Wallet
    <div class="addmoney">
    <form action="payment-form.php" method="post">
    



    <input type="hidden" name="user_id" value="<?php echo $userid; ?>">

    <input type="hidden" name="user_name" value="<?php echo $user_name; ?>">

    <input type="hidden" name="user_email" value="<?php echo $user_email; ?>">

    <input type="hidden" name="user_phone" value="<?php echo $user_phone; ?>">

    <input type="hidden" name="user_cur_amount" value="<?php echo $amount; ?>">







    <input class="inputtype" type="number" name="amount" placeholder="&#x20B9; Enter Amount" min="1" max="10000"> 
    <button class="sub" type="submit" name="addmoney">Add Money</button>

    </form>
    </div>

</div>


</div>


</div>
















</body>

<style>

.sub{
    width:200px;
    height:45px;
    background: #00aced;
    border-radius: 3px;
    padding: 0 15px;
    border: none;
    width: 288px;
    cursor: pointer;
    font-size: 16px;
    color: #fff;
    font-weight: 600;

}
.inputtype{

    width:250px;
    height:45px;
    font-size:20px;
    margin:20px;
    margin-right:50px;
    border-radius: 3px;
    
    
}
form{
    margin:10px;
}

.addmoney{
    display:flex;
}



.wallettop{
    padding:10px;
    
    
    border-radius:10px;
    background:white;
    
    width:800px;
    padding-bottom:50px;
}

.wallet-right{
    float:right;
    
}

.wallet-left{
    float:left;
}

.amount{
    font-size:50px;
    padding-left:10px;
}


.wallet{
    height:200px;
    background:linear-gradient(90deg, #c300ff 50%, hsl(175, 100%, 50%) 100%);
}
.image{
  
}
</style>
</html>