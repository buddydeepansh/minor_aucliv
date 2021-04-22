<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AucLiv</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>
<body>
<div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <?php
    include 'header2.php';
    ?>

<style>

.modal {
  
  position: fixed; 
  z-index: 1; 
  padding-top: 180px;
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background: linear-gradient(90deg, #c300ff 0%, hsl(175, 100%, 50%) 100%);
  
}


.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 3px solid black;
  border-radius:10px;
  width: 500px;
}


.close {
  color: #aaaaaa;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.input2 input{ 
box-sizing: border-box;
  width: 250px;
  height: 30px;
  border-radius:5px;
  overflow: visible;
  background-color: #ffffff;
  font-size:20px;
  text-align:center;
  background:white;
  margin:5px;
  font-family:times new roman;
}
</style>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
   
    <div align="center">
  	<img src="images\logo1.png" style="border-radius:100px" alt="AucLiv" width="100px" height="100px" >


	</div >
    <div align="center" class="signinform" style="padding-left:60px;">
		<form align="center" style="display:flex; align:center;"  class="input2" name="Sign in" action="checkuser.php" id="signin" method=post>
	<table align="center" style="font-family:times new roman">
	<tr><th colspan="2" style="font-size:20px; font-family:times new roman">Sign In</th></tr>
	
	<tr><td><lable for=em>Email</lable></td><td><input type="email" name="em" id="email" placeholder="Enter email id" autofocus required></td></tr>
	
	<tr><td><lable for=pwd>Password</lable></td><td><input type="password" name="pwd"  id=password placeholder="Enter Password" autofocus required></td></tr>

	<tr><td></td><td><input style="margin-top:40px; border-radius:10px; width:170px; background-color:#0000ff; color:white; text-align:center; "type="submit" name="signin" value="Sign in "  autofocus></td></tr>
	<tr><td></td><td><a href="signup.php" style="border:none; background:white; color:red" id="link">Don't have an account</a></td></tr>
	</table>
	</form>
	
	
	
	
	
	
	
	</div>
  </div>

</div>

<script src="script.js"></script>
</body>
</html>