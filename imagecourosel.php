<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/imagecourosel.css" />
  </head>
  <body>
    <div class="slider">
        <div align="center" class="slides">
          
          <input type="radio" name="radio-btn" id="radio1">
          <input type="radio" name="radio-btn" id="radio2">
          <input type="radio" name="radio-btn" id="radio3">
          <input type="radio" name="radio-btn" id="radio4">
        
          <div class="slide first">
            <img src="images/3.png" alt="" >
          </div>
          <div class="slide">
            <img src="images/2.png" alt="">
          </div>
          <div class="slide">
            <img src="images/1.png" alt="">
          </div>

        
        </div>
  
        <div align="center" class="navigation-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
         
        </div>
        
      </div>
      
  
      <script type="text/javascript">
      var counter = 1;
      setInterval(function(){
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if(counter > 3){
          counter = 1;
        }
      }, 4000);
      </script>
  </body>
</html>
