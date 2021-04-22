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
    <?php
    include 'header2.php';
    ?>

<style>



.modal1 {
  
  
  z-index: 1;
  padding-top: 150px; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%;
  overflow: auto; 
  background-color: rgb(0,0,0);
  background: linear-gradient(90deg, #c300ff 50%, hsl(175, 100%, 50%) 100%);
  
}


.modal-content1 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 3px solid black;
  border-radius:10px;
  width: 500px;
  
}


.close1 {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close1:hover,
.close1:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.input1 input{ 
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

.input{
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
<div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
<!-- The Modal -->
<div id="myModal1" class="modal1">

  <!-- Modal content -->
  <div class="modal-content1"align="center">
    
    <p></p>
    <div align="center">
    
	<img src="images\logo1.png" style="border-radius:100px" alt="AucLiv" width="100px" height="100px" >

	</div >
    <div class="signupform" align="center" style="padding-left:60px;">
		<form align="center"  class="input1" name="Sign up"  id="signup" method="post" action="registeraction.php">
	<table align="center" style="font-family:times new roman">
	<tr><th colspan="2" style="font-size:20px; font-family:times new roman">Sign Up</th></tr>
	<tr><td><lable for=fn>Name</lable></td><td><input type="text" name="fn" id=firstname placeholder="Enter Name" autofocus required></td></tr>
	<tr><td><lable for=em>Email</lable></td><td><input type="email" name="em" id="email" placeholder="Enter email id" autofocus required></td></tr>
	<tr><td><lable for=ad>Address</lable></td><td><input type="text" name="add" id=address placeholder="Address" autofocus required></td></tr>
	<tr><td><lable for=dob>DOB</lable></td><td><input type="date" name="dob" id=dob placeholder="Date of Birth" autofocus required></td></tr>
	<tr><td><lable for=ph>Phone no.</lable></td><td><input type="number_format" name="ph" id=ph  placeholder="Number" autofocus required></td></tr>

    <tr><td><label for="gender">Gender</label></td>
        <td><select class="input" id="gender" name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select><br></td></tr>

	<tr><td><lable for=pwd>Password</lable></td><td><input type="password" name="pwd"  id=password placeholder="Set Password" autofocus required></td></tr>
	<tr><td><lable for=pwd>Confirm</lable></td><td><input type="password" name="cpwd" id=cpassword placeholder="Confirm Password" autofocus required></td></tr>
	<tr><td></td><td><input style="margin-top:40px; border-radius:10px; width:170px; background-color:#0000ff; color:white "    type="submit" name="signup" value="Sign Up "  autofocus></td></tr>
	<tr><td></td><td><a href="signin.php" style="border:none; background:white; color:red" id="link1">Already have an account</a></td></tr>
	</table>
	</form>
	</div>
  </div>

</div>


<script src="script.js"></script>
</body>
</html>