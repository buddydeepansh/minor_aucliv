
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>



.modal1 {
  display:none;
  position: fixed; 
  z-index: 1;
  padding-top: 20px; 
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

<body>

<!-- The Modal -->
<div id="myModal1" class="modal1">

  <!-- Modal content -->
  <div class="modal-content1">
    <span class="close1">&times;</span>
    <p></p>
    <div style="text-align:center">
    
	<img src="images\logo1.png" style="border-radius:100px" alt="AucLiv" width="100px" height="100px" >

	</div >
    <div class="signupform">
		<form style="display:flex; align:center;"  class="input1" name="Sign up"  id="signup" method="post" action="registeraction.php">
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
	<tr><td></td><td><button style="border:none; background:white; color:red" id="link1">Already have an account</button></td></tr>
	</table>
	</form>
	</div>
  </div>

</div>

<script>
var modal1 = document.getElementById("myModal1");
var link =document.getElementById("link1")
var btn1 = document.getElementById("myBtn2");


var span1 = document.getElementsByClassName("close1")[0];


btn1.onclick = function() {
  modal1.style.display = "block";
}

link.onclick = function() {
  modal.style.display = "block";
  modal1.style.display = "none";
}


span1.onclick = function() {
  modal1.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
    modal.style.display = "none";
  }
}
</script>





































































<style>

.modal {
  display: none; 
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
  opacity:0.9;
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
    <span class="close">&times;</span>
    <div style="text-align:center">
  	<img src="images\logo1.png" style="border-radius:100px" alt="AucLiv" width="100px" height="100px" >


	</div >
    <div class="signinform">
		<form style="display:flex; align:center;"  class="input2" name="Sign in" action="checkuser.php" id="signin" method=post>
	<table align="center" style="font-family:times new roman">
	<tr><th colspan="2" style="font-size:20px; font-family:times new roman">Sign In</th></tr>
	
	<tr><td><lable for=em>Email</lable></td><td><input type="email" name="em" id="email" placeholder="Enter email id" autofocus required></td></tr>
	
	<tr><td><lable for=pwd>Password</lable></td><td><input type="password" name="pwd"  id=password placeholder="Enter Password" autofocus required></td></tr>

	<tr><td></td><td><input style="margin-top:40px; border-radius:10px; width:170px; background-color:#0000ff; color:white; text-align:center; "type="submit" name="signin" value="Sign in "  autofocus></td></tr>
	<tr><td></td><td><button style="border:none; background:white; color:red" id="link">Don't have an account</button></td></tr>
	</table>
	</form>
	
	
	
	
	
	
	
	</div>
  </div>

</div>

<script>
var modal = document.getElementById("myModal");


var btn = document.getElementById("myBtn");

var link2 =document.getElementById("link")
var span = document.getElementsByClassName("close")[0];


btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

link2.onclick = function() {
  modal1.style.display = "block";
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


</body>
</html>