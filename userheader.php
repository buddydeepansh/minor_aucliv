<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>





    <style>

.userheader {
  
  padding: 20px 10px;
  padding-left:70px;

  width: 100%;
  height: 120px;
  background:#dc143c;
  
}

.logo{
  width: 80px;
  height: 80px;

  
  
  
}


.headerheading{
	float:right;
	margin-right:25px;
 

  
}

.headerheading img{
  height:80;
  width:80;
  border-radius:100px;
}

.subheaderright{
  float:right;
  padding:5px;
  margin-right:40px;

}
.subheaderright img{
  height:40px;
  width:40px;
}
  
.adminsubheader{
	height:50px;
	width:100%;
	background:black;
	display:flex;
	align-items:center;
}  

.adminsubheader a{
	color:white;
	font-family:times new roman;
	font-size:20px;
	padding:20px;
	displat:inline;
	text-decoration:none;

}

.adminsubheader a:hover{
	font-size:25px;
	color:blue;
}


.subheader{
	height:50px;
	width:100%;
	background-color:black;
}

		
.usersidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
   background: linear-gradient(165deg, #92907c 0%, hsl(149, 8%, 76%) 100%)
}		
	
.usersidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: WHITE;
  display: block;
  transition: 0.3s;
  font-family: "Times New Roman"
}
.usersidenav a:hover {
    background:black;
  color: white;
}

.usersidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
 
.dropdown-content {
  display: none;
  z-index:1;
  position: absolute;
  background-color: #f1f1f1;
  width:auto;
  box-shadow: 0px 4px 16px 0px rgba(0,0,0,0.2);
  margin-right:20px;
  background:white;
}

.dropdown-content a {
  color: black;

  font-size:medium;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color:black; color:white}

.headerheading:hover .dropdown-content {display: block;}

.headerheading:hover .dropimg {background-color: ;}

.heading1{
  color:white;
  font-family:times new Roman;
 
 font-size:60px;
}

.center{
  color:purple;
}

</style>
</head>
<body id="main">
    
<?php
if(session_id()==''){
session_start();}
if(empty($_SESSION['user_id'])){
header("location:http://localhost/minor2/index.php");

}   
?>
<?php
$profileimage=$_SESSION['profileimage']
?>
<div class="userheader">
 <a href="#default" class="imgdemo"><img src="images\logo2.png" class="logo"></a>
 
 
 
 <div class="headerheading">
	<img src="profile/<?php echo $profileimage; ?>" alt="image not found" class="dropimg" height="70px" width="70px">
  
  
  <div class="dropdown-content"  >
    <a href="userprofile.php">My Profile</a>
    <a href="#">your Auctions</a>
    
    <a href="wallet.php">Wallet</a>
    
    <a href="logout.php">Logout</a>
  </div>
  
 </div>

  
 <div align="center" class="center">
  <b class="heading1">Auc<span style="color:crimson">Liv.<span></b>
  </div>


</div>
<?php

?>
<script>
var sess=document.getElementById("session");
sess.onclick()=function(){
  session_unset();
}

</script>

<div class="subheader">
	<div id="mySidenav" class="usersidenav">
<a href="#" class="closebtn" onclick="closeNav()">&times;</a>

<a href="userhome.php" class="sidenava">Home</a>
<a href="upcomingauction.php" class="sidenava">Auctions</a>
<a href="addproductforauction.php" class="sidenava">Auction your product</a>
<a href="#" class="sidenava">Offer</a>
<a href="#" class="sidenava">About us</a>
</div>
<span style="font-size:30px;cursor:pointer;color:white;margin-left:10px" onclick="openNav()">&#9776;</span>





</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
  document.getElementById("main").style.marginLeft = "200px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>





</body>
</html>