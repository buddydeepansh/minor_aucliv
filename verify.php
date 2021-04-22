<?php

require('config.php');
session_start();
$conn=mysqli_connect($host,$username,$password,$dbname);





require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{


    $razorpay_order_id=$_SESSION['razorpay_order_id'];
    $razorpay_payment_id=$_POST['razorpay_payment_id'];

    $email=$_SESSION['email'];
    $userid=$_SESSION['user_id'];
    $amount=$_SESSION['amount'];
    $date=date("Y-m-d");
   $status="success";
   $newamount=$_SESSION['currentamount'] + $amount;


    $q="insert into payments(payment_id,razorpay_payment_id,status,email,user_id,amount,date) values('$razorpay_order_id','$razorpay_payment_id','$status','$email','$userid','$amount','$date')";

    $run=mysqli_query($conn,$q);

    if($run){
        echo "success";

    }

    $sql="update user SET user_sec_amt='$newamount' where user_id='$userid'";

    $r=mysqli_query($conn,$sql);

    if($r){
        echo "payment updated";
    }
    

    $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";


?>
           
             

             <?php
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;

?>

<a href="wallet.php">go to the wallet</a>