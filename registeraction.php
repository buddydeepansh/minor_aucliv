<?php
include 'db_config.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if(isset($_POST['signup'])){
	$name=$_POST['fn'];
  $email=$_POST['em'];
  $address=$_POST['add'];
  $dob=$_POST['dob'];
  $phoneno=$_POST['ph'];
  $gende=$_POST['gender'];
  $password=$_POST['pwd'];
	$cpassword=$_POST['cpwd'];

	if($gende == 'Male'){
		$photo="a10.jpg";
	}
	else{
		$photo="a5.jpg";
	}
  

	if($password==$cpassword)
			{
				$query="select * from user WHERE user_email='$email'";
				$query_run=mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)
				{
				echo'user already exist';
				}
				else
				{
				$query="insert into user(user_photo,user_name,user_email,user_address,user_dob,user_phone,user_gender,user_password) values('$photo','$name','$email','$address','$dob','$phoneno','$gende','$password')";
				
				if(mysqli_query($con,$query))
				{
					echo'user registered';
				}
				else
				{
					echo'error';
				}
				}
				}
			else
			{
				echo'password and cpassword not match';
			}
            mysqli_close($con);
        }


?>

</body>
</html>