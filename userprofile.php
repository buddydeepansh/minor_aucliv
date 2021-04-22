<?php
include 'db_config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<?php

session_start();
if(isset($_SESSION['user_id'])){

    include 'userheader.php';
}
else{
    header("location:http://localhost/minor2/index.php");
}


$customer_id=$_SESSION['user_id'];
$run = mysqli_query($con,"select * from user where user_id='$customer_id'" );
$numrow=mysqli_num_rows($run);

if($numrow>0)
        {

           while($row=mysqli_fetch_assoc($run)){
            $name=$row['user_name'];
            $email=$row['user_email'];
            $address=$row['user_address'];
            $dob=$row['user_dob'];
            $phone=$row['user_phone'];
            $gender=$row['user_gender']; 
            $photo=$row['user_photo'];

           }

            
        }
        else
        {
            echo'error';
        }   
?>



<div class="userdata" align="center">
        <div class="datacard" align="left">
        <div style="width=100%" align="right">
        <button style="background:white; border:0; font-size:20px " >&#9998; Edit</button>
        </div>
       <h2 align="center">Personal Information</h2><br><br>
       <div align="right" style="width:500px">
       <img class="photo" src="profile/<?php echo $photo;?>" width="150px" height="150px"><br>
        <a  href="#">change your Avtar</a></div><br><br><br>
        <h5>Name</h5>
        <input type="text" name="customername" value="<?php echo $name; ?>" disabled><br><br><br>
        <div>
  
        </div>
        <h5>Your Gender</h5>
        <input type="text" name="customername" value="<?php echo $gender; ?>" disabled><br><br><br>
        
        <h5>E-mail Address</h5>
        <input type="text" name="customername" value="<?php echo $email; ?>" disabled><br><br><br>


        <h5>Mobile Number</h5>
        <input type="text" name="customername" value="<?php echo $phone; ?>" disabled><br><br><br>

        <h5>Address</h5>
        <input style="height:100px; width:500px"  class="address" type="text" name="customername" value="<?php echo $address; ?>" disabled><br><br><br>

        

        
</div>



<style>

.userdata{



padding:100px;
padding-top:20px;
padding-bottom:20px;
font-family:times new roman;
width:100%;
background:#E8E8E8;
}

.datacard{
    padding-top:50px;
    padding-left:50px;
    padding-bottom:50px;
    padding-right:50px;
    width:900px;
    
    background:white;
}


.datacard input{
    height:50px;
    width:280px;
    padding-left:20px;


}
.photo{
    
    border-radius:150px;
}

</style>
</body>
</html>