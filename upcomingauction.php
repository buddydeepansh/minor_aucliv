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
<body>
    
    <?php
    session_start();

    if(isset($_SESSION['user_id'])){
        include 'userheader.php';
    }
    
    if(empty($_SESSION['user_id'])){
        include 'header.php';
    }
    
    ?>

<h1 align="center" style="font-family:times; margin-top:70px">Upcoming Auction</h1>
<div class="container py-2" >
    <div class="row mt-2" style="margin-left:120px">

    <?php
        $date=date("Y-m-d");
        $query="select * from product WHERE start_action=(SELECT DATE_ADD((select CURDATE()), INTERVAL 1 DAY))";
        $run1=mysqli_query($con,$query);
        $check_product=mysqli_num_rows($run1);
        if($check_product){

            while($row1=mysqli_fetch_array($run1)){
                ?>
                <div class="col-md-3" style="border:0.5px solid black; border-radius:3px; margin:5px">
                    <div class="cart">
                        <div class="card-body" style="text-align:center">
                            <img src="<?php echo 'product/'.$row1['image'];?>" width="200px" height="150px" class="card-img-top" alt="image not found">
                            <div class="name"><b><?php echo $row1['name']; ?></b></div>
                            <h6 class="card-brand">Brand : <?php echo $row1['brand']; ?></h6>
                            <h6 class="card-mrp"><s>M.R.P : &#8377; <?php echo $row1['mrp']; ?></s></h6>
                            <h6 class="card-ibp">Initial Bid Price: &#8377; <?php echo $row1['ibp']; ?></h6>
                  
                            <p class="card-text">
                            <form action="" method="post">
                            <input type="hidden" name="pid" value="<?php echo $row1['product_id']; ?>">
			    <input type="hidden" name="uid" value="<?php echo $row1['user_id']; ?>">
                            <button type="submit" name="buy" class="buy_button">Participate</button>
                            </p>
                        </div>
                    </div>
                 </div>


                <?php
            }

        }
        else{
            echo "No Auction for Today";
        }





    ?>
        
    </div>
</div>



















</body>

<style>
.buy_button{
    
    width:100%;
    height:45px;
    background:#00aced;
    border-radius: 3px;
    padding: 0 15px;
    border: none;
   
    cursor: pointer;
    font-size: 16px;
    color: #fff;
    font-weight: 600;


}

.cart{
    
    align-items:center;
    

}

.name{
    text-align:center;
    height:80px;
    font-size:15px;

}

</style>
</html>