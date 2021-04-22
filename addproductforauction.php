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

    if(empty($_SESSION['user_id'])){
    
        include 'header.php';
    }else{
        include 'userheader.php';
    }
    

    ?>

    <div class ="add">
    <form align="center" method="post"
    enctype="multipart/form-data" action="addproductforauction.php" method="post">
    <table align="center">
    <tr><th></th><th colspan="2" style="font-size:20px; font-family:times new roman"><h3>Add Product for Auction</h3></th></tr>
        <div>
        <tr><td><img id="uploadPreview" src="ui.png.jpeg"  style="width: 100px; height: 100px; background-color: white; alt="image not found">
            <br>
            <label for="chosefile">Upload image</label><td><input type="file" id="file" name="UploadPicture" onchange="PreviewImage()" required></td>
            <br><br>
        <tr><td><img id="uploadPreview1" src="ui.png.jpeg"  style="width: 100px; height: 100px; background-color: white; alt="image not found" >
            <br>
            <label for="chosefile">Upload image</label><td><input type="file" id="file1" name="UploadPicture1" onchange="PreviewImage1()" required></td>
            <br><br>
        <tr><td><img id="uploadPreview2" src="ui.png.jpeg"  style="width: 100px; height: 100px; background-color: white; alt="image not found" >
            <br>
            <label for="chosefile">Upload image</label><td><input type="file" id="file2" name="UploadPicture2" onchange="PreviewImage2()" required></td>
            <br><br> </div>
            
            <tr><td><label for="pname">Product name:</label></td>
        <td><input type="text" id="pname" name="pname" required><br></td></tr>
        
        <tr><td><label for="mrp">MRP:</label></td>
        <td><input type="number" id="mrp" name="mrp" required><br></td></tr>

        <tr><td><label for="ibp">Initial bid Price</label></td>
        <td><input type="number" id="ibp" name="ibp" required><br></td></tr>
        
        <tr><td> <label for="ebp">Expected bid price</label></td>
        <td><input type="number" id="ebp" name="ebp" required><br></td></tr>
        
        <tr><td><label for="brand">Brand</label></td>
        <td><input type="text" id="brand" name="brand" required><br></td></tr>
        
        <tr><td><label for="Category">Category</label></td>
        <td><input type="text" id="Category" name="Category" required><br></td></tr>
        
        <tr><td><label for="discription">Discription</label></td>
        <td><input type="text" id="discription" name="discription" required><br></td></tr>
    <tr><td></td><td>
        <input class="btn" type="submit" value="Add Product" id="btn_addproduct" name="uplode"></tr></td>  
    </table>
      </form></div>
      <script type="text/javascript">

        function PreviewImage() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("file").files[0]);
        
            oFReader.onload = function (oFREvent) {
                document.getElementById("uploadPreview").src = oFREvent.target.result;
            };
        };

        function PreviewImage1() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("file1").files[0]);
        
            oFReader.onload = function (oFREvent) {
                document.getElementById("uploadPreview1").src = oFREvent.target.result;
            };
        };

        function PreviewImage2() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("file2").files[0]);
        
            oFReader.onload = function (oFREvent) {
                document.getElementById("uploadPreview2").src = oFREvent.target.result;
            };
        };
        
        </script>
        
      <style>
          .add{
            background: linear-gradient(90deg, #c300ff 0%, hsl(175, 100%, 50%) 100%);

          }
          form{
                font-size: 20px;
                color:white;
                


          }
          form input{ 
        
              
box-sizing: border-box;

  width: 250px;
  height: 30px;
  border-radius:5px;
  overflow: visible;
  background-color: #ffffff;
  font-size:20px;
  text-align:center;
  background:white;
  margin:10px;
  margin-left:100px;
font-family:times new roman;
}



.btn{
    width:200px;
    height:45px;
    background:red;
    border-radius: 3px;
    padding: 0 15px;
    border: none;
    width: 288px;
    cursor: pointer;
    font-size: 16px;
    color: #fff;
    font-weight: 600;

}

      </style>

<?php
if(isset($_POST['uplode']))
{

    if(empty($_SESSION['user_id'])){
    
        echo"<script>alert('Login first!!');</script>";
    }
    else
    {
      $image1=$_FILES['UploadPicture']['name'];
      $image2=$_FILES['UploadPicture1']['name'];
      $image3=$_FILES['UploadPicture2']['name'];
      $p_name=$_POST['pname'];
      $ibp=$_POST['ibp'];
      $ebp=$_POST['ebp'];
      $p_brand=$_POST['brand'];
      $p_category=$_POST['Category'];
      $p_des=$_POST['discription'];
      $p_mrp=$_POST['mrp'];
      $seller_id=$_SESSION['user_id'];
    
      
      
    
      $folder="product/".$image1;
      $folder1="product/".$image2;
      $folder2="product/".$image3;
      $tempname = $_FILES["UploadPicture"]["tmp_name"];
      $tempname1 = $_FILES["UploadPicture1"]["tmp_name"];
      $tempname2 = $_FILES["UploadPicture2"]["tmp_name"];
    
                    
                    $query="insert into product(user_id,name,image,image2,image3,mrp,ibp,ebp,brand,category,Discription) values('$seller_id','$p_name','$image1','$image2','$image3','$p_mrp','$ibp','$ebp','$p_brand','$p_category','$p_des')";
                    
                    if(mysqli_query($con,$query))
                    {
                    if (move_uploaded_file($tempname, $folder))  {
                      if(move_uploaded_file($tempname1, $folder1)) {
                        if(move_uploaded_file($tempname2, $folder2)){
                          $msg = "Image uploaded successfully"; 
                          echo $msg;
                  }
                }
              }else{ 
                      $msg = "Failed to upload image"; 
                } 
                    echo'Product added successfully!!';
                    }
                    else
                    {
                        echo'error';
                    }
                    
                    }







			
        


      
        $query1=mysqli_query($con,"select * from product"); 
        
        $image=mysqli_fetch_array($query1); 

                }
        ?> 

</body>
</html>