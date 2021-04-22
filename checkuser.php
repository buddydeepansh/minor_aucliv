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
session_start();

if ( ! empty( $_POST ) ) {
    $email=$_POST["em"];
    $password=$_POST["pwd"];
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
       
        
        }
        
        $run=mysqli_query($con,"select * from user WHERE user_email='$email' and user_password ='$password'");
        $numrow=mysqli_num_rows($run);
        if($numrow>0)
        {

           while($row=mysqli_fetch_assoc($run)){
            $_SESSION['user_id'] = $row["user_id"];
            $_SESSION['profileimage']=$row["user_photo"];
           }
            

                     
           echo 'Login Successfuly';
            header("location:http://localhost/minor2/userhome.php");
        }
        else
        {
            echo "<script>alert('Invalid user id or Password!!!');</script>";
        }   
    
}

?>
</body>
</html>